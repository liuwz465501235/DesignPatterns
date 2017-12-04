<?php

namespace FluentInterface\Code;

/**
 * Introduction 流接口模式【方法链】
 *
 * @author 刘维中
 * @email liu.wz@qq.com
 * @since 1.0
 * @date 2017-12-4
 */
class Sql
{
    /**
     * fields
     * @var type 
     */
    protected $fields = [];
    
    /**
     * from
     * @var type 
     */
    protected $from = [];
    
    /**
     * where
     * @var type 
     */
    protected $where = [];
    
    
    /**
     * select
     * @param type $fields
     * @return $this
     */
    public function select($fields = [])
    {
        $this->fields = $fields;
        
        return $this;
    }
    
    /**
     * from
     * @param type $from
     * @return $this
     */
    public function from($from = [])
    {
        $this->from = $from;
        
        return $this;
    }
    
    /**
     * where
     * @param type $where
     * @return $this
     */
    public function where($where = [])
    {
        $this->where = $where;
        
        return $this;
    }
    
    /**
     * Query
     * @return type
     */
    public function query()
    {
        return 'SELECT ' . implode(',', $this->fields) . ' FROM ' . implode(',', $this->from) . ' WHERE ' . implode(' AND ', $this->where);
    }
}
