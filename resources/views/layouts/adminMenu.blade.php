<!--_menu 作为公共模版分离出去-->
<aside class="Hui-aside">

    <div class="menu_dropdown bk_2">
        <dl id="menu-ambassador">
            <dt><i class="Hui-iconfont">&#xe616;</i>ambassador project<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="{{ url('admin/ambassador-list') }}" title="ambassador project manage">计划管理(manage)</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe616;</i> 资讯管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="{{ url('admin/article-list') }}" title="资讯管理">资讯管理</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-devblog">
            <dt><i class="Hui-iconfont">&#xe616;</i> 开发者日志<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="{{ url('admin/blog-list') }}" title="日志管理">日志列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-message">
            <dt><i class="Hui-iconfont">&#xe616;</i> 消息管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="{{ url('admin/message-list') }}" title="消息管理">消息列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-subscribe">
            <dt><i class="Hui-iconfont">&#xe616;</i> 订阅管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="{{ url('admin/subscribes-list') }}" title="消息管理">订阅列表</a></li>
                </ul>
            </dd>
        </dl>
        {{--<dl id="menu-upload">
            <dt><i class="Hui-iconfont">&#xe613;</i> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="upload-list" title="图片管理">图片管理</a></li>
                </ul>
            </dd>
        </dl>--}}
        {{--<dl id="menu-comments">
            <dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="http://h-ui.duoshuo.com/admin/" title="评论列表">评论列表</a></li>
                    <li><a href="feedback-list" title="意见反馈">意见反馈</a></li>
                </ul>
            </dd>
        </dl>--}}
        {{--<dl id="menu-member">
            <dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="member-list" title="会员列表">会员列表</a></li>
                    <li><a href="member-del" title="删除的会员">删除的会员</a></li>
                    <li><a href="member-level" title="等级管理">等级管理</a></li>
                    <li><a href="member-scoreoperation" title="积分管理">积分管理</a></li>
                    <li><a href="member-record-browse" title="浏览记录">浏览记录</a></li>
                    <li><a href="member-record-download" title="下载记录">下载记录</a></li>
                    <li><a href="member-record-share" title="分享记录">分享记录</a></li>
                </ul>
            </dd>
        </dl>--}}
        <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    {{--<li><a href="admin-role" title="角色管理">角色管理</a></li>
                    <li><a href="admin-permission" title="权限管理">权限管理</a></li>--}}
                    <li><a href="{{ url('admin/admin-list') }}" title="管理员列表">管理员列表</a></li>
                </ul>
            </dd>
        </dl>
        {{--<dl id="menu-tongji">
            <dt><i class="Hui-iconfont">&#xe61a;</i> 系统统计<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="charts-1" title="折线图">折线图</a></li>
                    <li><a href="charts-2" title="时间轴折线图">时间轴折线图</a></li>
                    <li><a href="charts-3" title="区域图">区域图</a></li>
                    <li><a href="charts-4" title="柱状图">柱状图</a></li>
                    <li><a href="charts-5" title="饼状图">饼状图</a></li>
                    <li><a href="charts-6" title="3D柱状图">3D柱状图</a></li>
                    <li><a href="charts-7" title="3D饼状图">3D饼状图</a></li>
                </ul>
            </dd>
        </dl>--}}
        <dl id="menu-system">
            <dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    {{--<li><a href="system-base" title="系统设置">系统设置</a></li>
                    <li><a href="system-category" title="栏目管理">栏目管理</a></li>--}}
                    <li><a href="{{ url('admin/system-log') }}" title="系统日志">系统日志</a></li>
                </ul>
            </dd>
        </dl>
    </div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->
