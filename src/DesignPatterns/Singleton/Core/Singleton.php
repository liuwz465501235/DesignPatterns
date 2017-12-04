<?php

namespace Singleton\Core;

/**
 * Introduction 单例模式
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-29
 */
class Singleton
{
    /**
     * 对象实例
     * @var type 
     */
    protected static $instance;
    
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
    public static function getInstance()
    {
        if(null == static::$instance)
        {
            static::$instance = new static();
        }
        
        return static::$instance;
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
