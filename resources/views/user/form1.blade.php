@extends('layouts.layout1')

@section('content')
                <!-- content @s -->
                                    <div class="nk-block nk-block-lg mx-3 mt-3 justify content-center">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Fill All Forms</h4>
                                                <div class="nk-block-des">
                                                    <p>Nb: All Text-fields are required so please make sureyou fill them beforeyou click on the submit button.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{route('form.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                    <div class="row container col-md-12">
                                        <div class="card card-preview col-md-5 mx-2">
                                            <div class="card-inner">
                                                <div class="preview-block">
                                                    <input type="hidden" name="ps_code"  required  value="{{$data->ps_code}}" >
                                                     <input type="hidden" name="position"  required value="Chairman" >
           
                                                    <span class="preview-title-lg overline-title">Chairman</span>
                                                    <div class="row gy-4">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-01">Full Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="default-01" placeholder="Peter Lawson"name="name">
                                                                </div>
                                                                @if ($errors->has('name'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-05">Gender</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-control form-select" name="gender" placeholder="gender">
                                                                       
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                      </select>
                                                                </div>
                                                                @if ($errors->has('gender'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('gender') }}</strong>
                                                                </span>
                                                            @endif
                                                    
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Date Of Birth</label>
                                                                <div class="form-control-wrap">
                                                                   
                                                                    <input type="date" class="form-control" id="default-03" placeholder="02/09/1987" name="dob">
                                                                </div>
                                                                @if ($errors->has('dob'))
            <span class="text-danger">
                <strong>{{ $errors->first('dob') }}</strong>
            </span>
        @endif
                                                            </div>
                                                           
                                                           
                                                        </div>
                                                        
                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Phone</label>
                                                                <div class="form-control-wrap">
                                                                   
                                                                    <input type="text" class="form-control" name="phone" id="default-04" placeholder="0555555550">
                                                                </div>
                                                                @if ($errors->has('phone'))
            <span class="text-danger">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
                                                            </div>
                                                           
                                                         
                                                        </div>
                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Voter ID</label>
                                                                <div class="form-control-wrap">
                                                                    
                                                                    <input type="text" class="form-control" name="voter_id" id="default-04" placeholder="3234512343">
                                                                </div>
                                                                @if ($errors->has('voter_id'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('voter_id') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                           
                                                         
                                                        </div>
                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Email (Optional)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right">
                                                                        <em class="icon ni ni-mail"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="email" id="default-04" placeholder="peterlawson@gmail.com">
                                                                </div>
                                                                @if ($errors->has('email'))
            <span class="text-danger">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
                                                            </div>
                                                           
                                                         
                                                        </div>

                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-06">Upload Image</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="custom-file">
                                                                        <input type="file"  class="custom-file-input" id="customFile" name="image[]">
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                                @if ($errors->has('image.0'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('image.0') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                           
                                                         
                                                        </div>
                                                   
                                                    </div>
                                                
                                             
                                                    <hr class="preview-hr">
                                                
                                      
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->

                                        <div class="card-preview col-md-5 bg-white mx-2">
                                            <div class="card-inner">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title">Secretary</span>
                                                    <input type="hidden" name="s_position"  required  value="Secretary" >
                                                    <div class="row gy-4">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-01">Full Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="default-01" placeholder="Peter Lawson"name="s_name">
                                                                </div>
                                                                @if ($errors->has('s_name'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('s_name') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-05">Gender</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-control form-select" name="s_gender" placeholder="gender">
                                                                       
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                      </select>
                                                                </div>
                                                                @if ($errors->has('s_gender'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('s_gender') }}</strong>
                                                                </span>
                                                            @endif
                                                    
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Date Of Birth</label>
                                                                <div class="form-control-wrap">
                                                                   
                                                                    <input type="date" class="form-control" id="default-03" placeholder="02/09/1987" name="s_dob">
                                                                </div>
                                                                @if ($errors->has('s_dob'))
            <span class="text-danger">
                <strong>{{ $errors->first('s_dob') }}</strong>
            </span>
        @endif
                                                            </div>
                                                           
                                                           
                                                        </div>
                                                        
                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Phone</label>
                                                                <div class="form-control-wrap">
                                                                   
                                                                    <input type="text" class="form-control" name="s_phone" id="default-04" placeholder="0555555550">
                                                                </div>
                                                                @if ($errors->has('s_phone'))
            <span class="text-danger">
                <strong>{{ $errors->first('s_phone') }}</strong>
            </span>
        @endif
                                                            </div>
                                                           
                                                         
                                                        </div>
                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Voter ID</label>
                                                                <div class="form-control-wrap">
                                                                    
                                                                    <input type="text" class="form-control" name="s_voter_id" id="default-04" placeholder="3234512343">
                                                                </div>
                                                                @if ($errors->has('s_voter_id'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('s_voter_id') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                           
                                                         
                                                        </div>
                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Email (Optional)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right">
                                                                        <em class="icon ni ni-mail"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="s_email" id="default-04" placeholder="peterlawson@gmail.com">
                                                                </div>
                                                                @if ($errors->has('s_email'))
            <span class="text-danger">
                <strong>{{ $errors->first('s_email') }}</strong>
            </span>
        @endif
                                                            </div>
                                                           
                                                         
                                                        </div>

                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-06">Upload Image</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="custom-file">
                                                                        <input type="file"  class="custom-file-input" id="customFile" name="image[]">
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                                @if ($errors->has('image.1'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('image.1') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                           
                                                         
                                                        </div>
                                                   
                                                   
                                                    </div>
                                                
                                             
                                                    <hr class="preview-hr">
                                                
                                      
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->

                                    </div><!-- .card-form-end-->
                                    <br>
                                    <div class="row container col-md-12">
                                        <div class="card card-preview col-md-5 mx-2">
                                            <input type="hidden" name="o_position"  required value="Organizer" >
                                            <div class="card-inner">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title">Organizer</span>
                                                    <div class="row gy-4">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-01">Full Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="default-01" placeholder="Peter Lawson"name="o_name">
                                                                </div>
                                                                @if ($errors->has('o_name'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('o_name') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-05">Gender</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-control form-select" name="o_gender" placeholder="gender">
                                                                       
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                      </select>
                                                                </div>
                                                                @if ($errors->has('o_gender'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('o_gender') }}</strong>
                                                                </span>
                                                            @endif
                                                    
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Date Of Birth</label>
                                                                <div class="form-control-wrap">
                                                                   
                                                                    <input type="date" class="form-control" id="default-03" placeholder="02/09/1987" name="o_dob">
                                                                </div>
                                                                @if ($errors->has('o_dob'))
            <span class="text-danger">
                <strong>{{ $errors->first('o_dob') }}</strong>
            </span>
        @endif
                                                            </div>
                                                           
                                                           
                                                        </div>
                                                        
                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Phone</label>
                                                                <div class="form-control-wrap">
                                                                   
                                                                    <input type="text" class="form-control" name="o_phone" id="default-04" placeholder="0555555550">
                                                                </div>
                                                                @if ($errors->has('o_phone'))
            <span class="text-danger">
                <strong>{{ $errors->first('o_phone') }}</strong>
            </span>
        @endif
                                                            </div>
                                                           
                                                         
                                                        </div>
                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Voter ID</label>
                                                                <div class="form-control-wrap">
                                                                    
                                                                    <input type="text" class="form-control" name="o_voter_id" id="default-04" placeholder="3234512343">
                                                                </div>
                                                                @if ($errors->has('o_voter_id'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('o_voter_id') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                           
                                                         
                                                        </div>
                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Email (Optional)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right">
                                                                        <em class="icon ni ni-mail"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="o_email" id="default-04" placeholder="peterlawson@gmail.com">
                                                                </div>
                                                                @if ($errors->has('o_email'))
            <span class="text-danger">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
                                                            </div>
                                                           
                                                         
                                                        </div>

                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-06">Upload Image</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="custom-file">
                                                                        <input type="file"  class="custom-file-input" id="customFile" name="image[]">
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                                @if ($errors->has('image.2'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('image.2') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                           
                                                         
                                                        </div>
                                                   
                                                    </div>
                                                
                                             
                                                    <hr class="preview-hr">
                                                
                                      
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->

                                        <div class="card-preview col-md-5 mx-2 bg-white">
                                            <div class="card-inner">
                                                <input type="hidden" name="w_position"  value="Women's Organizer" required>
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title">Women Organizer</span>
                                                    <div class="row gy-4">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-01">Full Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="default-01" placeholder="Peter Lawson"name="w_name">
                                                                </div>
                                                                @if ($errors->has('w_name'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('w_name') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-05">Gender</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-control form-select" name="w_gender" placeholder="gender">
                                                                       
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                      </select>
                                                                </div>
                                                                @if ($errors->has('w_gender'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('w_gender') }}</strong>
                                                                </span>
                                                            @endif
                                                    
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Date Of Birth</label>
                                                                <div class="form-control-wrap">
                                                                   
                                                                    <input type="date" class="form-control" id="default-03" placeholder="02/09/1987" name="w_dob">
                                                                </div>
                                                                @if ($errors->has('w_dob'))
            <span class="text-danger">
                <strong>{{ $errors->first('w_dob') }}</strong>
            </span>
        @endif
                                                            </div>
                                                           
                                                           
                                                        </div>
                                                        
                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Phone</label>
                                                                <div class="form-control-wrap">
                                                                   
                                                                    <input type="text" class="form-control" name="w_phone" id="default-04" placeholder="0555555550">
                                                                </div>
                                                                @if ($errors->has('w_phone'))
            <span class="text-danger">
                <strong>{{ $errors->first('w_phone') }}</strong>
            </span>
        @endif
                                                            </div>
                                                           
                                                         
                                                        </div>
                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Voter ID</label>
                                                                <div class="form-control-wrap">
                                                                    
                                                                    <input type="text" class="form-control" name="w_voter_id" id="default-04" placeholder="3234512343">
                                                                </div>
                                                                @if ($errors->has('w_voter_id'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('w_voter_id') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                           
                                                         
                                                        </div>
                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Email (Optional)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right">
                                                                        <em class="icon ni ni-mail"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="w_email" id="default-04" placeholder="peterlawson@gmail.com">
                                                                </div>
                                                                @if ($errors->has('w_email'))
            <span class="text-danger">
                <strong>{{ $errors->first('w_email') }}</strong>
            </span>
        @endif
                                                            </div>
                                                           
                                                         
                                                        </div>

                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-06">Upload Image</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="custom-file">
                                                                        <input type="file"  class="custom-file-input" id="customFile" name="image[]">
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                                @if ($errors->has('image.3'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('image.3') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                           
                                                         
                                                        </div>
                                                                
                                                    </div>
                                                
                                             
                                                    <hr class="preview-hr">
                                                
                                      
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->

                                    </div><!-- .card-form-end-->
                                    <br>
                                    <div class="row container col-md-12">
                                        <input type="hidden" name="y_position"  value="Youth Organizer"  >
                                        <div class="card card-preview col-md-5 mx-2">
                                            <div class="card-inner">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title">Youth Organizer</span>
                                                    <div class="row gy-4">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-01">Full Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="default-01" placeholder="Peter Lawson"name="y_name">
                                                                </div>
                                                                @if ($errors->has('y_name'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('y_name') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-05">Gender</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-control form-select" name="y_gender" placeholder="gender">
                                                                       
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                      </select>
                                                                </div>
                                                                @if ($errors->has('y_gender'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('y_gender') }}</strong>
                                                                </span>
                                                            @endif
                                                    
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Date Of Birth</label>
                                                                <div class="form-control-wrap">
                                                                   
                                                                    <input type="date" class="form-control" id="default-03" placeholder="02/09/1987" name="y_dob">
                                                                </div>
                                                                @if ($errors->has('y_dob'))
            <span class="text-danger">
                <strong>{{ $errors->first('y_dob') }}</strong>
            </span>
        @endif
                                                            </div>
                                                           
                                                           
                                                        </div>
                                                        
                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Phone</label>
                                                                <div class="form-control-wrap">
                                                                   
                                                                    <input type="text" class="form-control" name="phone" id="default-04" placeholder="0555555550">
                                                                </div>
                                                                @if ($errors->has('y_phone'))
            <span class="text-danger">
                <strong>{{ $errors->first('y_phone') }}</strong>
            </span>
        @endif
                                                            </div>
                                                           
                                                         
                                                        </div>
                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Voter ID</label>
                                                                <div class="form-control-wrap">
                                                                    
                                                                    <input type="text" class="form-control" name="y_voter_id" id="default-04" placeholder="3234512343">
                                                                </div>
                                                                @if ($errors->has('voter_id'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('y_voter_id') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                           
                                                         
                                                        </div>
                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Email (Optional)</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right">
                                                                        <em class="icon ni ni-mail"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="y_email" id="default-04" placeholder="peterlawson@gmail.com">
                                                                </div>
                                                                @if ($errors->has('y_email'))
            <span class="text-danger">
                <strong>{{ $errors->first('y_email') }}</strong>
            </span>
        @endif
                                                            </div>
                                                           
                                                         
                                                        </div>

                                                        <div class="col-sm-6">
                                                          
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-06">Upload Image</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="custom-file">
                                                                        <input type="file"  class="custom-file-input" id="customFile" name="image[]">
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                                @if ($errors->has('image.4'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('image.4') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                           
                                                         
                                                        </div>
                                                   
                                                    </div>
                                                
                                             
                                                    <hr class="preview-hr">
                                                
                                      
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->

                                        <div class="card-preview col-md-5 mx-2 bg-white">
                                            <div class="card-inner">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title">Submit</span>


                                                        <div class="my-3">
                                                            <div class="dz-message" data-dz-message>
                                                                <span class="dz-message-text">Done filling all fields?</span>
                                                                <span class="dz-message-text">Submit</span>
                                                                <br>
                                                                <div class="my-3">
                                                                <button class="btn btn-outline-danger">CANCEL</button>
                                                                <button class="btn btn-primary mx-3" type="sumbit">SAVE</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                
                                             
                                                    <hr class="preview-hr">
                                                
                                      
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->

                                    </div><!-- .card-form-end-->
                                </form>
                            </div><!-- .nk-block -->
                <!-- content @e -->
         @endsection