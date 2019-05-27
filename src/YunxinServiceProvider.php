<?php

namespace Biubiujun\Yunxin;

use Biubiujun\Yunxin\IM\ChatRoom;
use Biubiujun\Yunxin\IM\User as IMUser;
use Biubiujun\Yunxin\VOD\Encrypt;
use Biubiujun\Yunxin\VOD\Transcode;
use Biubiujun\Yunxin\VOD\User as VODUser;
use Biubiujun\Yunxin\VOD\Video;
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
        $this->registerIM();

        $this->registerVOD();
    }

    protected function registerIM()
    {
        $this->app->singleton('yunxin.im.user', function (Container $app) {
            $config = $app['config'];

            return new IMUser($config);
        });
        $this->app->singleton('yunxin.im.chat_room', function (Container $app) {
            $config = $app['config'];

            return new ChatRoom($config);
        });

        $this->app->alias('yunxin.im.user', IMUser::class);
        $this->app->alias('yunxin.im.chat_room', ChatRoom::class);
    }

    protected function registerVOD()
    {
        $this->app->singleton('yunxin.vod.user', function (Container $app) {
            $config = $app['config'];

            return new VODUser($config);
        });
        $this->app->singleton('yunxin.vod.transcode', function (Container $app) {
            $config = $app['config'];

            return new Transcode($config);
        });
        $this->app->singleton('yunxin.vod.video', function (Container $app) {
            $config = $app['config'];

            return new Video($config);
        });
        $this->app->singleton('yunxin.vod.encrypt', function (Container $app) {
            $config = $app['config'];

            return new Encrypt($config);
        });

        $this->app->alias('yunxin.vod.user', VODUser::class);
        $this->app->alias('yunxin.vod.transcode', Transcode::class);
        $this->app->alias('yunxin.vod.video', Video::class);
        $this->app->alias('yunxin.vod.encrypt', Encrypt::class);
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
