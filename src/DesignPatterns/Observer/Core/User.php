<?php

namespace Observer\Core;

/**
 * Introduction 观察者模式: 被观察者对象
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-12-4
 */
class User implements \SplSubject
{
    /**
     * 观察者对象
     * @var type 
     */
    protected $observers;


    /**
     * Introduction 构造方法
     */
    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }
    
    /**
     * Introduction 附加观察者
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-12-04
     * @param \SplObserver $observer
     */
    public function attach(\SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    /**
     * Introduction 取消观察者
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-12-04
     * @param \SplObserver $observer
     */
    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    /**
     * Introuduction 通知观察者的方法
     * 
     * @author 刘维中
     * @email liu.wz@qq.com
     * @since 1.0
     * @date 2017-12-04
     */
    public function notify(): void
    {
        foreach($this->observers as $observer)
        {
            $observer->update($this);
        }
    }
}
