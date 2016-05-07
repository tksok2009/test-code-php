<?php

trait walk{

	private $distance;

	public function action_walk($add_distance = 0){

		$this->distance += $add_distance;
		return $this->distance;

	}

}

trait run{

	private $distance;

	public function action_run($add_distance = 0){

		$this->distance += $add_distance * 2;
		return $this->distance;

	}

}


class Human {

	use walk,run;

	function __construct(){

		$this->distance = 10;

	}

	function result_distance(){

		return $this->distance;
	}

}

$human = new Human();
$human->action_walk(2);
$human->action_run(2);
echo $human->result_distance();








