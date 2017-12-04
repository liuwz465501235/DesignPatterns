<?php

namespace Builder\Core;

/**
 * Introduction 用于创建自行车
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-29
 */
class BikeBuilder implements BuilderInterface
{
    /**
     * 自行车对象
     * @var type 
     */
    protected $bike;


    /**
     * Introduction 添加门
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-29
     */
    public function addDoors()
    {
        return '没有doors';
    }

    /**
     * Introduction 添加发动机
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-29
     */
    public function addEngine()
    {
        $this->bike->setParts('engine', new Parts\Engine());
    }

    /**
     * Introduction 添加轮子
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-29
     */
    public function addWheel()
    {
        $this->bike->setParts('forwardWheel', new Parts\Wheel());
        $this->bike->setParts('rearWheel', new Parts\Wheel());
    }

    /**
     * Introduction 创建自行车
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-29
     */
    public function createVehicle()
    {
        $this->bike = new Parts\Bike();
    }

    /**
     * Introduction 获取自行车
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-29
     */
    public function getVehicle()
    {
        return $this->bike;
    }
}
