<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<section class="main container-fluid">
    <div class="row">
        @include('layouts.sidebar')
        @include('layouts.navbar')
        <div class="vh-100 bg-background p-3">
            @yield('content_title')
            @yield('content')
        </div>
        <footer class="">
            <div class="d-flex justify-content-between align-items-center w-100 p-3 main-footer" style="background-color: #262b3c">
                <div>Copyright© 2021 All rights reserved</div>
                <div class="text-white">
                    <span>Developed by <b>AUNG MIN OO</b></span>
                </div>
            </div>
        </footer>
    </div>

</section>

<script src="{{asset('js/app.js')}}"></script>
<script>
    @yield('scripts')
    let option = {
        animation:true,
        delay:10000
    }
    let toastElList = [].slice.call(document.querySelectorAll('.toast'))
    let toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl, option).show();
    })
</script>
</body>
</html>
