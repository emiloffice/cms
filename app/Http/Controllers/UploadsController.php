<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadsController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->isMethod('POST')){
            $file = $request->file('file');
            //文件是否上传成功
            if ($file->isValid()){
                $originalName = $file->getClientOriginalName();//源文件名
                $ext = $file->getClientOriginalExtension();//扩展名
                $type = $file->getClientMimeType();//MimeType
                $realPath = $file->getRealPath();//临时绝对路径
                $fileName = date('YmdHis').uniqid().'.'.$ext;
                $bool = Storage::disk('uploads')->put($fileName, file_get_contents($realPath));
                var_dump($bool);
            }

            dd($file);
            exit;
        }
        return view('admin.upload.index');
    }
}
