<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
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
                $res['status'] = "success";
                $res['code'] = '0';
                $res['filepath'] = $fileName;
                $res = json_encode($res);
//                dd($res);
                return $res;
            }
            exit;
        }
        return view('admin.upload.index');
    }
}
