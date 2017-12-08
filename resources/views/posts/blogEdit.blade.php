@extends('layouts.adminMaster')
@section('content')
    <article class="page-container">
        <form class="form form-horizontal" id="form-article-add" action="{{url('admin/blogs-update')}}/{{$post->id}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token"         value="{{csrf_token()}}"/>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章标题：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{ $post->title }}" placeholder="" id="" name="title">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">简略标题：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{ $post->subtitle }}" placeholder="" id="" name="subtitle">
                </div>
            </div>
            <input type="hidden" name="system_cate_id" value="2">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">排序值：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{ $post->sort }}" placeholder="" id="" name="sort">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">关键词：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{ $post->keyword }}" placeholder="" id="" name="keyword">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">文章摘要：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <textarea name="description" cols="" rows="" class="textarea description"  placeholder="说点什么...最少输入30个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！"  maxlength="190">{{ $post->description }}</textarea>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">文章作者：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{ $post->author }}" placeholder="" id="" name="author">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">文章来源：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{ $post->source }}" placeholder="" id="" name="source">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">缩略图：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <div class="uploader-thum-container">
                        <div id="fileList" class="uploader-list">
                            <div class="pic-box" >

                                @if($post->thumb!==''||$post!==null)
                                    <img src="{{ $post->thumb }}" style="width: 200px;height: 200px;" alt="{{ $post->thumb }}">
                                    @else
                                    <img>
                                @endif
                            </div>
                        </div>
                        <div id="filePicker">选择图片</div>
                        <div>参考图片分辨率：300*340</div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="thumb" value="" id="thumb_path">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">文章内容：</label>
                <div class="formControls col-xs-8 col-sm-9" >
                    <div id="content"></div>
                    <input type="hidden" name="content" value="{!! $post->content !!}">
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <button onClick="" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>
                    {{--<button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存草稿</button>--}}
                </div>
            </div>
        </form>
    </article>
