
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style type="text/css">


</style>
<body style=" background-image: linear-gradient(72deg,red 30%, #fff  10%, #1919a3 90%)!important;">
<div class="grey-bg container-fluid ">

<form action="{{route('form.update',$data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="row justify-content-center mt-5">
    <div class="col-xl-5 col-md-12">
      <div class="card">
        <div class="card-header"><h3><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-patch-minus-fill" viewBox="0 0 16 16">
  <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM6 7.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1z"/>
</svg> {{$data->position}}</h3></div>
        <div class="card-content">
           <div class="card-body cleartfix">
                <input type="hidden" name="ps_code"  required  value="{{$data->ps_code}}">
                <input type="hidden" name="position"  required value="{{$data->position}}">
           
           
              <div class="form-group">
                <label for="username">Full name <span class="text-danger"> *</span></label>
                <input type="text" name="name" placeholder="Enter Name"  class="form-control" value="{{$data->name}}">
                        @if ($errors->has('name'))
            <span class="text-danger">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

              </div>
              <?php 
              $genders =[
                'Male',
                'Female'
            ];
              ?>
               <div class="form-group">
                <label for="username">Sex<span class="text-danger"> *</span></label>
                <select class="form-control form-select" name="gender" value="{{$data->gender}}">
                  <option value="" disabled >Select Gender</option>
                    @foreach($genders as $gender)
                    <option value={{$gender}} @if($data->gender == $gender) selected @endif>{{$gender}}</option>
                    @endforeach
                  
                 
                </select>
                        @if ($errors->has('gender'))
            <span class="text-danger">
                <strong>{{ $errors->first('gender') }}</strong>
            </span>
        @endif

              </div>
<!--Date of Birth -->
<div class="form-group">
                <label for="username">Date Of Birth <span class="text-danger"> *</span></label>
                <input type="date" name="dob" placeholder="Date of Birth"  class="form-control" value="{{$data->dob}}">
                        @if ($errors->has('dob'))
            <span class="text-danger">
                <strong>{{ $errors->first('dob') }}</strong>
            </span>
        @endif

              </div>

               <div class="form-group">
                <label for="username">Phone<span class="text-danger"> *</span></label>
                <input type="text" name="phone" placeholder="0555555555"  class="form-control" value="{{$data->phone}}">
                        @if ($errors->has('phone'))
            <span class="text-danger">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif

              </div>
               <div class="form-group">
                <label for="username">  Email(Optional)</label>
                <input type="email" name="email" placeholder="Enter Email"  class="form-control" value="{{$data->email}}">
                        @if ($errors->has('email'))
            <span class="text-danger">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

              </div>
              <div class="form-group">
                <label for="username">  Voter ID<span class="text-danger"> *</span></label>
                <input type="text" name="voter_id" placeholder="Enter voters id"  class="form-control" value="{{$data->voter_id}}">
                        @if ($errors->has('voter_id'))
            <span class="text-danger">
                <strong>{{ $errors->first('voter_id') }}</strong>
            </span>
        @endif

              </div>

<div class="form-group">
                <label for="username">  Picture<span class="text-danger"> *</span></label> <br>
                <div class="mb-3">
                <img  src={{ asset('assets/images/profiles/' . $data->pic ) }} alt=""  width="60" height="60" >
                </div>
                <input type="file" name="image" placeholder=""  class="form-control form-" value="{{$data->pic}}">
                    @if ($errors->has('image'))
            <span class="text-danger">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
        @endif
              </div>

               {{ method_field('PUT') }}

          </div>
        </div>
      </div>
    </div>

  <div class="row col-md-12 justify-content-center">
  <div class=" col-md-2">
  <a class="btn subscribe  btn-block rounded-pill shadow-sm btn-outline-danger" href="{{route('home')}}"> Cancel </a>
</div>
 <div class="col-md-2">
  <button type="submit" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Save  </button>
</div>
</div>

</div>
</form>




</div>

</body>
</html>