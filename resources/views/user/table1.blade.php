@extends('layouts.layout1')

@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Polling Stations</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="more-options">
                                                    <ul class="nk-block-tools g-3">
                                                      <form method="POST" action="{{route('search')}}">
                                                        @csrf
                                                       <li>
                                                            <select class="form-control mx-2" name="code" > 
                                                                <option value="ea_name" selected>ELECTORAL AREA </option>
                                                                <option value="ea_code">ELECTORAL AREA CODE</option>
                                                                <option value="ps_name">POLLING STATION </option>
                                                                <option value="ps_code">POLLING STATION CODE</option>
                                                            </select>
                                                        </li>
                                                        <li>
                                                            <div class="form-control-wrap mx-2">
                                                                <div class="form-icon form-icon-right">
                                                                    <em class="icon ni ni-search"></em>
                                                                </div>
                                                                <input type="text" class="form-control mx-2" id="default-04" placeholder="Search Here" name="query" >
                                                            </div>
                                                        </li>
                                                      
                                                        <li class="nk-block-tools-opt">
                                                            <a href="#" class="btn btn-icon btn-primary d-md-none mx-2"><em class="icon ni ni-plus"></em></a>
                                                           
                                                            <button type="submit" class="btn btn-primary d-none d-md-inline-flex mx-2"><em class="icon ni ni-search"></em><span>Search</span> </button>
                                                        </li>
                                                    </form>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="nk-tb-list is-separate mb-3">
                                        <div class="nk-tb-item nk-tb-head">
                                            
                                            <div class="nk-tb-col"><span class="sub-text">Electoral Area Code</span></div>
                                            <div class="nk-tb-col tb-col-mb"><span class="sub-text">Electoral Area Name</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Polling Station Code</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Polling Station Name</span></div>
                                            
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Actions</span></div>
                                            
                                        </div><!-- .nk-tb-item -->
                                        @foreach($search as $result)
                                        <div class="nk-tb-item">
                                            
                                            <div class="nk-tb-col">
                                                <a href="html/ecommerce/customer-details.html">
                                                    <div class="user-card">
                                                        <div class="user-avatar">
                                                            <span>{{ $loop->index+1 }}</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">{{$result->EA_CODE}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                           
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <span class="tb-amount">{{$result->EA_NAME}}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>{{$result->ps_code}}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>{{$result->polling_station_name}}</span>
                                            </div>
                                            
                                            <div class="nk-tb-col tb-col-md nk-tb-col-tools">
                                                
                                                    
                                                  
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="{{route('form.create', [$result->ps_code])}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                 
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                               
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        @endforeach
                                    </div><!-- .nk-tb-list -->
                                    <div class="card">
                                        <div class="card-inner">
                                            <div class="nk-block-between-md g-3">
                                                <div class="g">
                                                    <ul class="pagination justify-content-center justify-content-md-start">
                                                        <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                       
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
                                                    </ul><!-- .pagination -->
                                                </div>
                                                <div class="g">
                                                    <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                        <div>Page</div>
                                                        <div>
                                                            <select class="form-select " data-search="on" data-dropdown="xs center">
                                                                <option value="page-1">1</option>
                                                                <option value="page-2">2</option>
                                                                <option value="page-4">4</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div>OF 4</div>
                                                    </div>
                                                </div><!-- .pagination-goto -->
                                            </div><!-- .nk-block-between -->
                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
          
                @endsection