<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     * 1、获取分类 就发送邮件
     * 2、监听注册用户事件
     * @var array
     */
    protected $listen = [
        'App\Events\GetCategory' => [
            'App\Listeners\SendMail',
        ],
        'Illuminate\Auth\Events\Registered'=>[
            'App\Listeners\ListenReg'
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
