<?php

namespace AbstractFactory\Core;

/**
 * Introduction Text类
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-23
 */
abstract class Text implements MediaInterface
{
    /**
     * 文本
     * @var type 
     */
    protected $content;
    
    
    /**
     * Intrdouction 构造方法
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }
}