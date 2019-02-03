# 权限管理系统
## 接口（所有接口提交类型post）
#### (所有没有写的返回的接口返回值均为  status:success/failed   成功/失败)
- 登录/退出接口
    127.0.0.1/manager/public/login<br>
    {<br>
        接收：<br>
            username: string 用户名<br>
            password: string 密码<br>
        返回：<br>
            status:1   登录成功<br>
            status:2   用户名错误<br>
            status:3   密码错误<br>
    }<br>
    127.0.0.1/manager/public/loginout<br>
    {<br>
        返回：<br>
            status:success/failed   成功/失败<br>
    }<br>
- 用户操作接口
    127.0.0.1/manager/public/user<br>
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
    127.0.0.1/manager/public/useradd<br>
    {<br>
        接收：<br>
            username：用户名<br>
            password：密码<br>
            r_id：    角色id<br>
        返回：<br>
            status:success/failed   成功/失败<br>
    }<br>
    127.0.0.1/manager/public/userupdate<br>
    {<br>
        接收：<br>
            u_id:用户id<br>
            username：（可选）<br>
            password：（可选）<br>
            r_id：    （可选）-------可选指可以不发送这个<br>
        返回：<br>
            status:success/failed   成功/失败<br>
    }<br>
    127.0.0.1/manager/public/userdelete<br>
    {<br>
        接收：<br>
            u_id: 可以是数组，也可以是单个值<br>
        返回：<br>
            status:success/failed   成功/失败<br>
    }<br>
- 权限操作接口       
127.0.0.1/manager/public/permission     
{
    返回：  
    list  
    {  
        p_id:权限id  
        p_name:权限名字  
    }  
}  
127.0.0.1/manager/public/permissionadd  
{  
    接收：  
    p_name:权限名称  
}  
127.0.0.1/manager/public/permissionupdate  
{  
    p_id:权限id  
    p_name:权限名称      
}  
127.0.0.1/manager/public/permissiondelete   
{  
    p_id:(数组/一个值)  
}  
- 角色操作接口       
127.0.0.1/manager/public/role     
{
    返回：  
    list  
    {  
        r_id:角色id  
        r_name:角色名字  
    }  
}  
127.0.0.1/manager/public/roleadd  
{  
    接收：  
    r_name:角色名称  
}  
127.0.0.1/manager/public/roleupdate  
{  
    r_id:角色id  
    r_name:角色名称      
}  
127.0.0.1/manager/public/roledelete   
{  
    r_id:(数组/一个值)  
}  
- 角色-权限操作接口       
127.0.0.1/manager/public/rpermission     
{
    返回：  
    list  
    {  
        r_id:角色id  
        p_id:角色名字  
    }  
}  
127.0.0.1/manager/public/rpermissionadd  
{  
    接收：  
    r_id:角色id  
    p_id:权限id    .-

}  
127.0.0.1/manager/public/rpermissiondelete   
{  
    r_id:角色id  
    p_id:权限id    
}  
- 计划操作接口       
127.0.0.1/manager/public/plan     
{
    返回：  
    list  
    {  
        p_id:计划id  
        p_name:计划名字  
        p_status:计划进行状态 （0：未完成；1：完成）  
    }  
}  
127.0.0.1/manager/public/planadd  
{  
    接收：  
    p_name:计划名称  
}  
127.0.0.1/manager/public/planupdate  
{  
    p_id:计划id  
    p_name:计划名称      
}  
127.0.0.1/manager/public/plandelete   
{  
    p_id:(数组/一个值)  
}  
- 步骤操作接口       
127.0.0.1/manager/public/step     
{
    返回：  
    record  
    {  
        p_id=>array(  
            s_id:步骤id  
            p_id:计划id  
            s_name:步骤名字  
            s_status:步骤完成状态（0：未完成；1：完成）  
        )  
    }  
}  
127.0.0.1/manager/public/stepadd  
{  
    接收：  
    s_name:步骤名称  
}  
127.0.0.1/manager/public/stepupdate  
{  
    s_id:步骤id  
    s_name:步骤名称      
}  
127.0.0.1/manager/public/stepdelete   
{  
    s_id:(数组/一个值)  
}  
- 库存操作接口       
127.0.0.1/manager/public/instock     
{
    返回：  
    list  
    {  
        i_id:库存id  
        i_name:库存名称  
        i_model:型号   
        i_count:数量  
        i_timespan:入库时间  
        i_outtime:出库时间  
    }  
}  
127.0.0.1/manager/public/instockadd  
{  
    接收：  
        i_name:库存名称  
        i_model:型号   
        i_count:数量  
        i_timespan:入库时间  
        i_outtime:出库时间  
}  
127.0.0.1/manager/public/instockupdate  
{  
    i_id:库存id  
    i_name:库存名称（可选）  
    i_model:型号（可选）   
    i_count:数量（可选）  
    i_timespan:入库时间（可选）  
    i_outtime:出库时间（可选）       
}  
127.0.0.1/manager/public/instockdelete   
{  
    i_id:(数组/一个值)  
}  