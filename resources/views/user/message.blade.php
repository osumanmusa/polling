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


  <!--start wrapper-->
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
              <a class="nav-link" href="index.html">Dashboard</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="app-emailbox.html">Email</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="javascript:;">Projects</a>
              </li>
              <li class="nav-item d-none d-xxl-block">
                <a class="nav-link" href="javascript:;">Events</a>
                </li>
                <li class="nav-item d-none d-xxl-block">
                <a class="nav-link" href="app-to-do.html">Todo</a>
                </li>
            </ul>
            </div>
            <div class="search-toggle-icon d-xl-none ms-auto">
              <i class="bi bi-search"></i>
            </div>
            <form class="searchbar d-none d-xl-flex ms-auto">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                <input class="form-control" type="text" placeholder="Type here to search">
                <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form>
            <div class="top-navbar-right ms-3">
              <ul class="navbar-nav align-items-center">
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="user-setting d-flex align-items-center gap-1">
                   
                    <div class="user-name d-none d-sm-block">{{auth()->user()->name}}</div>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                          <img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="60" height="60">
                          <div class="ms-3">
                            <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
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
                           <div class="setting-text ms-3"><span>Logout</span></div>
                         </div>
                       </a>
                    </li>
                </ul>
              </li>
            
             
              </ul>
              </div>
        </nav>
      </header>
      

       <!--start content-->
       
                <!--end breadcrumb-->
                <h6 class="mb-0 text-uppercase">Results</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%;padding:10px;">
                                <thead>
                                    <tr>
                                        <th>ELECTORAL AREA</th>
                                        <th>POLLING STATION</th>
                                        <th>NAME</th>
                                        <th>POSITION</th>
                                        <th>VOTER ID</th>
                                        <th>GENDER</th>
                                        <th>PHONE</th>
                                        <th>PICTURE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
               
                                  <main class="col-md-12 p-5">
        <div class="row">

          <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href={{route('generate.PDF',$ps_code)}} target="_blank">Export to PDF</a>
        </div>
        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-success" href={{route('generate.excel',$ps_code)}}>Export to excel</a>
        </div>
        </div>
        
                                    @foreach($pollers as $pollers)

                                    <tr>                                       
                                      <td>{{$search[0]->polling_station_name}}</td>
                                        <td>{{$search[0]->EA_NAME}}</td>
                                        <td>{{$pollers->name}}</td>
                                        <td>{{$pollers->position}}</td>
                                        <td>{{$pollers->voter_id}}</td>
                                        <td>{{$pollers->gender}}</td>
                                        <td>{{$pollers->phone}}</td>
                                        <td><img src={{ asset('assets/images/profiles/' . $pollers->pic)}} alt="" class="rounded-circle" width="60" height="60"></td>
                                        <td class="text-center text-light">
                                        <a class="btn btn-primary" href="{{route('form.edit', [$pollers->id])}}">
                                        <i class="fa fa-eye"></i>Update</a>
                                        </td>                             
                                   
                                    </tr>
                                    @endforeach
            
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>

            </main>
       <!--end page main-->


       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        
  

  </div>
  <!--end wrapper-->


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