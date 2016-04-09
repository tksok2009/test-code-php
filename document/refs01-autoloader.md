# this

refs #1 autoloader


[PHPの名前空間とcomposerのautoload (PSR-4) サンプル](http://qiita.com/yotasasaki/items/cc1a4936c0c92099db5a)

# check point

- 1 use composer.json

```

{
    "autoload": {
        "psr-4": {
            "Controllers\\" : "controllers/",
            "Models\\"      : "models/",
            "Models\\Sub\\" : "models/sub/"
        }
    }
}

```


- 2 use composer

```
php composer.phar dump-autoload

```

