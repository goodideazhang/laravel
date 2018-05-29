<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @date 2018/5/24 10:15
 */

namespace App\Http\Controllers;


use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $service;

    public function __construct(CategoryService $categoryService)
    {
        $this->service = $categoryService;
    }

    public function index()
    {
        return view('category.index');
    }

    public function store(Request $request)
    {
        $params = $request->all();
        try {
            $data = $this->service->store($params);
        } catch (\Exception $e) {
            $data = $e->getMessage();
        }
        return response()->json($data);

    }

}