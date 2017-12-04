<?php

namespace Builder\Core\Parts;

/**
 * Introduction VehicleInterface是车辆接口
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-29
 */
abstract class Vehicle
{
    /**
     * 数据源
     * @var type 
     */
    protected $data;
    
    
    /**
     * Introduction 设置模块 
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-29
     * @param type $key
     * @param type $value
     */
    public function setParts($key, $value)
    {
        $this->data[$key] = $value;
    }
}
