<?php

require dirname(__DIR__) . '/Prototype/autoloader.php';

/**
 * Introduction 原型链设计模式测试
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-29
 */
class PrototypeTest
{
    /**
     * Introductionn 获取书名
     * @param Prototype\Core\BookPrototype $prototype
     * @return type
     */
    public function book(Prototype\Core\BookPrototype $prototype, $title = '')
    {
        $book = clone $prototype;
        
        $book->setTitle($title);
        
        return $book;
    }
}


$test = new PrototypeTest();

$book = $test->book(new \Prototype\Core\FooBookPrototype(), '你好');
$book2 = $test->book(new Prototype\Core\CarBookPrototype(), '天下');

var_dump($book);
var_dump($book2);
