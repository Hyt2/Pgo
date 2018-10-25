<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <script src="{{asset(_PLUS_ . '/layer/jquery_002.js')}}"></script>
    <script src="{{asset(_PLUS_ . '/layer/layer.js')}}"></script>
</head>
<body>
    <input type="hidden" id="msg" name="msg" value="<?php echo(strip_tags($msg));?>"> <!-- 提示信息 -->
    <input type="hidden" id="url" name="url" value="<?php echo($url);?>">    <!-- 跳转地址 -->
    <input type="hidden" id="wait" name="wait" value="<?php echo($wait);?>"> <!-- 间隔时间 -->
    <script type="text/javascript">
        (function(){
            var msg  = $('#msg').val(); //获得相应信息
            var url  = $('#url').val();
            var wait = $('#wait').val();
            layer.open({
                content:msg,
                anim:"{{ config('site.layer_style') }}", //弹窗样式4
                yes:function(index,layerobj){
                    location.href = '{{ url($url) }}';
                    layer.close(index); //如果设定了yes回调,需要手动关闭
                }
            });
            var interval = setInterval(function(){
                var time = --wait;
                if(time <= 0) {
                    location.href = '{{ url($url) }}';
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
</body>
</html>
