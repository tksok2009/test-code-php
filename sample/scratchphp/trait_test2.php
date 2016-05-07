<?php

/*
trait HelloTrait {
  protected $hello = 'hello trait';
  function hello() {
    echo $this->hello;
  }
}
class Hello {
  use HelloTrait;
  protected $hello = 'hello class';
}

echo (new Hello)->hello();
*/


trait HelloTrait {
  //abstract protected function getHello();
  function hello() {
    echo $this->getHello();
  }
}


class Hello {
  use HelloTrait;
  protected $hello = 'hello class';
  protected function getHello() {
    return $this->hello;
  }
}


echo (new Hello)->getHello();

