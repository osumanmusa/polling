@extends('layouts.layout1')

@section('content')
<form action="{{route('form.update',$data->id)}}" method="POST" enctype="multipart/form-data">
    <div class="mt-4 mx-auto">
<div class="card card-preview col-md-5 mx-2">
    <div class="card-inner">
        <div class="preview-block">
            <input type="hidden" name="ps_code"  required  value="{{$data->ps_code}}">
            <input type="hidden" name="position"  required value="{{$data->position}}">
            <span class="preview-title-lg overline-title">{{$data->position}}</span>
            <div class="row gy-4">

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label" for="default-01">Full Name</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="default-01" placeholder="Peter Lawson"name="name" value="{{$data->name}}">
                        </div>
                        @if ($errors->has('name'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>
                <?php
                $genders =[
                'Male',
                'Female'
            ];
              ?>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label" for="default-05">Gender</label>
                        <div class="form-control-wrap">
                            <select class="form-control form-select" name="gender" placeholder="gender" value="{{$data->gender}}">
                                @foreach($genders as $gender)
                                <option value={{$gender}} @if($data->gender == $gender) selected @endif>{{$gender}}</option>
                                @endforeach
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
                           
                            <input type="date" class="form-control" id="default-03" placeholder="02/09/1987" name="dob" value="{{$data->dob}}">
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
                           
                            <input type="text" class="form-control" name="phone" id="default-04" placeholder="0555555550" value="{{$data->phone}}">
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
                            
                            <input type="text" class="form-control" name="voter_id" id="default-04" placeholder="3234512343"  value="{{$data->voter_id}}">
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
                            <input type="text" class="form-control" name="email" id="default-04" placeholder="peterlawson@gmail.com" value="{{$data->email}}">
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
                            <div class="mb-3">
                                <img  src={{ asset('assets/images/profiles/' . $data->pic ) }} alt=""  width="60" height="60" >
                                </div>
                            <div class="custom-file">
                                <input type="file"  class="custom-file-input" id="customFile" name="image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        @if ($errors->has('image'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                    </div>
                   
                 
                </div>
           
            </div>
        
            

            <hr class="preview-hr">
        
            <button class="btn btn-outline-danger">CANCEL</button>
            <button class="btn btn-primary mx-3" type="sumbit">SAVE</button>
        </div>
    </div>
</div><!-- .card-preview -->
{{ method_field('PUT') }}
</div>
</form>


@endsection