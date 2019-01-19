<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User as MUser;

class User extends Controller
{
    /**
     * @description: 查询所有用户
     * @param {type}  
     * @return: 所有用户数据 array
     */
    public function index()
    {
        $user=new MUser;
        $list=$user->selectData('','');
        $datas=array(
            'status'=>'success',
            'list'=>$list
        );
        return json_encode($datas);
    }

    

}
