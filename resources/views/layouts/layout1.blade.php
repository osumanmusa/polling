<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Polling Station</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href={{asset('assets2/css/dashlite1.css?ver=2.9.1')}}>
    <link id="skin-default" rel="stylesheet" href={{asset('assets2/css/theme1.css?ver=2.9.1')}}>
</head>

<body class="nk-body bg-lighter npc-default ">
    <div class="nk-app-root">
     <div class="nk-main ">
        <div class="nk-sidebar" >
            <div class="nk-sidebar-bar">
                <div class="nk-apps-brand">
                    <a href="/" class="logo-link">
                        
                        <img class="logo-dark logo-img" src="{{asset('images/logo.png')}}" alt="logo-dark">
                    </a>
                </div>
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-body">
                        <div class="nk-sidebar-content" data-simplebar>
                            <div class="nk-sidebar-menu">
                                <!-- Menu -->
                                <ul class="nk-menu apps-menu">
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navHospital">
                                            <span class="nk-menu-icon"><em class="icon ni ni-plus-medi"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item active">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navDashboards">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navApps">
                                            <span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="nk-sidebar-footer">
                                <ul class="nk-menu nk-menu-md apps-menu">
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link" title="Settings">
                                            <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="nk-sidebar-profile nk-sidebar-profile-fixed dropdown">
                            <a href="#" data-toggle="dropdown" data-offset="50,-50">
                                <div class="user-avatar bg-primary">
                                    <span>{{substr(auth()->user()->name, 0, 1)}}</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md ml-4">
                                <div class="dropdown-inner user-card-wrap d-none d-md-block">
                                    <div class="user-card">
                                        <div class="user-avatar bg-primary">
                                            <span>{{substr(auth()->user()->name, 0, 1)}}</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">{{auth()->user()->name}}</span>
                                            <span class="sub-text text-soft">{{auth()->user()->email}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                        
                                    </ul>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
        <!-- main @s -->
   
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light sticky-top">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-search ml-3 ml-xl-0">
                                <em class="icon ni ni-search"></em>
                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    
                                  
                                   <li class="dropdown user-dropdown order-sm-first">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm bg-primary">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-xl-block">
                                                <div class="user-status text-primary">User</div>
                                                <div class="user-name dropdown-indicator">{{auth()->user()->name}}</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1 is-light">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar bg-primary">
                                                    <span>{{substr(auth()->user()->name, 0, 1)}}</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">{{auth()->user()->name}}</span>
                                                    <span class="sub-text">{{auth()->user()->email}}</span>
                                                </div>
                                                <div class="user-action">
                                                    <a class="btn btn-icon mr-n2" href="html/user-profile-setting.html"><em class="icon ni ni-setting"></em></a>
                                                </div>
                                            </div>
                                        </div>
                                    
                                     
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                               
                                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                                    document.getElementById('logout-form').submit();"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->



                @yield('content')







            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    
    <!-- JavaScript -->
    <script src={{asset('assets2/js/bundle.js?ver=2.9.1')}}></script>
    <script src={{asset('assets2/js/scripts.js?ver=2.9.1')}}></script>
    <script src={{asset('assets2/js/charts/chart-ecommerce.js?ver=2.9.1')}}></script>
</body>

</html>