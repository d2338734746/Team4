<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="/static/js/jquery.js"></script>
    </head>
    <body>
    <!-- 代码 begin -->
    <div id="applyFor" style="text-align: center; width: 500px; margin: 100px auto;">

        {{$message}},将在
        <span class="loginTime" style="color: red">{{$jumpTime}}</span>
        秒后跳转至
        <a href="{{$url}}" style="color: red">{{$urlname}}</a>
        页面
    </div>
    </body>
</html>
    <script type="text/javascript">
        $(function(){
            var url = "{{$url}}"
            var loginTime = parseInt($('.loginTime').text());
            var time = setInterval(function(){
                loginTime = loginTime-1;
                $('.loginTime').text(loginTime);
                if(loginTime==0){
                    clearInterval(time);
                    window.location.href=url;
                }
            },1000);
        })
</script>