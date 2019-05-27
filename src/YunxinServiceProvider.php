<?php

namespace Biubiujun\Yunxin;

use Biubiujun\Yunxin\IM\ChatRoom;
use Biubiujun\Yunxin\IM\User as IMUser;
use Biubiujun\Yunxin\VOD\User as VODUser;
use Illuminate\Contracts\Container\Container;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

class YunxinServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $source = realpath(__DIR__ . '/../config/yunxin.php');

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('yunxin.php')], 'laravel-wechat');
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('yunxin');
        }

        $this->mergeConfigFrom($source, 'yunxin');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerUserOfIM();
        $this->registerChatRoomOfIM();
    }

    protected function registerUserOfIM()
    {
        $this->app->singleton('yunxin.im.user', function (Container $app) {
            $config = $app['config'];

            return new User($config);
        });

        $this->app->alias('yunxin.im.user', User::class);
    }

    protected function registerChatRoomOfIM()
    {
        $this->app->singleton('yunxin.im.chat_room', function (Container $app) {
            $config = $app['config'];

            return new ChatRoom($config);
        });

        $this->app->alias('yunxin.im.chat_room', ChatRoom::class);
    }
    protected function registerUserOfVOD()
    {
        $this->app->singleton('yunxin.vod.chat_room', function (Container $app) {
            $config = $app['config'];

            return new VODUser($config);
        });

        $this->app->alias('yunxin.im.chat_room', ChatRoom::class);
    }

    public function provides()
    {
        return [
            'yunxin.im.user',
            'yunxin.im.chat_room',
            'yunxin.vod.user',
        ];
    }
}
