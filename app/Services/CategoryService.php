<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @date 2018/5/24 9:35
 */

namespace App\Services;


use App\Repositories\CategoryRepository;

class CategoryService extends BaseService
{
    protected $repository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->repository=$categoryRepository;
    }

    public function store(array $params){
        $this->repository->create($params);

    }

}