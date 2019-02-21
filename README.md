
## 安装

```shell
$ composer require biubiujun/yunxin
```

## 配置

### Laravel

在`config/app.php`中注册 ServiceProvider 和 Facade

```php
'providers' => [
    Biubiujun\Yunxin\YunxinServiceProvider::class,
],
'aliases' => [
    'Yunxin' => Biubiujun\Yunxin\Facades\YunxinIM::class,
],

```

发布配置文件

```shell
php artisan vendor:publish --provider="Biubiujun\Yunxin\YunxinServiceProvider"
```

### Lumen

在`bootstrap/app.php`中添加

```php
$app->register(Biubiujun\Yunxin\YunxinServiceProvider::class);
```

## 使用

### 用户

```php
// 创建用户
YunxinIM::user()
    ->setAccId($accId)
    ->setName($name)
    ->setIcon($icon)
    ->create();
```

### 聊天室

```php
// 创建聊天室
YunxinIM::chatRoom()
    ->setCreator($creator)
    ->setName($name)
    ->setAnnouncement($announcement)
    ->create();
```