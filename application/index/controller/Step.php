<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Step as MStep;
use think\Request;

class Step extends Controller
{

    protected $step;
    protected $request;

    public function __construct(Request $request)
    {
        $this->step=new MStep;
        $this->request=$request;
    }

    /**
     * @description: 查询所有用户
     * @param {type}  
     * @return: 所有用户数据 array
     */
    public function index()
    {
        $list=$this->step->selectData('','');
        $recard=array();
        foreach ($list as $v)
        {
            $recard[$v['p_id']][]=$v;
        }
        $datas=array(
            'status'=>'success',
            'list'=>$recard
        );
        return json_encode($datas);
    }

    /**
     * @description: 添加用户
     * @param {type post} data  
     * @return: json
     */
    public function add()
    {
        if($this->request->isPost())
        {
            $data=$this->request->param();
            $datas=array();
            $datas[]=$data;
            $flag=$this->step->addData($datas);
            if($flag)
            {
                return json_encode(array('status'=>'success'));
            }
            else
            {
                return json_encode(array('status'=>'failed'));                
            }
        }
    }
    /**
     * @description: 修改用户信息 
     * @param {type array}  data
     * @return: json
     */
    public function update()
    {
        if($this->request->isPost())
        {
            $data=$this->request->param();
            $where=array(
                's_id'=>$data['s_id']
            );
            $flag=$this->step->updateData($where,$data);
            if($flag)
            {
                return json_encode(array('status'=>'success'));
            }
            else
            {
                return json_encode(array('status'=>'failed'));                
            }
        }
    }
    /**
     * @description: 删除数据 
     * @param {type array} data
     * @return: json
     */
    public function delete()
    {
        if($this->request->isPost())
        {
            $data=$this->request->param();
            $flag=$this->step->deleteData($data['s_id']);
            if($flag)
            {
                return json_encode(array('status'=>'success'));
            }
            else
            {
                return json_encode(array('status'=>'failed'));                
            }
        }
    }
}
