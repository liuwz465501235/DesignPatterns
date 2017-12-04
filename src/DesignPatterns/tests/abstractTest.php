<?php

require_once dirname(__DIR__) . '/AbstractFactory/autoloader.php';

/**
 * Introduction 测试类
 * 
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-27
 */
class AbstractTest
{
    
    public function main()
    {
        $this->html(new \AbstractFactory\Core\Html\Text('我是一个中国人'));
        
        $this->html(new \AbstractFactory\Core\Json\Text('我是一个中国人'));
    }
    
    
    
    public function html(\AbstractFactory\Core\AbstractFactory $factory)
    {
        var_dump($factory);exit;
        
        $text = $factory->createText($content);
        
        $res = $text->render();
        
        var_dump($res);
        
    }
    
}


$test = new AbstractTest();

$test->main();