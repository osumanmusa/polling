<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style type="text/css">
.grey-bg {  
    background-color: #F5F7FA;
}

</style>

<div class="grey-bg container-fluid ">
  <section id="minimal-statistics">

   <p>{{$data->ps_code}}</p>
   <p>{{$data->polling_station_name}}</p>
<form action="{{route('form.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="row justify-content-center mt-5">
    <div class="col-xl-5 col-md-12">
      <div class="card">
        <div class="card-header"><h3><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-patch-minus-fill" viewBox="0 0 16 16">
  <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM6 7.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1z"/>
</svg> Chairman</h3></div>
        <div class="card-content">
           <div class="card-body cleartfix">
                <input type="number" name="ps_code" placeholder='{{$data->ps_code}}' required class="form-control" value="{{$data->ps_code}}" hidden>
                <input type="number" name="position" placeholder='position' required class="form-control" value="Chairman" hidden>
           
           
              <div class="form-group">
                <label for="username">Full name <span class="text-danger"> *</span></label>
                <input type="text" name="name" placeholder="Enter Name" required class="form-control">
              </div>
               <div class="form-group">
                <label for="username">Sex<span class="text-danger"> *</span></label>
                <select class="form-control form-select" name="gender">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
              </div>
               <div class="form-group">
                <label for="username">Phone<span class="text-danger"> *</span></label>
                <input type="number" name="phone" placeholder="Enter Phone number" required class="form-control">
              </div>
               <div class="form-group">
                <label for="username">  Email(Optional)</label>
                <input type="email" name="email" placeholder="Enter Email" required class="form-control">
              </div>
              <div class="form-group">
                <label for="username">  Voter ID<span class="text-danger"> *</span></label>
                <input type="text" name="voter_id" placeholder="Enter voters id" required class="form-control">
              </div>
               <div class="form-group">
                <label for="username">  Picture<span class="text-danger"> *</span></label>
                <input type="file" name="image" placeholder="" required class="form-control form-">
              </div>

          </div>
        </div>
      </div>
    </div>


    <div class="col-xl-5 col-md-12">
      <div class="card">
        <div class="card-header"><h3><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-layers-fill" viewBox="0 0 16 16">
  <path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4z"/>
  <path d="m2.125 8.567-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0l-5.17-2.756z"/>
</svg> Secretary</h3></div>
        <div class="card-content">
     <div class="card-body cleartfix">
             
           <input type="number" name="s_position" placeholder='position' required class="form-control" value="Secretary" hidden>
              <div class="form-group">
                <label for="username">Full name <span class="text-danger"> *</span></label>
                <input type="text" name="s_name" placeholder="Enter Name" required class="form-control">
              </div>
               <div class="form-group">
                <label for="username">Sex<span class="text-danger"> *</span></label>
                <select class="form-control form-select" name="s_gender">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
              </div>
               <div class="form-group">
                <label for="username">Phone<span class="text-danger"> *</span></label>
                <input type="number" name="s_phone" placeholder="Enter Phone number" required class="form-control">
              </div>
               <div class="form-group">
                <label for="username">  Email(Optional)</label>
                <input type="email" name="s_email" placeholder="Enter Email" required class="form-control">
              </div>
              <div class="form-group">
                <label for="username">  Voter ID<span class="text-danger"> *</span></label>
                <input type="text" name="s_voter_id" placeholder="Enter voters id" required class="form-control">
              </div>
               <div class="form-group">
                <label for="username">  Picture<span class="text-danger"> *</span></label>
                <input type="file" name="s_image" placeholder="" required class="form-control form-">
              </div>

          </div>
        </div>
      </div>
    </div>
</div>
  <div class="row justify-content-center">
    <div class="col-xl-5 col-md-12">
      <div class="card">
        <div class="card-header"><h3><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-stickies-fill" viewBox="0 0 16 16">
  <path d="M0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5A1.5 1.5 0 0 0 0 1.5z"/>
  <path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zm6 8.5a1 1 0 0 1 1-1h4.396a.25.25 0 0 1 .177.427l-5.146 5.146a.25.25 0 0 1-.427-.177V10.5z"/>
