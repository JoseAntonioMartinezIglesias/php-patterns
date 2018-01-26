<?php

include_once 'B.php';
include_once 'B.php';
include_once 'C.php';

class SubsystemFacade {

    private $b;
    private $c;
    private $d;

    public function SubsystemFacade() {
        $this->b = new B();
        $this->c = new C();
        $this->d = new D();
    }

    public function m3_4() {
        $this->b->m3();
        $this->b->m4();
    }

    public function m5() {
        $this->c->m5();
    }

    public function m1_2() {
        $this->d->m1();
        $this->d->m2();
    }

}
