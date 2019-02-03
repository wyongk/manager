<?php
namespace app\index\model;
use think\Model;

class In_stock extends Model
{
    protected $pk='i_id';

    /**
     * @description: 保存时间时，转换为时间戳
     * @param {type string} $value 
     * @return: time
     */
    public function setITimespanAttr($value)
    {
        return strtotime($value);
    }
    /**
     * @description: 查询时间时，时间戳转化为时间
     * @param {type int} $value 
     * @return: string
     */
    public function getITimespanAttr($value)
    {
        return date('Y-m-d H:i:s',$value);
    }
    /**
     * @description: 保存时间时，转换为时间戳
     * @param {type string} $value 
     * @return: time
     */
    public function setIOuttimeAttr($value)
    {
        return strtotime($value);
    }
    /**
     * @description: 查询时间时，时间戳转化为时间
     * @param {type int} $value 
     * @return: string
     */
    public function getIOuttimeAttr($value)
    {
        return date('Y-m-d H:i:s',$value);
    }

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
    public function deleteData($data)
    {
        if(empty($data))
        {
            return false;
        }
        return self::destroy($data);
    }
}