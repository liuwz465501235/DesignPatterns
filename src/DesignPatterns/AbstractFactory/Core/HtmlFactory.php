<?php

namespace AbstractFactory\Core;

/**
 * Introduction 用户创建HTML组件的工厂
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-23
 */
class HtmlFactory extends AbstractFactory
{
    /**
     * Introduction 输出html格式的图片
     *
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-23
     */
    public function createPicture($path, $name = '')
    {
        return new Html\Picture($path, $name);
    }

    /**
     * Introduction 输出html格式的文本
     *
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-23
     */
    public function createText($content)
    {
        return new Html\Text($content);
    }
}
