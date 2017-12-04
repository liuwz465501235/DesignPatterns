<?php

namespace AbstractFactory\Core;

/**
 * Introduction 静态抽奖类
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-23
 */
abstract class AbstractFactory
{
    /**
     * Introduction 生成文本
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-23
     */
    abstract public function createText($content);
    
    /**
     * Introduction 生成图片
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-23
     */
    abstract public function createPicture($path, $name = '');
}
