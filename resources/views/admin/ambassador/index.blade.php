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
        消息管理
        <span class="c-gray en">&gt;</span>
        消息列表
        <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <div class="Hui-article">
        <article class="cl pd-20">

            <div class="mt-20">
                <table class="table table-border table-bordered table-bg table-hover table-sort">
                    <thead>

                    <tr class="text-c">
                        <th width="20"><input type="checkbox" name="" value=""></th>
                        <th width="40">ID</th>
                        <th width="40">姓名(nick name)</th>
                        <th width="80">邮箱(email)</th>
                        <th width="80">代码(code)</th>
                        <th width="80">分数(points)</th>
                        <th width="80">备注(remark)</th>
                        <th width="120">操作(manage)</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr class="text-c">
                        <td><input type="checkbox" value="" name=""></td>
                        <td>{{$user->point->user_id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->point->referral_code}}</td>
                        <td>{{$user->point->points}}</td>
                        {{--<td>{{$user->point->fb_status}}</td>--}}
                        <td>{{$user->status}}</td>
                        <td class="f-14 td-manage">
                            @if($user['point']['fb_status']=='1')
                                @else
                                <a style="text-decoration:none" onClick="add_points(this, '{{$user->point->user_id}}','facebook')" href="javascript:;" title="liking facebook"><i class="fa fa-facebook"></i></a>
                            @endif
                            @if($user['point']['twitter_status']=='1')
                                @else
                                    <a style="text-decoration:none" class="ml-5" onClick="add_points(this, '{{$user->point->user_id}}','twitter')" href="javascript:;" title="following Twitter Page"><i class="fa fa-twitter"></i></a>
                            @endif
                            @if($user['point']['group_status']=='1')
                                @else
                                    <a style="text-decoration:none" class="ml-5" onClick="add_points(this, '{{$user->point->user_id}}','group')" href="javascript:;" title="joining our community group"><i class="fa fa-group"></i></a>
                            @endif
                            @if($user['point']['discord_status']=='1')
                                @else
                                    <a style="text-decoration:none" class="ml-5" onClick="add_points(this, '{{$user->point->user_id}}','discord')" href="javascript:;" title="joining our discord group"><i class="fa fa-group"></i></a>
                            @endif
                        </td>
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
    <script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/lib/My97DatePicker/4.8/WdatePicker.js"></script>
    <script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/lib/laypage/1.2/laypage.js"></script>

    <script type="text/javascript">
        $('#menu-ambassador').menuSelector(1);
        $('.table-sort').dataTable({
            "aaSorting": [[ 1, "desc" ]],//默认第几个排序
            "bStateSave": true,//状态保存
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                {"orderable":false,"aTargets":[0,7]}// 不参与排序的列
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
                content: url
            });
            layer.full(index);
        }
        /*资讯-删除*/
        function article_del(obj,id){
            layer.confirm('确认要删除吗？',function(index){
                $.ajax({
                    type: 'POST',
                    url: '',
                    dataType: 'json',
                    success: function(data){
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!',{icon:1,time:1000});
                    },
                    error:function(data) {
                        console.log(data.msg);
                    },
                });
            });
        }

        /*资讯-审核*/
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
        }
        /*资讯-下架*/
        function article_stop(obj,id){
            layer.confirm('确认要下架吗？',function(index){
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
                $(obj).parents("tr").find(".td-status")('<span class="label label-defaunt radius">已下架</span>');
                $(obj).remove();
                layer.msg('已下架!',{icon: 5,time:1000});
            });
        }

        /*资讯-发布*/
        function article_start(obj,id){
            layer.confirm('确认要发布吗？',function(index){
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
                $(obj).parents("tr").find(".td-status")('<span class="label label-success radius">已发布</span>');
                $(obj).remove();
                layer.msg('已发布!',{icon: 6,time:1000});
            });
        }
        /*资讯-申请上线*/
        function article_shenqing(obj,id){
            $(obj).parents("tr").find(".td-status")('<span class="label label-default radius">待审核</span>');
            $(obj).parents("tr").find(".td-manage")("");
            layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
        }
        /*加分*/
        function add_points(obj,uid,cate){
            console.log(obj)
            $.ajax({
                type: 'POST',
                url: '/admin/add-points',
                dataType: 'json',
                data: { uid:uid, cate:cate, _token:'{{ csrf_token() }}'},
                success: function(res){
                    if(res.status=='success'){
                        layer.msg('Successful operation!', {icon: 1,time:2000});
                        $(obj).remove();
                    }else{
                        layer.msg(res.msg, {icon: 5,time:2000});
                    }
                },
                error:function() {
                    layer.msg('Error operation!', {icon: 5,time:2000});
                },
            });
/*            $(obj).parents("tr").find(".td-status")('<span class="label label-default radius">待审核</span>');
            $(obj).parents("tr").find(".td-manage")("");*/

        }
    </script>
    <!--/请在上方写此页面业务相关的脚本-->
@stop
