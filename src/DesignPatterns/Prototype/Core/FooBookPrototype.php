<?php

namespace Prototype\Core;

/**
 * Introduction FooBookPrototype
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-29
 */
class FooBookPrototype extends BookPrototype
{
    /**
     * 分类
     * @var type 
     */
    protected $categroy = 'Foo';


    /**
     * Introduction 克隆
     */
    public function __clone()
    {
        
    }
}
