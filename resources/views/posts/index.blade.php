@extends('layouts.adminMaster')
@section('header')
    @extends('layouts.adminHeader')
@stop
@section('menu')
    @extends('layouts.adminMenu')
@stop
@section('content')
<section class="Hui-article-box">
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span>
        资讯管理
        <span class="c-gray en">&gt;</span>
        资讯列表
        <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <div class="Hui-article">
        <article class="cl pd-20">
            <div class="text-c">
				<span class="select-box inline">
				<select name="" class="select">
					<option value="0">全部分类</option>
					<option value="1">分类一</option>
					<option value="2">分类二</option>
				</select>
				</span>
                日期范围：
                <input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}'})" id="logmin" class="input-text Wdate" style="width:120px;">
                -
                <input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d'})" id="logmax" class="input-text Wdate" style="width:120px;">
                <input type="text" name="" id="" placeholder=" 资讯名称" style="width:250px" class="input-text">
                <button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜资讯</button>
            </div>
            <div class="cl pd-5 bg-1 bk-gray mt-20">
				<span class="l">
				<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
				<a class="btn btn-primary radius" data-title="添加资讯" _href="article-add" onclick="article_add('添加资讯','article-add')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加资讯</a>
				</span>
                <span class="r">共有数据：<strong>54</strong> 条</span>
            </div>
            <div class="mt-20">
                <table class="table table-border table-bordered table-bg table-hover table-sort">
                    <thead>
                    <tr class="text-c">
                        <th width="25"><input type="checkbox" name="" value=""></th>
                        <th width="80">ID</th>
                        <th>标题</th>
                        <th width="80">分类</th>
                        <th width="80">来源</th>
                        <th width="120">更新时间</th>
                        <th width="75">浏览次数</th>
                        <th width="60">发布状态</th>
                        <th width="120">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                    <td class="text-c">
                        <td><input type="checkbox" value="" name=""></td>
                        <td>{{$post->id}}</td>
                        <td class="text-l">
                        @if($post['system_cate_id']==1)
                            <u style="cursor:pointer" class="text-primary" onClick="article_show('查看','{{ url('posts') }}','{{ $post->id }}')" title="查看">{{ $post->title }}</u>
                            @elseif($post['system_cate_id']==2)
                           <u style="cursor:pointer" class="text-primary" onClick="article_show('查看','http://www.seekingdawnvr.com/posts','{{ $post->id }}')" title="查看">{{ $post->title }}</u>
                        @endif
                        </td>
                        <td>{{ $post->system_cate_id }}</td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td>21212</td>
                        @if($post['status']==1)
                            <td class="td-status">
                                    <span class="label label-success radius">已发布</span>
                            </td>
                                <td class="f-14 td-manage"><a style="text-decoration:none" onClick="article_stop(this,'{{ $post->id }}')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>
                                <a style="text-decoration:none" class="ml-5" onClick="article_edit('资讯编辑','{{ url('admin/posts-edit') }}','{{ $post->id }}')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
                                <a style="text-decoration:none" class="ml-5" onClick="article_del(this,'{{ $post->id }}')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
                            </td>

                        @elseif($post['status']==0)
                            <td class="td-status">
                                <span class="label label-error radius">未发布</span>
                            </td>
                            <td class="f-14 td-manage"><a style="text-decoration:none" onClick="article_start(this,'{{ $post->id }}')" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>
                                <a style="text-decoration:none" class="ml-5" onClick="article_edit('资讯编辑','{{ url('admin/posts-edit') }}','{{ $post->id }}')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
                                <a style="text-decoration:none" class="ml-5" onClick="article_del(this,'{{ $post->id }}')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
                            </td>
                        @elseif($post['status']==4)
                            <td class="td-status">
                                <span class="label label-error radius">已下架</span>
                            </td>
                            <td class="f-14 td-manage"><a style="text-decoration:none" onClick="article_start(this,'{{ $post->id }}')" href="javascript:;" title="重新发布"><i class="Hui-iconfont">&#xe6dc;</i></a>
                                <a style="text-decoration:none" class="ml-5" onClick="article_edit('资讯编辑','{{ url('admin/posts-edit') }}','{{ $post->id }}')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
                                <a style="text-decoration:none" class="ml-5" onClick="article_del(this,'{{ $post->id }}')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
                            </td>
                        @elseif($post['status']==9)
                            <td class="td-status">
                                <span class="label label-error radius">已删除</span>
                            </td>
                            <td class="f-14 td-manage"><a style="text-decoration:none" onClick="article_shenqing(this,'{{ $post->id }}')" href="javascript:;" title="恢复"><i class="Hui-iconfont">&#xe615;</i></a>
                                <a style="text-decoration:none" class="ml-5" onClick="article_edit('资讯编辑','{{ url('admin/posts-edit') }}','{{ $post->id }}')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
                                <a style="text-decoration:none" class="ml-5" onClick="article_del(this,'{{ $post->id }}')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
                            </td>
                            @else
                            <td class="td-status"></td>
                            <td class="f-14 td-manage"></td>
                        @endif
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </article>
    </div>
