<?php
// method_exists

class base{

	protected $mono_base = "non<br>";
	
	public function __construct(){

		if(method_exists($this, exists_test)){
			$this->mono_base = "exists_test is true!<br>";
		}

	}

}

class mono extends base{

	public function exists_test(){
		return $this->mono_base;
	}

}

	class non extends base{

		public function test(){
			return $this->mono_base;
		}	

	}



$mono = new mono;
echo $mono->exists_test();

$non = new non;
echo $non->test();

