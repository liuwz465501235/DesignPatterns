<?php

namespace Builder\Core;

/**
 * Introduction Director 是建造者模式的一部分，它知道建造者接口并通过建造者构建复杂对象。
 *              可以通过依赖注入建造者的方式构造任何复杂对象
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-29
 */
class Director
{
    /**
     * Introduction “导演”并不知道具体实现细节
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-29
     * @param \AbstractFactory\Core\BuilderInterface $builder
     * @return type
     */
    public function builder(BuilderInterface $builder)
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();
        
        return $builder->getVehicle();
    }
}
