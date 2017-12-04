<?php

namespace Proxy\Core;

/**
 * Introduction Record类
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-29
 */
class Record
{
    /**
     * 数据源
     * @var type 
     */
    protected $data;
    
    
    /**
     * Introduction 构造方法
     * 
     * @param type $data
     */
    public function __construct($data = null)
    {
        $this->data = (array)$data;
    }
    
    /**
     * Introduction 魔术方法__set
     * 
     * @param type $name
     * @param type $value
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
    
    /**
     * Introduction 魔术方法__get
     * 
     * @param type $name
     */
    public function __get($name)
    {
        if(array_key_exists($name, $this->data))
        {
            return $this->data[$name];
        }
        else
        {
            return null;
        }
    }
}
