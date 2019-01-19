<?php
namespace app\index\model;
use think\Model;

class Permission extends Model
{
    protected $pk='p_id';

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
    /**
     * @description: 添加用户
     * @param {type array} data
     * @return: boolean
     */
    public function addData($data)
    {
        if(empty($data))
        {
            return false;
        }
        return $this->saveAll($data);
    }
    /**
     * @description: 修改数据 
     * @param {type array} data
     * @return: boolean
     */
    public function updateData($data)
    {
        if(empty($data))
        {
            return false;
        }
        return $this->saveall($data);
    }
    /**
     * @description: 删除数据 
     * @param {type array} data
     * @return: boolean
     */
    public function deleteData($data)
    {
        if(empty($data))
        {
            return false;
        }
        return self::destroy($data);
    }
}