<?php

namespace AbstractFactory\Core;

/**
 * Introduction Picture类
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-23
 */
abstract class Picture implements MediaInterface
{
    /**
     * 图片路径
     * @var type 
     */
    protected $path;
    
    /**
     * 图片名称
     * @var type 
     */
    protected $name;
    
    
    /**
     * Introduction 构造方法
     * @param string $path
     * @param string $name
     */
    public function __construct(string $path, string $name = '')
    {
        $this->path = $path;
        
        $this->name = $name;
    }
}
