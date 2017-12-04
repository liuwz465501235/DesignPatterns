<?php

namespace AbstractFactory\Core;

/**
 * Introduction MediaInterface接口 
 *              该接口不是抽象工厂设计模式的一部分, 一般情况下, 每个组件都是不相干的
 *
 * @author 刘维中
 * @email liuwz@gvgcn.com
 * @since 1.0
 * @date 2017-11-23
 */
interface MediaInterface
{
    /**
     * Introduction 数据渲染
     * 
     * @author 刘维中
     * @email liuwz@gvgcn.com
     * @since 1.0
     * @date 2017-11-23
     */
    public function render();
}
