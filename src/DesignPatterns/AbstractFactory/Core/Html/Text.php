<?php

namespace AbstractFactory\Core\Html;

use AbstractFactory\Core\Text as BaseText;
/**
 * Introduction Text
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-23
 */
class Text extends BaseText
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
        return '<div>' . htmlspecialchars($this->content) . '</div>';
    }
}
