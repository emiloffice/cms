<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/lib/jquery.fn.js"></script>
<script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="//{{getenv('RESOURCE_PATH')}}/static/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--/_footer /作为公共模版分离出去-->
<script>
    function logout() {
        $.get('{{url('admin/logout')}}',function (result) {
            console.log(result)
        });
    }
</script>