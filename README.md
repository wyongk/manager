# 权限管理系统
## 接口（所有接口提交类型post）
- 登录/退出接口
    127.0.0.1/managerment/public/login<br>
    {<br>
        接收：<br>
            username: string 用户名<br>
            password: string 密码<br>
        返回：<br>
            status:1   登录成功<br>
            status:2   用户名错误<br>
            status:3   密码错误<br>
    }<br>
    127.0.0.1/managerment/public/loginout<br>
    {<br>
        返回：<br>
            status:success/failed   成功/失败<br>
    }<br>
- 用户操作接口
    127.0.0.1/managerment/public/user<br>
    {<br>
        返回：<br>
            status:success/failed   成功/失败<br>
            list<br>
            {<br>
                u_id:用户id<br>
                username:用户名<br>
                password:密码<br>
                r_id:角色id<br>
                r_name:角色名称<br>
            }<br>
    }<br>
    127.0.0.1/managerment/public/useradd<br>
    {<br>
        接收：<br>
            username：用户名<br>
            password：密码<br>
            r_id：    角色id<br>
        返回：<br>
            status:success/failed   成功/失败<br>
    }<br>
    127.0.0.1/managerment/public/userupdate<br>
    {<br>
        接收：<br>
            u_id:用户id<br>
            username：（可选）<br>
            password：（可选）<br>
            r_id：    （可选）-------可选指可以不发送这个<br>
        返回：<br>
            status:success/failed   成功/失败<br>
    }<br>
    127.0.0.1/managerment/public/userdelete<br>
    {<br>
        接收：<br>
            u_id: 可以是数组，也可以是单个值<br>
        返回：<br>
            status:success/failed   成功/失败<br>
    }<br>
-权限操作接口       
test