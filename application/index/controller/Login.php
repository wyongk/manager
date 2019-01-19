<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use app\index\model\User;

class Login extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request=$request;
    }

    /**
     * @description: 注册验证 
     * @param {type string} username
     * @param {type string} password
     * @return: boolean
     */
    public function index()
    {
        if($this->request->isPost())
        {
            $data=$this->request->param();
            $user=new User;
            $username=$data['username'];
            $password=md5(md5($data['password']));
            $where=array(
                'username'=>$data['username']
            );
            $info=$user->findData('',$where);
            if(!$info)
            {
                return '用户名错误';
            }
            elseif($info['password']===$password)
            {
                session('username',$username);
                return '登录成功';
            }
            else{
                return '密码错误';
            }
        }
    }
    /**
     * @description: 注销登录 
     * @param {type} 
     * @return: string
     */
    public function loginOUt()
    {
        session(null);
        return '退出成功';
    }

}