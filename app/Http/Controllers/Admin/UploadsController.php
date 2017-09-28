<?php

namespace App\Http\Controllers\Admin;

use Dotenv\Validator;
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
                $bool = Storage::disk('s3')->put($fileName, file_get_contents($realPath));
                $res['status'] = "success";
                $res['code'] = '0';
                $res['filepath'] = 'https://upload.multiverseinc.com/'.$fileName;
                $res = json_encode($res);
//                dd($res);
                return $res;
            }
            exit;
        }
        return view('admin.upload.index');
    }
    public function postUploadPicture(Request $request)
    {
        if ($request->hasFile('files')) {
            //
            $file = $request->file('files');
            $data = $request->all();
            $rules = [
//                'files'    => 'max:5120',
            ];
            $messages = [
                'files.max'    => '文件过大,文件大小不得超出5MB',
            ];
            $validator = Validator($data, $rules, $messages);

            $res = 'error|失败原因为：非法传参';
            if ($validator->passes()) {
                $realPath = $file->getRealPath();
                $destPath = 'public/uploads/';
                $savePath = $destPath.''.date('Ymd', time());
                is_dir($savePath) || mkdir($savePath);  //如果不存在则创建目录
                $name = $file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                $check_ext = in_array($ext, ['gif', 'jpg', 'jpeg', 'png'], true);
                if ($check_ext) {
                    $uniqid = uniqid().'_'.date('s');
                    $oFile = $uniqid.'o.'.$ext;
                    $fullfilename = '/'.$savePath.'/'.$oFile;  //原始完整路径
                    if ($file->isValid()) {
                        $uploadSuccess = $file->move($savePath, $oFile);  //移动文件
                        $oFilePath = $savePath.'/'.$oFile;
                        $res = $fullfilename;
                    } else {
                        $res = 'error|失败原因为：文件校验失败';
                    }
                } else {
                    $res = 'error|失败原因为：文件类型不允许,请上传常规的图片(gif、jpg、jpeg与png)文件';
                }
            } else {
                $res = 'error|'.$validator->messages()->first();
            }
        }
        return $res;
    }
}
