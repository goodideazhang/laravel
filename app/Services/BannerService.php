<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @date 2018/5/25 17:20
 */

namespace App\Services;

use App\Repositories\BannerRepository;
use App\Utils\UploadFileHelper;

class BannerService extends BaseService
{
    protected $bannerRepo;


    public function __construct(BannerRepository $bannerRepository)
    {
        $this->bannerRepo = $bannerRepository;
    }

    public function list()
    {
        $banners = $this->bannerRepo->all();
        return [
            "draw" => 1,
            "recordsTotal" => 57,
            "recordsFiltered" => 57,
            "data" => $banners->toArray()
        ];
    }

    public function upload($file)
    {

        return app(UploadFileHelper::class)->uploadSingleFile($file);
    }

    public function deleteImg($path)
    {
        $dir = config('common.public_dir');
        $path = trim($path, "'");
        return unlink($dir . $path);
    }
}