<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @date 2018/5/25 17:13
 */

namespace App\Http\Controllers;


use App\Services\BannerService;

class BannerController extends Controller
{
    protected $bannerService;

    public function __construct(BannerService $bannerService)
    {
        $this->bannerService=$bannerService;
    }

    public function index(){
        return view('banner.index');
    }

    public function list(){
        $banner=$this->bannerService->list();
        return response()->json($banner);
    }

    public function create(){
        return view('banner.create');
    }
}