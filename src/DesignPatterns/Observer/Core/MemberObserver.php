<?php

namespace Observer\Core;

/**
 * Introduction 类【观察者对象】
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-12-4
 * @Tips 成员管理
 */
class MemberObserver implements \SplObserver
{
    //put your code here
    public function update(\SplSubject $subject): void
    {
        echo '成员管理实现';
    }
}
