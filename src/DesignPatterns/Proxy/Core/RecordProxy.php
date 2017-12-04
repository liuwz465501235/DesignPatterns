<?php

namespace Proxy\Core;

/**
 * Introduction RecordProxy类
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-29
 */
class RecordProxy extends Record
{
    /**
     * isDirty
     * @var type 
     */
    protected $isDirty = false;
    
    /**
     * isInitialized
     * @var type 
     */
    protected $isInitialized = false;
    
    
    /**
     * Introduction 构造方法
     * 
     * @param type $data
     */
    public function __construct($data)
    {
        parent::__construct($data);
        
        if(null !== $data)
        {
            $this->isDirty = true;
            
            $this->isInitialized = true;
        }
    }
    
    /**
     * Introduction 魔术方法__set
     * 
     * @param type $name
     * @param type $value
     */
    public function __set($name, $value)
    {
        $this->isDirty = true;
        
        parent::__set($name, $value);
    }
}
