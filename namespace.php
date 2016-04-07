<?php
namespace Test1;
class Directory1
{
  public function __construct()
  {
    echo 'Test1\Directory', PHP_EOL;
  }
}



namespace Test2;
class Directory2
{
  public function __construct()
  {
    echo 'Test2\Directory', PHP_EOL;
  }
}





//namespace Test1,Test2をTest3で利用したい場合
namespace Test3;
use Test1;
use Test2;
$direcotry1 = new Test1\DIrectory1();
$direcotry2 = new Test2\DIrectory2();

