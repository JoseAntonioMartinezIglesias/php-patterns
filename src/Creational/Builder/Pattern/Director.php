<?php

class Director {

    /**
     * @var Builder
     */
    private $builder;

    public function __construct(Builder $builder) {
        
        $builder->builderPartA();
        $builder->builderPartB();
        $this->builder = $builder;
        
    }

    public function getResult() {        
        return $this->builder;
    }

}
