<?php
# Models\Sub という名前空間の宣言が必要
namespace Models\Sub;

class SubModel
{
    public function getSubHello()
    {
        return 'Wow !! You got another Hello in subModel. Well done !!' . PHP_EOL;
    }
}