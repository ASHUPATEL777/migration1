@extends('temp.layout')
@section('title')
Account
@endsection

@section('content')

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASHITI | Account</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <section class="page-section" id="account">
      <div class="container-fluid">
        <div class="row">
           <div class="about_box">
            <div class="form-group mt-1 d-flex">
           <h4 class="mx-auto alert alert success bg-primary text-white fs-3 m-3" class="form-control"><center>Registration</center></h4>
            </div>
           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mx-auto">
              
      <form action="{{ URL("/account") }}" method="post">
        <center>
      @CSRF
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-10 mx-auto">
            <div class="form-group mt-1 d-flex">
          <i class="fa fa-user icon mt-1"></i>&nbsp;&nbsp;&nbsp;
          <input type="text" placeholder="Username" name="name" class="form-control">
              <div class="text-danger">@error('name') {{ $message }} @enderror</div>
            </div>
          <div class="form-group mt-1 d-flex">
              <i class="fa fa-envelope icon mt-1"></i>&nbsp;&nbsp;&nbsp;
              <input type="number"  placeholder="Phone" name="phone" class="form-control">
              <div class="text-danger">@error('phone') {{ $message }} @enderror</div>
            </div>
            

          <div class="form-grop mt-1 d-flex">
            <i class="fa fa-envelope icon mt-1"></i>&nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="Email" name="email" class="form-control">
            <div class="text-danger">@error('email') {{ $message }} @enderror</div>
          </div>
        
          <div class="form-grop mt-1 d-flex">
            <i class="fa fa-key icon mt-1"></i>&nbsp;&nbsp;&nbsp;
            <input type="password" placeholder="Password" name="passward" class="form-control">
            <div class="text-danger">@error('passward') {{ $message }} @enderror</div>
          </div>
          <div class="form-group mt-1 d-flex">
         <i class="fa fa-envelope icon mt-1"></i>&nbsp;&nbsp;&nbsp;&nbsp;
            <select id="countrys" id="countrys" class="form-select">
              &nbsp;&nbsp;&nbsp; 
              <option value="">-Select Country-</option> 

              @foreach($countrys as $list)
              <option value="{{$list->id}}">{{ $list->countryname }}</option>
             @endforeach
            </select>
          </div>
          <div class="mt-3">
            <select id="state" class="form-select">
              <option value="">Select State</option>  
            </select>
          </div>
          <div class="mt-3">
            <select id="state" class="form-select">
              <option value="">--Select City--</option>  
            </select>
          </div>
            
            
{{--             
            <div class="form-group mt-1 d-flex">
              <i class="fa fa-envelope icon mt-1"></i>&nbsp;&nbsp;&nbsp;
              <input type="text" placeholder="City" name="city" class="form-control">
              <div class="text-danger">@error('city') {{ $message }} @enderror</div>
            </div>
             --}}
            <div class="form-group mt-1 d-flex">
              <i class="fa fa-envelope icon mt-1"></i>&nbsp;&nbsp;&nbsp;
              <textarea type="text" placeholder="Message" name="message" class="form-control"></textarea>
              <div class="text-danger">@error('message') {{ $message }} @enderror</div>
            </div>
          
          <div class="form-group mt-1 d-flax"><button class="btn btn-primary btn-xl text-uppercase"  name="send" type="submit">Register</button></div>    
        </center>
        
      </form>
           </div>
           </div>
        </div>
      </div>
      </section>
  </body>
  </html>

<script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
  {{-- <script>
$(document).ready(function(){
  let cid=$(this).val();
  $.ajax({
    url:"/getdata",
    type:"POST",
    data:'cid'+cid+'&_token={{csrf_token()}}',
    success:function(data){
      $('#state').html(data);

    }
  });
});


  </script> --}}

  <script>
JQuery(document.ready(function()){
     JQuery('#country').change(function(){
      let cid=JQuery(this).val();
      JQuery.ajax({
        url:'/getdata',
        type:'post',
        data:'cid'+cid+'&_token={{csrf_token()}}',
        success:function(result){
        JQuery('#state').html(result)
        }
      });
     });
})
  </script>
  @endsection