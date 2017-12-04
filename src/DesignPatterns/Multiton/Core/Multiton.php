<?php

namespace Multiton\Core;

/**
 * Introduction 多例模式
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-29
 */
class Multiton
{
    /**
     * Introduction 实例化对象的数组
     * @var type 
     */
    protected static $instances = [];
    
    
    /**
     * Introduction 防止从外部实例化
     */
    protected function __construct()
    {
        
    }
    
    /**
     * Introduction 获取实例
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-29
     * @param type $instance
     */
    public static function getInstance($instance)
    {
        if(!array_key_exists($instance, self::$instances))
        {
            self::$instances[$instance] = new self();
        }
        
        return self::$instances[$instance];
    }

    /**
     * Introduction 防止实例从外部被克隆
     */
    protected function __clone()
    {
        
    }
    
    /**
     * Introduction 防止实例从外部反序列化
     */
    protected function __wakeup()
    {
        
    }
}
