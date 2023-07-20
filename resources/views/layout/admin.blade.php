<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title??'E-Ticaret'}}</title>

    <link href="{{asset('/admintema/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/admintema/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('/admintema/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('/admintema/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/admintema/css/lib/sweetalert/sweetalert.css')}}" rel="stylesheet">
    {{$css_plugin??''}}
    <link href="{{asset('/admintema/css/style.css')}}" rel="stylesheet">

</head>

<body>

<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{route('dashboard')}}">
                        <img src="{{asset('/admintema/images/logo.png')}}" alt=""/> <span>Eticaret</span></a></div>

                <li><a href="{{route('dashboard')}}"><i class="ti-home"></i> Anasayfa </a></li>
                <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i> Ürün İşlemleri <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{route('categories')}}">Kategori Yönetimi</a></li>
                        <li><a href="#">Ürün Yönetimi</a></li>
                    </ul>
                </li>
                <li><a><i class="ti-close"></i> Çıkış Yap</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->

<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="float-right">
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <i class="ti-bell"></i>
                            <div class="drop-down dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">Recent Notifications</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="{{asset('/admintema/images/avatar/3.jpg')}}" alt=""/>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">5 members joined today</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="{{asset('/admintema/images/avatar/3.jpg')}}" alt=""/>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mariam</div>
                                                    <div class="notification-text">likes a photo of you</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="{{asset('/admintema/images/avatar/3.jpg')}}" alt=""/>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Tasnim</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="{{asset('/admintema/images/avatar/3.jpg')}}" alt=""/>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center">
                                            <a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <i class="ti-email"></i>
                            <div class="drop-down dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">2 New Messages</span>
                                    <a href="email.html">
                                        <i class="ti-pencil-alt pull-right"></i>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="{{asset('/admintema/images/avatar/1.jpg')}}" alt=""/>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="{{asset('/admintema/images/avatar/2.jpg')}}" alt=""/>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="{{asset('/admintema/images/avatar/3.jpg')}}" alt=""/>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="{{asset('/admintema/images/avatar/2.jpg')}}" alt=""/>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center">
                                            <a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                            <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">Upgrade Now</span>
                                    <p class="trial-day">30 Days Trail</p>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ti-email"></i>
                                                <span>Inbox</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-settings"></i>
                                                <span>Setting</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ti-lock"></i>
                                                <span>Lock Screen</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-power-off"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <div class="page-title">
                            {{$page_title??''}}
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-12 p-l-0  title-margin-right">
                    <div class="page-title">
                        {{$bread_crumb??''}}
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">
                {{$slot}}
            </section>
        </div>
    </div>
</div>


<!-- jquery vendor -->
<script src="{{asset('/admintema/js/lib/jquery.min.js')}}"></script>
<script src="{{asset('/admintema/js/lib/jquery.nanoscroller.min.js')}}"></script>
<!-- nano scroller -->
<script src="{{asset('/admintema/js/lib/menubar/sidebar.js')}}"></script>
<script src="{{asset('/admintema/js/lib/preloader/pace.min.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('/admintema/js/lib/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('/admintema/js/lib/sweetalert/sweetalert.init.js')}}"></script>

@if (session('type'))
<script>
    swal("{{session('title')}}","{{session('text')}}","{{session('type')}}");
</script>
@endif

{{$js_plugin??''}}

<script src="{{asset('/admintema/js/lib/bootstrap.min.js')}}"></script>
<script src="{{asset('/admintema/js/scripts.js')}}"></script>
<!-- bootstrap -->


</body>

</html>