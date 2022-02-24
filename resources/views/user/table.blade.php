@extends('layouts.headapp')


@section('content')


  <!--start wrapper-->


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

@endsection