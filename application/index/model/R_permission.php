<?php
namespace app\index\model;
use think\Model;

class R_permission extends Model
{
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
    public function updateData($where='',$data)
    {
        if(empty($data))
        {
            return false;
        }
        return $this->where($where)->update($data);
    }
    /**
     * @description: 删除数据 
     * @param {type array} data
     * @return: boolean
     */
    public function deleteData($where)
    {
        if(empty($where))
        {
            return false;
        }
        return self::destroy(function($query){
            $query->where($where);
        });
    }
}