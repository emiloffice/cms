<!-- WangEditor Resources -->
<link   href="{{ asset('vendor/wangeditor/css/wangEditor.css') }}" rel="stylesheet">
<script src="{{ asset('vendor/wangeditor/js/lib/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('vendor/wangeditor/js/wangEditor.js') }}"></script>

<script>
    $(document).ready(function(){
        var editor = new wangEditor('{{ $pick or 'PickEditor' }}')
        editor.config.uploadImgUrl = '{{ config('wangeditor.route.url') }}'
        editor.config.uploadHeaders = {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
        editor.create()
    });
</script>