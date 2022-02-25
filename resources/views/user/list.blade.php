@extends('layouts.layout1')

@section('content')
                <!-- content @s -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title"{{$search[0]->polling_station_name}}></h3>
                                            <div class="nk-block-des text-soft">
                                                <p>{{$search[0]->EA_NAME}}</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li><a href={{route('generate.PDF',$ps_code)}} target="_blank" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export To PDF</span></a></li>
                                                        <li><a href={{route('generate.excel',$ps_code)}} class="btn btn-white btn-outline-success"><em class="icon ni ni-download-cloud"></em><span>Export To Excel</span></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->

                                <div class="nk-block nk-block-lg">
                                    
                                    <div class="row  g-gs">
                                        @foreach($pollers as $pollers)
                                        <div class="col-sm-3">
                                            
                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="team">
                                                        
                                                        <div class="user-card user-card-s2">
                                                            <div class="user-avatar lg " style="width:80px; height:80px;">
                                                                <span><img src={{ asset('assets/images/profiles/' . $pollers->pic)}} alt="" style="width:80px; height:80px;"></span>
                                                                <div class="status dot dot-lg dot-success"></div>
                                                            </div>
                                                            <div class="user-info">
                                                                <h6>{{$pollers->name}}</h6>
                                                                <span class="sub-text">{{$pollers->position}}</span>
                                                            </div>
                                                        </div>
                                                        <ul class="team-info">
                                                            <li><span>Gender</span><span>{{$pollers->gender}}</span></li>
                                                            <li><span>Voter ID</span><span>{{$pollers->voter_id}}</span></li>
                                                            <li><span>Phone</span><span>{{$pollers->phone}}</span></li>
                                                            <li><span>Email</span><span>{{$pollers->email}}</span></li>
                                                        </ul>
                                                        <div class="team-view">
                                                            <a href="{{route('form.edit', [$pollers->id])}}" class="btn btn-block btn-dim btn-primary"><span>Update Profile</span></a>
                                                        </div>
                                                    </div><!-- .team -->
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                           
                                        </div><!-- .col -->

                                        @endforeach
                                    </div>
                                    
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
           
                @endsection('content')