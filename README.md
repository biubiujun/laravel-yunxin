
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

> 支持所有用户类接口  
> 方法名为网易云信中接口名    
> 创建网易云信通信ID https://api.netease.im/nimserver/user/create.action

```php
YunxinIM::user()
    ->setAccId($accId)
    ->setName($name)
    ->setIcon($icon)
    ->create();
```
or
```php
YunxinIM::user()
    ->setParameter('accid', $accId)
    ->setParameter('name', $name)
    ->setParameter('icon', $icon)
    ->create();
```

### 聊天室

> 创建聊天室 https://api.netease.im/nimserver/chatroom/create.action

```php
YunxinIM::chatRoom()
    ->setCreator($creator)
    ->setName($name)
    ->setAnnouncement($announcement)
    ->create();
```
or
```php
YunxinIM::chatRoom()
    ->setParameter('creator', $creator)
    ->setParameter('name', $name)
    ->setParameter('announcement', $announcement)
    ->create();
```