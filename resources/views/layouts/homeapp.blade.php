<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href={{asset('assets/images/favicon-32x32.png')}} type="image/png" />
  <!--plugins-->
  <!-- Bootstrap CSS -->
  <link href={{asset('assets/css/bootstrap.min.css')}} rel="stylesheet" />
  <link href={{asset('assets/css/bootstrap-extended.css')}} rel="stylesheet" />
  <link href={{asset('assets/css/style.css')}} rel="stylesheet" />
  <link href={{asset('assets/css/icons.css')}} rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


  <title>Polling Station</title>
      <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");

body {
    background: url("{{asset('assets/images/good.jpeg')}}");
   
    font-family: "Poppins", sans-serif;
    font-weight: 300;
    background-size: cover;
}

.height {
    height: 100vh
}

.search {
    position: relative;
    
}
.input_height{
    height: 40px;
}
.search input {
    
  
    border: 2px solid #d6d4d4
}

.search input:focus {
    box-shadow: none;
    border: 2px solid blue
}

.search .fa-search {
    position: absolute;
    top: 20px;
    left: 16px
}

.search button {
    position: absolute;
    top: 5px;
    right: 5px;
    height: 50px;
    width: 110px;
    background: blue
}
    </style>
</head>

<body>
  <div class="wrapper">
    <!--start top header-->

  <header class="top-header p-3 " style="">        
        <nav class="navbar navbar-expand" style="background-image: linear-gradient(72deg, #fff  20%, #1919a3 100%);">
          <div class="mobile-toggle-icon d-xl-none">
              <i class="bi bi-list"></i>
            </div>
            <div class="top-navbar d-none d-xl-block">
            <ul class="navbar-nav align-items-center">
              <li class="nav-item mx-5">
              <a class="nav-link" href="{{route('home')}}" style="color:#222"><i class="fa fa-home" style="font-size: 20px;"></i><strong>Home</strong></a>
              </li>
            
            </ul>
            </div>
       
            <!--            <div class="searchbar d-none d-xl-flex ms-auto" >
                                @csrf
                       
                        </div>-->
            <div class="top-navbar-right ms-3">
              <ul class="navbar-nav align-items-center">
                @guest
                 @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                             @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                         
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="user-setting d-flex align-items-center gap-1">
                    <img src="{{asset('assets/images/avatars/avatar2.png')}}" class="user-img" alt="">
                    <div class="user-name d-none d-sm-block">{{ Auth::user()->name }}</div>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                          <img src="{{asset('assets/images/avatars/avatar2.png')}}" alt="" class="rounded-circle" width="60" height="60">
                          <div class="ms-3">
                            <h6 class="mb-0 dropdown-user-name">{{ Auth::user()->name }}</h6>
                            <small class="mb-0 dropdown-user-designation text-secondary">HR Manager</small>
                          </div>
                       </div>
                     </a>
                   </li>
                   <li><hr class="dropdown-divider"></li>
                   <li>
                      <a class="dropdown-item" href="#">
                         <div class="d-flex align-items-center">
                           <div class="setting-icon"><i class="bi bi-person-fill"></i></div>
                           <div class="setting-text ms-3"><span>Profile</span></div>
                         </div>
                       </a>
                    </li>
                    
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <a class="dropdown-item" href="authentication-signup-with-header-footer.html">
                         <div class="d-flex align-items-center">
                           <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                           <div class="setting-text ms-3"><span><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> logout
                                    </a> 
                           </span></div>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                         </div>
                       </a>
                    </li>
                </ul>
              </li>
            @endguest
             
              </ul>
              </div>
        </nav>
      </header>
      
      
@yield('content')

 <!-- Bootstrap bundle JS -->
  <script src={{asset('assets/js/bootstrap.bundle.min.js')}}></script>
  <!--plugins-->
    
  <!--app-->
  <script src={{asset('assets/js/app.js')}}></script>
  
</body>

</html>