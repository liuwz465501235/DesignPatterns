<?php

namespace Prototype\Core;

/**
 * Introduction 书本原型链
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-29
 */
abstract class BookPrototype
{
    /**
     * 书名
     * @var type 
     */
    protected $title;
    
    /**
     * 分类
     * @var type 
     */
    protected $category;
    
    
    /**
     * 抽象的克隆类
     */
    abstract public function __clone();
    
    /**
     * 获取书名
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * 设置书名
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}
