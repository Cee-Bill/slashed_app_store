
<!DOCTYPE html>
<html>
<head>
    <title>Admin Area</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/bootstrap-theme.css')}}"/>

    <link rel="stylesheet" href="{{asset('/css/admin.css')}}"/>


</head>
<body>
@include('admin.header')
<div class="page-content">
    @if(Session::has('message'))
        <div class="alert alert-info">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif

    <div class="row">
        @include('admin.sidenav')
        <div class="col-md-10 display-area">
            <div class="row text-center">
                <div class="col-md-10 col-md-offset-1">
                    <div class="content-box-large">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div><!--/Display area after sidenav-->
    </div>

</div><!--/Page Content-->

<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/bootstrap.js')}}"></script>

<script>
    $(document).ready(function () {
        $(".submenu > a").click(function (e) {
            e.preventDefault();
            var $li = $(this).parent("li");
            var $ul = $(this).next("ul");
            if ($li.hasClass("open")) {
                $ul.slideUp(350);
                $li.removeClass("open");
            } else {
                $(".nav > li > ul").slideUp(350);
                $(".nav > li").removeClass("open");
                $ul.slideDown(350);
                $li.addClass("open");
            }
        });
    });
</script>

</body>
</html>