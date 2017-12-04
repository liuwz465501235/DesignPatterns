<?php

namespace Observer\Core;

/**
 * Introduction 类【观察者对象】
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-12-04
 * @Tips 用户表
 */
class UserObserver implements \SplObserver
{
    /**
     * Introduction 观察者要实现的唯一方法, 也是被 Subject 调用的方法
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-12-04
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject): void
    {
        echo '用户管理实现';
    }
}
