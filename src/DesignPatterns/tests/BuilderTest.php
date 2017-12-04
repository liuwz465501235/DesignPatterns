<?php

require dirname(__DIR__) . '/Builder/autoloader.php';

/**
 * Introduction BuilderTest
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-11-29
 */
class BuilderTest
{
    
    protected $director;
    
    
    public function setUp()
    {
        $this->director = new \Builder\Core\Director();
        
        return $this;
    }
    
    public function builder(\Builder\Core\BuilderInterface $builder)
    {
        return $this->director->builder($builder);
    }
}



$builder = new BuilderTest();

$bike = $builder->setUp()->builder(new \Builder\Core\BikeBuilder());

var_dump($bike);