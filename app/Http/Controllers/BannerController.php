<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @date 2018/5/25 17:13
 */

namespace App\Http\Controllers;


use App\Services\BannerService;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    protected $bannerService;

    public function __construct(BannerService $bannerService)
    {
        $this->bannerService = $bannerService;
    }

    public function index()
    {
        return view('banner.index');
    }

    public function list()
    {
        $banner = $this->bannerService->list();
        return response()->json($banner);
    }

    public function create()
    {
        return view('banner.create');
    }

    public function upload(Request $request)
    {
        $file = $request->file('file');
        $url = $this->bannerService->upload($file);
        return response()->json($url);
    }

    public function deleteImg(Request $request)
    {
        $rs = $this->bannerService->deleteImg($request->get('path'));
        return response()->json(['result' => $rs]);
    }
}