@endsection
@section('script')
    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/lib/My97DatePicker/4.8/WdatePicker.js"></script>
    <script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/lib/jquery.textlength.js"></script>
    <script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/lib/jquery.validation/1.14.0/validate-methods.js"></script>
    <script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/lib/jquery.validation/1.14.0/messages_zh.js"></script>
    <script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/lib/webuploader/0.1.5/webuploader.min.js"></script>
    <script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/lib/ueditor/1.4.3/ueditor.config.js"></script>
    <script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
    <script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/editor/release/wangEditor.min.js"></script>
    <script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/editor/release/wangEditor-fullscreen-plugin.js"></script>
    <script type="text/javascript">
        $(".description").Huitextarealength({
            minlength:30,
            maxlength:190
        });
        var E = window.wangEditor
        var editor = new E('#content')
        editor.customConfig.uploadImgServer = '{{ url('admin/upload') }}'
        editor.customConfig.uploadImgMaxSize = 3 * 1024 * 1024
        editor.customConfig.uploadFileName = 'file'
        editor.customConfig.uploadImgHeaders = {
            'Accept' : 'multipart/form-data',
        }
        editor.customConfig.uploadImgParams = {
            _token: '{{csrf_token()}}'   // 属性值会自动进行 encode ，此处无需 encode
        }

        editor.customConfig.uploadImgHooks = {
            before: function (xhr, editor, file) {
                // 图片上传之前触发
                // xhr 是 XMLHttpRequst 对象，editor 是编辑器对象，files 是选择的图片文件

                // 如果返回的结果是 {prevent: true, msg: 'xxxx'} 则表示用户放弃上传
                // return {
                //     prevent: true,
                //     msg: '放弃上传'
                // }
            },
            success: function (xhr, editor, result) {
                // 图片上传并返回结果，图片插入成功之后触发
                imgUrl = result.filepath
                // xhr 是 XMLHttpRequst 对象，editor 是编辑器对象，result 是服务器端返回的结果
            },
            fail: function (xhr, editor, result) {
                // 图片上传并返回结果，但图片插入错误时触发
                // xhr 是 XMLHttpRequst 对象，editor 是编辑器对象，result 是服务器端返回的结果
            },
            error: function (xhr, editor) {
                // 图片上传出错时触发
                // xhr 是 XMLHttpRequst 对象，editor 是编辑器对象
            },
            timeout: function (xhr, editor) {
                // 图片上传超时时触发
                // xhr 是 XMLHttpRequst 对象，editor 是编辑器对象
            },

            // 如果服务器端返回的不是 {errno:0, data: [...]} 这种格式，可使用该配置
            // （但是，服务器端返回的必须是一个 JSON 格式字符串！！！否则会报错）
            customInsert: function (insertImg, result, editor) {
                // 图片上传并返回结果，自定义插入图片的事件（而不是编辑器自动插入图片！！！）
                // insertImg 是插入图片的函数，editor 是编辑器对象，result 是服务器端返回的结果

                // 举例：假如上传图片成功后，服务器端返回的是 {url:'....'} 这种格式，即可这样插入图片：
                var url = result.filepath
                insertImg(url)

                // result 必须是一个 JSON 格式字符串！！！否则报错
            }
        }
        editor.customConfig.onchange = function (html) {
            // html 即变化之后的内容
            //console.log(html)
            $("input[name='content']").val(html);
        }
        editor.create()
        editor.txt.html(`{!! $post->content !!}`)
        E.fullscreen.init('#content');
        $(function(){
            var content = $('#contents');
            window.article_save_submit = function() {
                content = editor.$textElem[0].innerHTML;
                console.log(content)
            }
            $('.skin-minimal input').iCheck({
                checkboxClass: 'icheckbox-blue',
                radioClass: 'iradio-blue',
                increaseArea: '20%'
            });


            $list = $("#fileList"),
                $btn = $("#btn-star"),
                state = "pending",
                uploader;
            var thumbnailWidth = 200;
            var thumbnailHeight = 200;
            var uploader = WebUploader.create({
                auto: true,
                swf: '/lib/webuploader/0.1.5/Uploader.swf',

                // 文件接收服务端。
                server: '{{ url('admin/upload') }}',

                // 选择文件的按钮。可选。
                // 内部根据当前运行是创建，可能是input元素，也可能是flash.
                pick: '#filePicker',
                formData: {"_token": "{{ csrf_token() }}"},
                // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                resize: false,
                // 只允许选择图片文件。
                accept: {
                    title: 'Images',
                    extensions: 'gif,jpg,jpeg,bmp,png',
                    mimeTypes: 'image/*'
                }
            });
            uploader.on( 'fileQueued', function( file ) {
                var $li = $(
                        '<div id="' + file.id + '" class="item">' +
                        '<div class="pic-box"><img></div>'+
                        '<div class="info">' + file.name + '</div>' +
                        '<p class="state">等待上传...</p>'+
                        '</div>'
                    ),
                    $img = $li.find('img');
                $list.append( $li );

                // 创建缩略图
                // 如果为非图片文件，可以不用调用此方法。
                // thumbnailWidth x thumbnailHeight 为 100 x 100
                uploader.makeThumb( file, function( error, src ) {
                    if ( error ) {
                        $img.replaceWith('<span>不能预览</span>');
                        return;
                    }

                    $img.attr( 'src', src );
                }, thumbnailWidth, thumbnailHeight );
            });
            // 文件上传过程中创建进度条实时显示。
            uploader.on( 'uploadProgress', function( file, percentage ) {
                var $li = $( '#'+file.id ),
                    $percent = $li.find('.progress-box .sr-only');

                // 避免重复创建
                if ( !$percent.length ) {
                    $percent = $('<div class="progress-box"><span class="progress-bar radius"><span class="sr-only" style="width:0%"></span></span></div>').appendTo( $li ).find('.sr-only');
                }
                $li.find(".state").text("上传中");
                $percent.css( 'width', percentage * 100 + '%' );
            });

            // 文件上传成功，给item添加成功class, 用样式标记上传成功。
            uploader.on( 'uploadSuccess', function( file, response) {
                $('#thumb_path').val(response.filepath);
                $( '#'+file.id ).addClass('upload-state-success').find(".state").text("已上传");
            });

            // 文件上传失败，显示上传出错。
            uploader.on( 'uploadError', function( file ) {
                $( '#'+file.id ).addClass('upload-state-error').find(".state").text("上传出错");
            });

            // 完成上传完了，成功或者失败，先删除进度条。
            uploader.on( 'uploadComplete', function( file ) {
                $( '#'+file.id ).find('.progress-box').fadeOut();
            });
            uploader.on('all', function (type) {
                if (type === 'startUpload') {
                    state = 'uploading';
                } else if (type === 'stopUpload') {
                    state = 'paused';
                } else if (type === 'uploadFinished') {
                    state = 'done';
                }

                if (state === 'uploading') {
                    $btn.text('暂停上传');
                } else {
                    $btn.text('开始上传');
                }
            });

            $btn.on('click', function () {
                if (state === 'uploading') {
                    uploader.stop();
                } else {
                    uploader.upload();
                }
            });

        });
    </script>
    <!--/请在上方写此页面业务相关的脚本-->
@stop