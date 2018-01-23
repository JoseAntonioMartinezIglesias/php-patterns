<?php

include_once 'A.php';
include_once 'B.php';
include_once 'C.php';

class SubsystemFacade {

	private $a;
	private $b;
	private $c;

	public function SubsystemFacade() {
		$this->a = new A();
		$this->b = new B();
		$this->c = new C();
	}
	
	public function m1_2() {
		$this->a->m1();
		$this->a->m2();
	}

	public function m3_4() {
		$this->b->m3();
		$this->b->m4();
	}

	public function m5() {
		$this->c->m5();
	}

}
