<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\R_permission as MRpermission;
use think\Request;

class RPermission extends Controller
{

    protected $permisssion;
    protected $request;

    public function __construct(Request $request)
    {
        $this->permisssion=new MRpermission;
        $this->request=$request;
    }

    /**
     * @description: 查询所有用户
     * @param {type}  
     * @return: 所有用户数据 array
     */
    public function index()
    {
        $list=$this->permisssion->selectData('','');
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
            $flag=$this->permisssion->addData($data);
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
            $flag=$this->permisssion->updateData($data);
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
            $where=array(
                'r_id'=>$data['r_id'],
                'p_id'=>$data['p_id']
            );
            $flag=$this->permisssion->deleteData($where);
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