</svg> Organizer</h3></div>
        <div class="card-content">
     <div class="card-body cleartfix">
             
           <input type="number" name="o_position" placeholder='position' required class="form-control" value="Organizer" hidden>
              <div class="form-group">
                <label for="username">Full name <span class="text-danger"> *</span></label>
                <input type="text" name="o_name" placeholder="Enter Name" required class="form-control">
              </div>
               <div class="form-group">
                <label for="username">Sex<span class="text-danger"> *</span></label>
                <select class="form-control form-select" name="o_gender">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
              </div>
               <div class="form-group">
                <label for="username">Phone<span class="text-danger"> *</span></label>
                <input type="number" name="o_phone" placeholder="Enter Phone number" required class="form-control">
              </div>
               <div class="form-group">
                <label for="username">  Email(Optional)</label>
                <input type="email" name="o_email" placeholder="Enter Email" required class="form-control">
              </div>
              <div class="form-group">
                <label for="username">  Voter ID<span class="text-danger"> *</span></label>
                <input type="text" name="o_voter_id" placeholder="Enter voters id" required class="form-control">
              </div>
               <div class="form-group">
                <label for="username">  Picture<span class="text-danger"> *</span></label>
                <input type="file" name="o_image" placeholder="" required class="form-control form-">
              </div>

          </div>
        </div>
      </div>
    </div>
  
    <div class="col-xl-5 col-md-12">
      <div class="card">
        <div class="card-header"><h3><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
  <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
  <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
</svg> Women Organizer</h3></div>
        <div class="card-content">
         <div class="card-body cleartfix">
             
           <input type="number" name="w_position" placeholder='position' required class="form-control" value="women Organizer" hidden>
              <div class="form-group">
                <label for="username">Full name <span class="text-danger"> *</span></label>
                <input type="text" name="w_name" placeholder="Enter Name" required class="form-control">
              </div>
               <div class="form-group">
                <label for="username">Sex<span class="text-danger"> *</span></label>
                <select class="form-control form-select" name="w_gender">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
              </div>
               <div class="form-group">
                <label for="username">Phone<span class="text-danger"> *</span></label>
                <input type="number" name="w_phone" placeholder="Enter Phone number" required class="form-control">
              </div>
               <div class="form-group">
                <label for="username">  Email(Optional)</label>
                <input type="email" name="w_email" placeholder="Enter Email" required class="form-control">
              </div>
              <div class="form-group">
                <label for="username">  Voter ID<span class="text-danger"> *</span></label>
                <input type="text" name="w_voter_id" placeholder="Enter voters id" required class="form-control">
              </div>
               <div class="form-group">
                <label for="username">  Picture<span class="text-danger"> *</span></label>
                <input type="file" name="w_image" placeholder="" required class="form-control form-">
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="row justify-content-center">
    <div class="col-xl-5 col-md-12">
      <div class="card">
        <div class="card-header"><h3><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-union" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2z"/>
</svg> Youth Organizer</h3></div>
        <div class="card-content">
     <div class="card-body cleartfix">
             
           <input type="number" name="y_position" placeholder='position' required class="form-control" value="Youth Organizer" hidden>
              <div class="form-group">
                <label for="username">Full name <span class="text-danger"> *</span></label>
                <input type="text" name="y_name" placeholder="Enter Name" required class="form-control">
              </div>
               <div class="form-group">
                <label for="username">Sex<span class="text-danger"> *</span></label>
                <select class="form-control form-select" name="y_gender">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
              </div>
               <div class="form-group">
                <label for="username">Phone<span class="text-danger"> *</span></label>
                <input type="number" name="y_phone" placeholder="Enter Phone number" required class="form-control">
              </div>
               <div class="form-group">
                <label for="username">  Email(Optional)</label>
                <input type="email" name="y_email" placeholder="Enter Email" required class="form-control">
              </div>
              <div class="form-group">
                <label for="username">  Voter ID<span class="text-danger"> *</span></label>
                <input type="text" name="y_voter_id" placeholder="Enter voters id" required class="form-control">
              </div>
               <div class="form-group">
                <label for="username">  Picture<span class="text-danger"> *</span></label>
                <input type="file" name="y_image" placeholder="" required class="form-control form-">
              </div>

          </div>
        </div>
      </div>
    </div>
  

  </div>
  <div class="row col-md-12 justify-content-center">
  <div class=" col-md-2">
  <a class="btn subscribe  btn-block rounded-pill shadow-sm btn-outline-danger" href="{{route('home')}}"> Cancle </a>
</div>
 <div class="col-md-2">
  <button type="submit" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Confirm  </button>
</div>
</div>
</form>
</section>
</div>