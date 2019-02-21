
## 安装

```shell
$ composer require biubiujun/yunxin
```

## 配置

在`config/app.php`中注册 ServiceProvider 和 Facade

```php
'providers' => [
    BiuBiuJun\Yunxin\YunxinServiceProvider::class,
],
'aliases' => [
    'Yunxin' => BiuBiuJun\Yunxin\YunxinServiceProvider:class,
],

```
