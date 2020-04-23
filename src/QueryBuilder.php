<?php

namespace CLC;

class QueryBuilder
{
    public function select($select = [])
    {
        return $this;
    }

    public function where($key, $value)
    {
        return $this;
    }

    public function order($key, $value)
    {
        return $this;
    }
}