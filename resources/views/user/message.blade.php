@extends('layouts.headapp')


@section('content')
  


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


 @endsection