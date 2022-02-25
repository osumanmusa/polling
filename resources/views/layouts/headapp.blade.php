<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href={{asset('assets/images/favicon-32x32.png')}} type="image/png" />
  <!--plugins-->
  <link href={{asset('assets/plugins/simplebar/css/simplebar.css')}} rel="stylesheet" />
  <link href={{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}} rel="stylesheet" />
  <link href={{asset('assets/plugins/metismenu/css/metisMenu.min.css')}} rel="stylesheet" />
  <link href={{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}} rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href={{asset('assets/css/bootstrap.min.css')}} rel="stylesheet" />
  <link href={{asset('assets/css/bootstrap-extended.css')}} rel="stylesheet" />
  <link href={{asset('assets/css/style.css')}} rel="stylesheet" />
  <link href={{asset('assets/css/icons.css')}} rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />



  <title>Skodash - Bootstrap 5 Admin Template</title>
</head>

<body>
  <div class="wrapper">
    <!--start top header-->

  <header class="top-header p-3 ">        
        <nav class="navbar navbar-expand">
          <div class="mobile-toggle-icon d-xl-none">
              <i class="bi bi-list"></i>
            </div>
            <div class="top-navbar d-none d-xl-block">
            <ul class="navbar-nav align-items-center">
              <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">Home</a>
              </li>
          
            </ul>
            </div>
            <div class="search-toggle-icon d-xl-none ms-auto">
              <i class="bi bi-search"></i>
            </div>
            <form class="searchbar d-none d-xl-flex ms-auto" action="{{route('search')}}" method="POST">
                    @csrf
             <select name="code" type="text" class="form-control form-select input_height " placeholder="Have a question? Ask Now" style="padding-right: 20px!important;" required> <option value="">Select By</option>

                <option value="ea_name">EA NAME</option>
                <option value="ea_code">EA CODE</option>
                <option value="ps_name">POLLING STATION NAME</option>
                <option value="ps_code">POLLING STATION CODE</option>
        </select>
           
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                <input class="form-control " type="text" placeholder="Type here to search" name="query" required>
                <button type="submit" class="btn btn-primary">submit</button>
                <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form>
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
                      <a class="dropdown-item" href="pages-user-profile.html">
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
  <script src={{asset('assets/js/jquery.min.js')}}></script>
  <script src={{asset('assets/plugins/simplebar/js/simplebar.min.js')}}></script>
  <script src={{asset('assets/plugins/metismenu/js/metisMenu.min.js')}}></script>
  <script src={{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}></script>
  <script src={{asset('assets/js/pace.min.js')}}></script>
  <script src={{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}></script>
  <script src={{asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}></script>
  <script src={{asset('assets/js/table-datatable.js')}}></script>
    
  <!--app-->
  <script src={{asset('assets/js/app.js')}}></script>
  
</body>

</html>