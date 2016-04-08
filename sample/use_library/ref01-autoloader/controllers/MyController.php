<?php
# Controllers という名前空間の宣言が必要
namespace Controllers;

use Models\MyModel;
use Models\Sub\SubModel;

class MyController
{
    public function run()
    {
        #モデル1の呼び出し。
        #ここでは、getHello()で挨拶を返してくれる
        $myModel = new MyModel;
        echo $myModel->getHello();

        #モデル2の呼び出し。
        #ここでは、getSubHello()で、さらに別の挨拶を返してくれる
        $subModel = new SubModel;
        echo $subModel->getSubHello();
    }
}