<?php
namespace app\index\model;
use think\Model;

class User extends Model
{
    protected $pk='u_id';

    /*
    *查询一条数据
    *param $field  查询字段
    *param $where  查询条件
    *return  数据
    */
    public function findData($field='',$where='')
    {
        if(empty($where))
        {
            return false;
        }
        return $this->field($field)->where($where)->find();
    }
    /**
     * @description: 查询多条数据
     * @param {type string} 查询范围
     * @param {type string} 查询条件 
     * @return: 数据集
     */
    public function selectData($field='',$where='')
    {
        return $this->field($field)->where($where)->select();
    }
}