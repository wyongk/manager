<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User as MUser;
use think\Request;

class User extends Controller
{

    protected $user;
    protected $request;

    public function __construct(Request $request)
    {
        $this->user=new MUser;
        $this->request=$request;
    }

    /**
     * @description: 查询所有用户
     * @param {type}  
     * @return: 所有用户数据 array
     */
    public function index()
    {
        $list=$this->user->selectData('','');
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
            $flag=$this->user->addData($data);
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
            $flag=$this->user->updateData($data);
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
            $flag=$this->user->deleteData($data[u_id]);
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
