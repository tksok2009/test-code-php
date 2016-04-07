<?php
abstract class Db_base{

	function returns($data=null){
		return 'mock/'.get_class($this).$data;
	}
}


class A_base extends Db_base{

	function __construct(){

	}

}

class B_base extends Db_base{

	function __construct(){

	}

}


class Ob{

	static public $obs;

	function __construct(){

	}

	static function set($class,$method){
		self::$obs = new $class();
		//echo $test1->returns();
		return self::$obs->$method();
		//echo "get";
	}
}

echo Ob::set('A_base','returns');
echo Ob::set('B_base','returns');














	echo " <hr>";
	$mem = memory_get_usage();
	$mem = number_format($mem);
	print("使用Memory:{$mem}");

	echo "<br>最大Memory:";

	print_r(memory_get_peak_usage());

	echo "<div style='clear:both;height:200px;'></div>";




