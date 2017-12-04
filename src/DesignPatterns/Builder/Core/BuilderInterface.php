<?php

namespace Builder\Core;

/**
 * Introduction 构建者对象
 *
 * @author 刘维中
 * @email liuwz@gvgcn.com
 * @since 1.0
 * @date 2017-11-29
 */
interface BuilderInterface
{
    /**
     * Introduction 创建车辆
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-29
     */
    public function createVehicle();
    
    /**
     * Introduction 添加门
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-29
     */
    public function addDoors();

    /**
     * Introduction 添加轮子
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-29
     */
    public function addWheel();
    
    /**
     * Introduction 添加发动机
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-29
     */
    public function addEngine();
    
    /**
     * Introduction 获取车辆
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-29
     */
    public function getVehicle();
}
