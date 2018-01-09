<?php

namespace App\Listeners;

use App\Events\GetCategory;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

/**
 * 监听器
 *
 * Class SendMail
 * @package App\Listeners
 */
class SendMail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     * 如果监听器将要执行耗时任务比如发送邮件或者发送 HTTP 请求，
     * 那么将监听器放到队列是一个不错的选择
     * @param  GetCategory  $event
     * @return void
     */
    public function handle(GetCategory $event)
    {
        $category=$event->category->name;
        $flag = Mail::send('emails.test',['name'=>$category],function($message){
            $to = '1247703145@qq.com';
            $message ->to($to)->subject('获取的类目');
        });
//        if(count(Mail::failures())>0){
//            echo '发送邮件失败，请重试！';
//        }else{
//            echo '发送邮件成功，请查收！';
//        }
//
//        Log::info('aa',[$flag]);
    }

    public function failed(GetCategory $event, $exception)
    {
        Log::info('fail',[$exception]);
    }
}
