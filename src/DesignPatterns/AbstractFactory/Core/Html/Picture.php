<?php

namespace AbstractFactory\Core\Html;

use AbstractFactory\Core\Picture as BasePicture;

/**
 * Introduction Picture
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-23
 */
class Picture extends BasePicture
{
    /**
     * Introduction 输出数据
     * 
     * @author 刘维中
     * @email liuwz@gvgcn.com
     * @since 1.0
     * @date 2017-11-23
     */
    public function render()
    {
        return sprintf('<img src="%s" title="%s">', $this->path, $this->name);
    }
}
