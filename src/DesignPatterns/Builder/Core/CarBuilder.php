<?php

namespace Builder\Core;

/**
 * Introduction 用于创建汽车
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-29
 */
class CarBuilder implements BuilderInterface
{
    /**
     * 自行车对象
     * @var type 
     */
    protected $car;


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
        $this->car->setParts('leftDoors', new Parts\Doors());
        $this->car->setParts('rightDoors', new Parts\Doors());
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
        $this->car->setParts('engine', new Parts\Engine());
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
        $this->car->setParts('wheelLF', new Parts\Wheel());
        $this->car->setParts('wheelRF', new Parts\Wheel());
        $this->car->setParts('wheelLR', new Parts\Wheel());
        $this->car->setParts('wheelRR', new Parts\Wheel());
    }

    /**
     * Introduction 创建汽车
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-29
     */
    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }

    /**
     * Introduction 获取汽车
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-29
     */
    public function getVehicle()
    {
        return $this->car;
    }
}