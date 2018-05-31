<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @date 2018/5/30 10:34
 */

namespace App\Utils;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Carbon;

class UploadFileHelper
{
    protected $file;

    protected $fileRename;

    protected $isPublic;

    public function uploadSingleFile(UploadedFile $file, $fileRename = null, $isPublic = true)
    {
        $this->file = $file;
        $this->fileRename = $fileRename;
        $this->isPublic = $isPublic;
        $fileType = $this->getFileType();
        return $this->upload($fileType);
    }

    protected function getFileType()
    {
        $mineType = $this->file->getMimeType();
        return explode('/', $mineType)[0];
    }

    protected function upload($fileType)
    {
        $fileRename = $this->fileRename ?? Carbon::now()->timestamp . random_int(1, 100);
        $fileNewName = $fileRename . '.' . $this->file->extension();
        $dir = '/uploads/' . $fileType . '/' . Carbon::now()->format('Ymd') . '/';
        $targetDir = $this->isPublic ? config('common.public_dir') . $dir : config('common.private_dir') . $dir;
        $path = $this->file->move($targetDir, $fileNewName);
        return $dir . $path->getFilename();
    }

    /**
     * @param $path
     * @return bool
     */
    public function deleteUploadedFile($path)
    {

    }

}