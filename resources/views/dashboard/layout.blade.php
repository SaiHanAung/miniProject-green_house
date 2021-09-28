<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Green House</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/switch.js') }}"></script>
    <script src="/js/switch.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/switch.css') }}" rel="stylesheet">


    <style>
        .dropbtn {
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #f9f9f9;
            min-width: 400px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content .bg-green:hover {
            background-color: #C2F784;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

        /* ======================================================================= */

        .navbar-green {
            background-color: green;
        }

        .font {
            color: #D8EBB5;
        }

        .font:hover {
            color: #fff;
        }

        .align-middle {
            vertical-align: middle;
        }

        /* ======================================================================== */

        .rotate {
            color: #FFF;
            text-align: center;
            font: normal 1em Arial;
            position: relative;
            transition-delay: 0.6s;
        }

        /* The real code */
        .rotated {
            transition-delay: 0.4s;
            -webkit-transform: rotate(180deg);
            /* Chrome, Safari 3.1+ */
            -moz-transform: rotate(180deg);
            /* Firefox 3.5-15 */
            -ms-transform: rotate(180deg);
            /* IE 9 */
            -o-transform: rotate(180deg);
            /* Opera 10.50-12.00 */
            transform: rotate(180deg);
            /* Firefox 16+, IE 10+, Opera 12.10+ */
        }

        /* ======================================================================== */
    </style>
</head>

<body style="background-color: #DFEEEA;">
    <div id="app" class="">
        <nav class="navbar navbar-expand-md navbar-green" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: #D8EBB5; font-size: 22px;">
                    <strong>Green House</strong>
                </a>
                <button class="navbar-toggler font" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @guest

                @if (Route::has('register'))
                <!-- <li class="nav-item">
                                    <a class="nav-link font" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> -->
                @endif
                @else

                <div class="dropdown" style="float:right;">
                    <button class="dropbtn btn btn-secondary"><img src="https://ik.imagekit.io/han/user_LEwdwBT8z.png?updatedAt=1631090137646" width="20%" id="img_name" alt="icon"> <strong id="name">{{ Auth::user()->name }}</strong>&nbsp; <img src="https://ik.imagekit.io/han/down-arrow_1__6-uvePwghB2.png?updatedAt=1631089991481&tr=w-1104,h-736,fo-auto" width="15px" alt="icon" class="rotate"></button>
                    <script>
                        $(document).ready(function() {
                            $('.dropdown').mouseenter(function() {
                                $('.rotate').toggleClass('rotated');
                                $('#img_name').hide(500);
                                $('#name').hide(500);
                            });
                            $('.dropdown').mouseleave(function() {
                                $('.rotate').toggleClass('rotated');
                                $('#img_name').show(500);
                                $('#name').show(500);
                            });
                        });
                    </script>
                    <div class="dd-con">
                        <div class="dropdown-content">
                            <div class="m-2">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="row">
                                                <a class="" href="javascript:void(0);" style="color: green; font-size: 16px;">
                                                    <strong>Green House</strong>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="row">
                                                <a class="dropdown-item bg-green" href="{{ route('logout') }}" style="text-align:center; color: green;" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }} &nbsp;<img src="https://ik.imagekit.io/han/logout_RyqAoKboA.png?updatedAt=1631515307244" width="25%" alt="icon">
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4" style="margin: auto;">
                                            <div class="row">
                                                <div class="col" class="dropdown-item">
                                                    <img src="https://ik.imagekit.io/han/profile-user_k-98f3qZoJO.png?updatedAt=1631592466388" width="100%" alt="icon">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="row">
                                                <p class="dropdown-item" style="margin-top:auto; margin-bottom:auto; font-size: 20px;"><strong>{{ Auth::user()->name }}</strong></p>
                                            </div>
                                            <div class="row">
                                                <p class="dropdown-item" style="margin-top:auto; margin-bottom:auto;">{{ Auth::user()->email }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="dropdown-item" style="margin-top:auto; margin-bottom:auto; color: green;"><strong>Device : </strong>{{ $getdevice }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="dropdown-item" style="margin-top:auto; margin-bottom:auto; color: green;"><strong>IP : </strong>{{ $getip }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="dropdown-item" style="margin-top:auto; margin-bottom:auto; color: green;"><strong>Browser : </strong>{{ $getbrowser }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="dropdown-item" style="margin-top:auto; margin-bottom:auto; color: green;"><strong>OS : </strong>{{ $getos }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @endguest

    <script src="/js/switch.js"></script>
    <script src="{{ asset('js/switch.js') }}"></script>
    <!-- <script src="<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>

</html>