</section>

@stop
@section('script')
    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="/lib/My97DatePicker/4.8/WdatePicker.js"></script>
    <script type="text/javascript" src="/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/lib/laypage/1.2/laypage.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $('#menu-article').menuSelector(1);
        $('.table-sort').dataTable({
            "aaSorting": [[ 1, "desc" ]],//默认第几个排序
            "bStateSave": true,//状态保存
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                {"orderable":false,"aTargets":[0,8]}// 不参与排序的列
            ]
        });

        /*资讯-添加*/
        function article_add(title,url,w,h){
            var index = layer.open({
                type: 2,
                title: title,
                content: url
            });
            layer.full(index);
        }
        /*资讯-编辑*/
        function article_edit(title,url,id,w,h){
            var index = layer.open({
                type: 2,
                title: title,
                content: url+'/'+id
            });
            layer.full(index);
        }
        function article_show(title,url,id,w,h){
            var index = layer.open({
                type: 2,
                title: title,
                content: url+'/'+id
            });
            layer.full(index);
        }
        var url = '{{url('admin/edit-post-status')}}'
        /*资讯-删除*/
        function article_del(obj,id){
            var data = {
                "_token": "{{ csrf_token() }}",
                'status': '9',
                'id': id
            }
            layer.confirm('确认要删除吗？',function(index){
                layer.close(index)
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    dataType: 'json',
                    success: function(data){

                        layer.msg('已删除!',{icon:1,time:1000});
                    },
                    error:function(data) {
                        console.log(data.msg);
                    },
                });
                $(obj).parents("tr").find(".td-manage").children('a').get(0).remove();
                $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已删除</span>');
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_shenqing(this,id)" href="javascript:;" title="恢复"><i class="Hui-iconfont">&#xe615;</i></a>');

            });
        }

       /* /!*资讯-审核*!/
        function article_shenhe(obj,id){
            layer.confirm('审核文章？', {
                    btn: ['通过','不通过','取消'],
                    shade: false,
                    closeBtn: 0
                },
                function(){
                    $(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
                    $(obj).parents("tr").find(".td-status")('<span class="label label-success radius">已发布</span>');
                    $(obj).remove();
                    layer.msg('已发布', {icon:6,time:1000});
                },
                function(){
                    $(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
                    $(obj).parents("tr").find(".td-status")('<span class="label label-danger radius">未通过</span>');
                    $(obj).remove();
                    layer.msg('未通过', {icon:5,time:1000});
                });
        }*/
        /*资讯-下架*/
        function article_stop(obj,id){

            layer.confirm('确认要下架吗？',function(index){
                var data = {
                    "_token": "{{ csrf_token() }}",
                    'status': '4',
                    'id': id
                }
                var url = '{{url('admin/edit-post-status')}}'
                layer.close(index);
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    success: function (data) {
                        if (data==1){
                            layer.msg('已下架!',{icon: 5,time:1000});

                        }
                    },
                    dataType: 'JSON'
                 })
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
                $(obj).remove();


            });
        }

        /*资讯-发布*/
        function article_start(obj,id){
            layer.confirm('确认要发布吗？',function(index){
                var data = {
                    "_token": "{{ csrf_token() }}",
                    'status': '1',
                    'id': id
                }
                var url = '{{url('admin/edit-post-status')}}'
                layer.close(index);
                console.log(obj)
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    success: function (data) {
                        console.log(data)
                        if(data==1){

                            layer.msg('已发布!',{icon: 6,time:1000});
                        }
                    },
                    dataType: 'JSON'
                });
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
                $(obj).remove();


            });


        }
        /*资讯-申请上线*/
        function article_shenqing(obj,id){
            layer.msg('文章已恢复，请重新发布！！！', {icon: 1,time:2000});
            var data = {
                "_token": "{{ csrf_token() }}",
                'status': '0',
                'id': id
            }
            this.edit = function () {

            }
            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                success: function (data) {
                    if(data==1){
                        edit()
                        layer.msg('文章已恢复，请重新发布！！！', {icon: 1,time:2000});


                    }
                },
                dataType: 'JSON'
            });
            $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待发布</span>')
            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
            $(obj).remove();

        }
    </script>
    <!--/请在上方写此页面业务相关的脚本-->
@stop
