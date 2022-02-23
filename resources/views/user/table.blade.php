<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/icons.css" rel="stylesheet">
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
              <a class="nav-link" href="{{route('home')}}">Home</a>
              </li>
          
            </ul>
            </div>
            <div class="search-toggle-icon d-xl-none ms-auto">
              <i class="bi bi-search"></i>
            </div>
            <form class="searchbar d-none d-xl-flex ms-auto" action="{{route('search')}}" method="POST">
                    @csrf
             <select name="code" type="text" class="form-control form-select input_height " placeholder="" style="padding:10px!important; " required> 
              <option value="" disabled selected>Select By</option>
              <option value="ea_name">ELECTORAL AREA </option>
              <option value="ea_code">ELECTORAL AREA CODE</option>
              <option value="ps_name">POLLING STATION </option>
              <option value="ps_code">POLLING STATION CODE</option>
        </select>
           
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"></div>
                <input class="form-control " type="text" placeholder="Type here to search" name="query" required >
                <button type="submit" class="btn btn-primary">submit</button>
                <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form>
            <div class="top-navbar-right ms-3">
              <ul class="navbar-nav align-items-center">
              <li class="nav-item dropdown dropdown-large">
             
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
       <main class="col-md-12 p-5">
		
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Results</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>EA CODE</th>
										<th>EA NAME</th>
										<th>POLLING STATION CODE</th>
										<th>POLLING STATION NAME</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody>
									@foreach($search as $result)
									<tr>
										<td>{{$result->EA_CODE}}</td>
										<td>{{$result->EA_NAME}}</td>
										<td>{{$result->ps_code}}</td>
										<td>{{$result->polling_station_name}}</td>
										<td class="text-center text-light"><a class="btn btn-primary" href="{{route('form.create', [$result->ps_code])}}"><i class="fa fa-eye"></i> Get Link</a></td>
									</tr>
									@endforeach
			
								</tbody>
								<tfoot>
									<tr>
										<th>EA CODE</th>
										<th>EA NAME</th>
										<th>POLLING STATION CODE</th>
										<th>POLLING STATION NAME</th>
										<th>ACTION</th>
									</tr>
								</tfoot>
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
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assets/js/pace.min.js"></script>
  <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script src="assets/js/table-datatable.js"></script>
	
  <!--app-->
  <script src="assets/js/app.js"></script>
  
</body>

</html>