<?php

trait walk{

	private $distance;

	public function action($add_distance = 0){

		$this->distance += $add_distance;
		return $this->distance;

	}

}


class Human {

	use walk;

	function __construct(){

		$this->distance = 10;

	}

	function result_distance(){

		return $this->distance;
	}

}

$human = new Human();
$human->action(2);
echo $human->result_distance();








