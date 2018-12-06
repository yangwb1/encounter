<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Elasticsearch\ClientBuilder as ESClientBuilder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
	{
		\App\Models\User::observe(\App\Observers\UserObserver::class);
		\App\Models\Reply::observe(\App\Observers\ReplyObserver::class);
		\App\Models\Topic::observe(\App\Observers\TopicObserver::class);

        Carbon::setLocale('zh');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // 注册一个名为 es 的单例
        $this->app->singleton('es', function () {
            // 从配置文件读取 Elasticsearch 服务器列表
            $builder = ESClientBuilder::create()->setHosts(config('database.elasticsearch.hosts'));
            // 如果是开发环境
            if (app()->environment() === 'local') {
                // 配置日志，Elasticsearch 的请求和返回数据将打印到日志文件中，方便我们调试
                $builder->setLogger(app('log')->getLogger());
            }

            return $builder->build();
        });
    }
}
