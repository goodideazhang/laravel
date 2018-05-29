<?php

namespace App\Http\Controllers;

use App\Events\GetCategory;
use App\Http\Models\Category;
use App\Repositories\CategoryRepository;
use App\Repositories\UserRepository;
use App\Services\BaseService;
use App\Services\BotManService;
use App\Services\PhoneInterface;
use App\Services\TestObj;
use Bouncer;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public $phone;
    public $name;
    public $categoryRepo;
    public $userRepo;
    public $service;

    public function __construct(BaseService $service, PhoneInterface $phone, $name, CategoryRepository $categoryRepository, UserRepository $userRepository)
    {
        $this->service = $service;
        $this->phone = $phone;
        $this->name = $name;
        $this->categoryRepo = $categoryRepository;
        $this->userRepo = $userRepository;
    }


    /**
     * @param Request $request
     */
    public function index(Request $request)
    {
        return view('bootstrap');
    }

    public function store(Request $request){
        $data=$request->all();
        return response()->json(['data'=>$data]);
    }

    public function getDatas()
    {
        $data = [
            0 => [
                'id' => 1,
                'username' => 'hello',
                'sex' => 1,
                'city' => '北京',
                'sign' => 'kklll',
                'experience' => '500',
                'score' => 9,
                'classify' => '经理',
                'wealth' => 50000,
                'right' => 5
            ],
            1 => [
                'id' => 2,
                'username' => 'hello',
                'sex' => 1,
                'city' => '北京',
                'sign' => 'kklll',
                'experience' => '500',
                'score' => 9,
                'classify' => '经理',
                'wealth' => 50000,
                'right' => 5
            ],
            2 => [
                'id' => 3,
                'username' => 'hello',
                'sex' => 1,
                'city' => '北京',
                'sign' => 'kklll',
                'experience' => '500',
                'score' => 9,
                'classify' => '经理',
                'wealth' => 50000,
                'right' => 5
            ],
            3 => [
                'id' => 4,
                'username' => 'hello',
                'sex' => 1,
                'city' => '北京',
                'sign' => 'kklll',
                'experience' => '500',
                'score' => 9,
                'classify' => '经理',
                'wealth' => 50000,
                'right' => 5
            ],
            4 => [
                'id' => 5,
                'username' => 'hello',
                'sex' => 1,
                'city' => '北京',
                'sign' => 'kklll',
                'experience' => '500',
                'score' => 9,
                'classify' => '经理',
                'wealth' => 50000,
                'right' => 5
            ],
            5 => [
                'id' => 6,
                'username' => 'hello',
                'sex' => 1,
                'city' => '北京',
                'sign' => 'kklll',
                'experience' => '500',
                'score' => 9,
                'classify' => '经理',
                'wealth' => 50000,
                'right' => 5
            ],
            6 => [
                'id' => 7,
                'username' => 'hello',
                'sex' => 1,
                'city' => '北京',
                'sign' => 'kklll',
                'experience' => '500',
                'score' => 9,
                'classify' => '经理',
                'wealth' => 50000,
                'right' => 5
            ],
            7 => [
                'id' => 8,
                'username' => 'hello',
                'sex' => 1,
                'city' => '北京',
                'sign' => 'kklll',
                'experience' => '500',
                'score' => 9,
                'classify' => '经理',
                'wealth' => 50000,
                'right' => 5
            ],
            8 => [
                'id' => 9,
                'username' => 'hello',
                'sex' => 1,
                'city' => '北京',
                'sign' => 'kklll',
                'experience' => '500',
                'score' => 9,
                'classify' => '经理',
                'wealth' => 50000,
                'right' => 5
            ],
            9 => [
                'id' => 10,
                'username' => 'hello',
                'sex' => 1,
                'city' => '北京',
                'sign' => 'kklll',
                'experience' => '500',
                'score' => 9,
                'classify' => '经理',
                'wealth' => 50000,
                'right' => 5
            ],
            10 => [
                'id' => 11,
                'username' => 'hello',
                'sex' => 1,
                'city' => '北京',
                'sign' => 'kklll',
                'experience' => '500',
                'score' => 9,
                'classify' => '经理',
                'wealth' => 50000,
                'right' => 5
            ],
            11 => [
                'id' => 12,
                'username' => 'hello',
                'sex' => 1,
                'city' => '北京',
                'sign' => 'kklll',
                'experience' => '500',
                'score' => 9,
                'classify' => '经理',
                'wealth' => 50000,
                'right' => 5
            ],
            12 => [
                'id' => 13,
                'username' => 'hello',
                'sex' => 1,
                'city' => '北京',
                'sign' => 'kklll',
                'experience' => '500',
                'score' => 9,
                'classify' => '经理',
                'wealth' => 50000,
                'right' => 5
            ],
            13 => [
                'id' => 14,
                'username' => 'hello',
                'sex' => 1,
                'city' => '北京',
                'sign' => 'kklll',
                'experience' => '500',
                'score' => 9,
                'classify' => '经理',
                'wealth' => 50000,
                'right' => 5
            ],
            14 => [
                'id' => 15,
                'username' => 'hello',
                'sex' => 1,
                'city' => '北京',
                'sign' => 'kklll',
                'experience' => '500',
                'score' => 9,
                'classify' => '经理',
                'wealth' => 50000,
                'right' => 5
            ],
        ];
        return response()->json(['code' => 0, 'msg' => 'success', 'count' => 15, 'data' => $data]);

    }

    public function getClosure($name)
    {
        Redis::HMSET($ip, [$id => time()]);
        Redis::HMset($id, [$ip => ture], ['count' => 5]);
        return function ($params) use ($name) {
            return $params . $name;
        };
    }

    protected function testArray()
    {
        app();
        $array = new TestObj();
        $array->offsetSet('name', 'good idea');
//        $array->offsetUnset('name');
//        $rs=$array->offsetGet('name');
        $rs = $array->offsetExists('name');
        var_dump($rs);
    }

    protected function compact()
    {
        $var = 'hello';
        $rs = compact('var');
        print_r($rs);  //['var'=>'hello']
    }

    protected function date()
    {
        //        $date1=Carbon::parse('2018-6-2');
//        $date2=Carbon::parse('2018-5-8');
        $date1 = date_create('2018-4-28');
        $date2 = date_create('2018-5-8');
        $rs = date_diff($date1, $date2);
//        $rs=$rs->format('%a');
//        print_r($rs);
        print_r($rs->days);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * provider
     */
    public function provider()
    {
        $rs = resolve('onebind')->index()->tell('186');//简单绑定
        $rs = resolve('singleton')->index()->tell('119');//注册绑定单例
        $rs = resolve('instance')->index()->tell('119');//注册绑定实例
        print_r($rs);
        print_r($this->name);//注册绑定常量
        print_r($this->phone->tell('186250'));//注册绑定接口
    }

    /**
     * guzzlehttp
     */
    public function guzzlehttp()
    {
        $client = new Client([
            'base_uri' => 'http://app.app',
            'verify' => false,
        ]);
        $rs = $client->get('/category/7');
        print_r($rs->getBody()->getContents());
    }

    /**
     * Bouncer
     */
    public function bouncer()
    {
//        创建具有某种能力的角色
        $rs = Bouncer::allow('xiaozhang')->to('home/delete');
        print_r($rs);

//        限制一个特定模型类型的能力。简单地传递模型名称作为第二个参数：
        $user = $this->userRepo->find(2);
        $rs = Bouncer::allow($user)->to('home.update', Category::class);
        $rs = Bouncer::allow($user)->to('home.update', Category::class);

//        检查用户是否具有特定的角色
        $ret = Bouncer::is($user)->a("teacher");

//        分配角色给用户
        $user = $this->userRepo->find(1);
        Bouncer::assign('xiaozhang')->to($user);

//        检查用户是否具有特定的能力
        $ability = DB::table('abilities')->find(1);


        $user = $this->userRepo->find(1);

        $rs = $user->can('create', HomeController::class);
        $rs = $user->can('users_manage');
        $abilities = $user->getAbilities();
        print_r($rs);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /**
         * 分发事件
         */
        $category = $this->categoryRepo->find($id);
        $rs = event(new GetCategory($category));
        return $category->toArray();
    }

}
