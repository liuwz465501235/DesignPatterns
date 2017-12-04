<?php

namespace AbstractFactory\Core\Json;

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
     * Introduction 数据输出
     * 
     * @author 刘维中
     * @email liuwz@gvgcn.com
     * @since 1.0
     * @date 2017-11-23
     */
    public function render()
    {
        return json_encode(['name'=> $this->name, 'path' => $this->path]);
    }
}
