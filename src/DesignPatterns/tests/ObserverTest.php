<?php

require dirname(__DIR__) . '/Observer/autoloader.php';

/**
 * Introduction ObserverTest
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-12-4
 */
class ObserverTest
{
    
    public function test()
    {
        
        $user = new Observer\Core\User();
        
        $user->attach( new Observer\Core\UserObserver() );
        $user->attach( new \Observer\Core\MemberObserver() );
        
        $user->notify();
    }
    
}


$t = new ObserverTest();

$r = $t->test();

var_dump($r);