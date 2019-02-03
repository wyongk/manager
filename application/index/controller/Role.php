<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Role as MRole;
use think\Request;

class Role extends Controller
{

    protected $role;
    protected $request;

    public function __construct(Request $request)
    {
        $this->role=new MRole;
        $this->request=$request;
    }

    /**
     * @description: 查询所有用户
     * @param {type}  
     * @return: 所有用户数据 array
     */
    public function index()
    {
        $list=$this->role->selectData('','');
        $datas=array(
            'status'=>'success',
            'list'=>$list
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
            $flag=$this->role->addData($datas);
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
                'r_id'=>$data['r_id']
            );
            $flag=$this->role->updateDatas($where,$data);
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
            $flag=$this->role->deleteData($data['r_id']);
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
