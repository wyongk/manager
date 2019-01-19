# 权限管理系统
## 接口（所有接口提交类型post）
- 登录/退出接口
    127.0.0.1/managerment/public/login
    {
        接收：
            username: string 用户名
            password: string 密码
        返回：
            status:1   登录成功
            status:2   用户名错误
            status:3   密码错误
    }
    127.0.0.1/managerment/public/loginout
    {
        返回：
            status:success/failed   成功/失败
    }
- 用户操作接口
    127.0.0.1/managerment/public/user
    {
        返回：
            status:success/failed   成功/失败
            list
            {
                u_id:用户id
                username:用户名
                password:密码
                r_id:角色id
                r_name:角色名称
            }
    }
    127.0.0.1/managerment/public/useradd
    {
        接收：
            username：用户名
            password：密码
            r_id：    角色id
        返回：
            status:success/failed   成功/失败
    }
    127.0.0.1/managerment/public/userupdate
    {
        接收：
            u_id:用户id
            username：（可选）
            password：（可选）
            r_id：    （可选）-------可选指可以不发送这个
        返回：
            status:success/failed   成功/失败
    }
    127.0.0.1/managerment/public/userdelete
    {
        接收：
            u_id: 可以是数组，也可以是单个值
        返回：
            status:success/failed   成功/失败
    }