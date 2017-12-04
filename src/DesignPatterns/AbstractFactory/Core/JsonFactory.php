<?php

namespace AbstractFactory\Core;

/**
 * Introduction 输出json格式的工厂类
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-23
 */
class JsonFactory extends AbstractFactory
{
    /**
     * Introduction 输出json格式的图片
     *
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-23
     */
    public function createPicture($path, $name = '')
    {
        return new Json\Picture($path, $name);
    }

    /**
     * Introduction 输出json格式的文本
     *
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-11-23
     */
    public function createText($content)
    {
        return new Json\Text($content);
    }

}
