<?php

namespace App\Providers;

use App\Http\Controllers\TestController;
use App\Services\CompanyService;
use App\Services\TestFacadeService;
use App\Services\XiaomiService;
use Illuminate\Support\ServiceProvider;

class MyProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * 1、简单的绑定
         * bind绑定实例可以方便依赖注入
         * 在一个服务提供者中，可以通过 $this->app 变量访问容器，
         * 然后使用 bind 方法注册一个绑定，该方法需要两个参数，
         * 第一个参数是我们想要注册的类名或接口名称，
         * 第二个参数是返回类的实例的闭包：
         */
        $this->app->bind('onebind', function ($app) {
            return new CompanyService($app->make('App\Services\XiaomiService'));
        });

        /**
         * 2、绑定一个单例
         */
        $this->app->singleton('singleton', function ($app) {
            return new CompanyService($app->make('App\Services\XiaomiService'));
        });

        $this->app->singleton('testFacade',function (){
           return new TestFacadeService();
        });

        /**
         * 3、绑定实例
         * 你还可以使用 instance 方法绑定一个已存在的对象实例到容器，
         * 随后调用容器将总是返回给定的实例：
         */
        $instance = new CompanyService(new XiaomiService());
        $this->app->instance('instance', $instance);

        /**
         * 4、绑定原始值
         * 你可能有一个接收注入类的类，
         * 同时需要注入一个原生的数值比如整型，
         * 可以结合上下文轻松注入这个类需要的任何值
         */
        $this->app->when(TestController::class)
            ->needs('$name')
            ->give('王尼玛');

        /**
         * 5、绑定接口到实现
         * 这段代码告诉容器当一个类需要 PhoneInterface 的实现时将会注入
         * phone，现在我们可以在构造器或者任何其它通过服务
         * 容器注入依赖的地方进行 PhoneInterface 接口的依赖注入：
         */
        $this->app->bind('App\Services\PhoneInterface', function () {
            return new XiaomiService();
        });
    }
}
