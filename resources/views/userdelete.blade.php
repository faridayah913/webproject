{{View:: make('title')}}
{{View:: make('menu')}}

<link href="css/navbars.css" rel="stylesheet">
    <link href="css/heroes.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">

    <script src="js/bootstrap.bundle.min.js"></script>

    <div class="container bg-light mx-auto">
            <ul class="breadcrumb">
                <li><a href="user.html">Home</a></li>
                <li>Settings</li>
              </ul>
        </div>
       
        <div id="mySidenav" class="sidenav">
            <a class="nav-link active link-dark" href="#" id="setting">Settings</a>
            <a class="nav-link" href="cart.html" id="cart">Carts</a>
            <a class="nav-link" href="booking.html" id="booking">Bookings</a>
            <a class="nav-link" href="billing.html" id="billing">Billing</a>
            <a class="nav-link" href="review.html" id="review">Reviews</a>            
        </div>
        <form action = "userdelete?rid={{ $users->id}}" method="post">
    @csrf
        <div id="overlay" onclick="off()">
        <div id="text" class=" p-4 p-md-5 w-50% border rounded-5 bg-light text-dark position-fixed top-50 start-50 translate-middle shadow" >

            
            <h5 style="text-align: center;">Are you sure you want to delete your account?</h5><br/>

          <div class="modal-footer flex-column border-top-0 ">
            
            <button type="submit" class="btn btn-lg btn-warning w-100 mx-0 mb-2">Delete</button>
            <button class="btn btn-lg btn-outline-warning w-100 mx-0 mb-2" type="button" onclick="window.location='/userview?rid={{$users->id}}'">Cancel</button>
          </div>
          </div>
      </div>

       <div class="container my-5">
       @if(!empty($users))
         <div class="px-4 py-5 my-5  border rounded-3 shadow-lg">
          <img class="d-block mx-auto mb-4" src="images/profile.png" alt="" width="100" height="100">
              <h3 class="fw-bold text-center">{{$users->name}}</h3>
          <div class="row flex-lg-row  g-5 py-5">
          <div class="col-lg-6 px-5">
            <div class="col-sm-6">
              <label for="fullname" class="fw-bold">Full Name</label>
              <div>{{$users->name}}</div>
            </div><br>

            

            <div class="col-12">
              <label for="email" class="form-label fw-bold">Email</label>
              <div>{{$users->email}}</div>
             
            </div><br>
            
            </div>
            <div class="col-10 col-sm-8 col-lg-6 me-0">
              <div class="col-6">
                <label for="gender" class="fw-bold">Gender</label>            
                <div>{{$users->gender}}</div>
                </div><br>
               
              <div class="col-6">
                <label for="birthday" class="fw-bold">Date of Birth</label>
                <div>{{$users->birthday= date('d M Y',strtotime($users->birthday))}}</div>
              </div><br>
  
              
              </div>
            </div>
            <div class="d-flex justify-content-end align-items-end">

            <button class="btn btn-warning rounded-4" type="button" onclick="window.location='/useredit?rid={{$users->id}}'">Edit</button>&emsp;
      <button class="btn btn-outline-warning rounded-4" type="button" onclick="window.location='/userlist'">Cancel</button>
      </div>
          </div>
          
          </div>
</form>
          @else
no record found
@endif



{{View::make('footer')}}