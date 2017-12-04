<?php

namespace Prototype\Core;

/**
 * Introduction CarBookPrototype
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-29
 */
class CarBookPrototype extends BookPrototype
{
    /**
     * 分类
     * @var type 
     */
    public $category = 'Car';

    
    /**
     * Introduction 克隆
     */
    public function __clone()
    {
        
    }
}
