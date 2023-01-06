@extends('temp.layout')
@section('title')
Contact
@endsection
@section('content')

      <!-- contact -->
      {{-- <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     
                  </div>
               </div>
            </div>
         </div> --}}
         
         <div class="container-fluid">
            <div class="row">
               <div class="about_box">

               <h2 class="mx-auto alert alert success bg-warning  fs-1"><center>Contact Us</center></h2>
               
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mx-auto">
                  <form action="{{ route('/contact') }}" method="post">
               <center>
                     @CSRF
                     <div class="row align-items-stretch mb-5 mx-auto">
                     </div>                         
                      <!-- pass vaildations messages -->
                        {{-- @if($errors->any())
                       <div class="alert alert-danger">
                        <ul>
                         @foreach($errors->all() as $error)
                         <li>{{ $error }}</li>
                         @endforeach
                       </ul>
                       </div>
                      @endif 
                   --}}
                    
                    

                     <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-10 mx-auto">
                           <input type="text" class="form-control" placeholder="Name"  name="Name">
                           <div class="text-danger">@error('Name') {{ $message }} @enderror</div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-10 mx-auto">
                           <input class="form-control" placeholder="Email" type="text" name="Email">
                          <div class=" text-danger">@error('Email') {{ $message }}
                           @enderror</div> 
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mx-auto">
                           <input class="form-control" placeholder="Phone" type="number" name="Phone">
                            <div class=" text-danger">@error('Phone') {{ $message }} @enderror</div> 
                        </div>
                        <div class="co-xl-12 col-lg-12 col-md-12 col-sm-12 mx-auto">
                           <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                             <div class=" text-danger">@error('Message') {{ $message }} @enderror</div>
                        </div>
                        {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <input type="submit" name="send" value="add"> --}}
                           @if (session('Insert'))
                        <h1 class="alert alert success bg-warning fs-1">{{ session('Insert')}}</h1>
                   @endif
                           <div class="text-center col-xl-12 col-lg-12 col-md-12 col-sm-12 mx-auto"><button class="btn btn-primary btn-xl text-uppercase"  name="send" type="submit">Send Message</button></div>
      
                        </div>
                     </div>
                  </center>
                  </form>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padddd">
                  <div class="map_section">
                     <div id="map">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end contact  -->
@endsection