<?php

namespace App\Http\Controllers;

use App\Events\GetCategory;
use App\Facades\TestFacade;
use App\Http\Models\CategoryModel;
use App\Http\Models\UserModel;
use App\Repositories\CategoryRepository;
use App\Repositories\UserRepository;
use App\Services\CompanyService;
use App\Services\PhoneInterface;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Auth\Access\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use \event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use MyFacade;
use Bouncer;
use Silber\Bouncer\Database\Ability;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use function Symfony\Component\VarDumper\Dumper\esc;

class TestController extends Controller
{
    public $phone;
    public $name;
    public $categoryRepo;
    public $userRepo;

    public function __construct(PhoneInterface $phone, $name, CategoryRepository $categoryRepository, UserRepository $userRepository)
    {
        $this->phone = $phone;
        $this->name = $name;
        $this->categoryRepo = $categoryRepository;
        $this->userRepo = $userRepository;
    }

    public function testSearch(){
        Auth::check();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**
         * Test
         */
        $rs=asset('storage/');
        config();

        /**
         * provider
         */
//        $rs=resolve('onebind')->index()->tell('186');//简单绑定
//        $rs=resolve('singleton')->index()->tell('119');//注册绑定单例
//        $rs=resolve('instance')->index()->tell('119');//注册绑定实例
//        print_r($rs);
//        print_r($this->name);//注册绑定常量
//        print_r($this->phone->tell('186250'));//注册绑定接口
        /**
         * guzzlehttp
         */
//        $client=new Client([
//            'base_uri'=>'http://app.app',
//            'verify'=>false,
//        ]);
//        $rs=$client->get('/category/7');
//        print_r($rs->getBody()->getContents());
        /**
         * repository
         *
         */
//        print_r($this->categoryRepo->deleteWhere(['name'=>'其他各类服务办']));
        /**
         * Facades 门面类
         */
//        $rs=MyFacade::test();

        /**
         * Bouncer
         */
        //创建具有某种能力的角色
//        $rs=Bouncer::allow('xiaozhang')->to('home/delete');
//        print_r($rs);

        //限制一个特定模型类型的能力。简单地传递模型名称作为第二个参数：
//        $user=$this->userRepo->find(2);
//        $rs=Bouncer::allow($user)->to('home.update',CategoryModel::class);
//        $rs = Bouncer::allow($user)->to('home.update',CategoryModel::class);

        //检查用户是否具有特定的角色
//        $ret = Bouncer::is($user)->a("teacher");

        //分配角色给用户
//        $user=$this->userRepo->find(1);
//        Bouncer::assign('xiaozhang')->to($user);

        //检查用户是否具有特定的能力
//        $ability = DB::table('abilities')->find(1);


//        $user=$this->userRepo->find(1);

//        $rs=$user->can('create', HomeController::class);
//        $rs = $user->can('users_manage');
//        $abilities = $user->getAbilities();
//        print_r($rs);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
