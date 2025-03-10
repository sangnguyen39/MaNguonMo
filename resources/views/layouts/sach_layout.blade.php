<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <header style='text-align:center'>
        <img src="{{asset('images/banner_sach.jpg')}}" width="1000px">
    </header>
    <main style="width:1000px; margin:2px auto;">
        <div class='row'>
            <div class='col-3 pr-0'>
                <nav class="navbar navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Tiểu thuyết</a>
                        </li>
                        . . . .
                    </ul>
                </nav>
                <img src="{{asset('images/sidebar_1.jpg')}}" width="100%" class='mt-1'>
                <img src="{{asset('images/sidebar_2.jpg')}}" width="100%" class='mt-1'>
            </div>
            <div class='col-9'>
                @yield('content')
            </div>
        </div>
    </main>
</body>

</html>