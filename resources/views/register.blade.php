@extends('header')
@section('login')
{{View:: make('title')}}
<link rel="stylesheet" href="css/custom.css" >
<link rel="stylesheet" href="css/heroes.css" >    

    <main>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start"></div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action="/register" method="post" class="p-4 p-md-5 border rounded-3 bg-light">@csrf
        <div class="container mb-4 px-0 text-center">
            <div class="row gx-1">
              <div class="col">
               <div class="pb-2 pt-0 border-bottom border-warning border-3 shadow" data-mdb-ripple-color="light">
                <button type="button" class="btn btn-outline-light text-muted"><strong>Sign up</strong></button></a></div>
              </div>
                          
              <div class="vr vr-blurry" style="height: 50px;"></div>
              
              <div class="col">
                <div class="pb-2 pt-0"><button class="btn btn-outline-light text-dark" onclick="window.location='/login'"><strong>Log in</strong></button></a></div>
               </div>
            </div>
          </div>
        <div class="form-floating mb-3"> 
            <input type="text" class="form-control" id="floatingInput" placeholder="Full name" name="fullname" required>
            <label for="floatingInput">Fullname</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="email address" name="email" required>
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="password" name="password" required>
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
            <label for="floatingPassword">Verifying Password</label>
          </div>
          <div class="radio mb-3">
          <label for="radio"><strong>Gender</strong></label>&nbsp;
              <input type="radio" name="gender" id="gender_female" value="Female" required>&nbsp;Female
              <input type="radio" name="gender" id="gender_male" value="Male" required>&nbsp;Male
          </div>
          <div class="date mb-3">
          <label for="date"><strong>Date of birth</strong></label>&nbsp;
          <input class="date border rounded" type="date" id="birthday" name="birthday"> 
          </div>

          <div class="form-floating">
          <button class="w-100 btn btn-lg btn-warning" type="submit">Register</button>
          <br/><br/>
          </div>

          <div >
          <small class="text-muted" >Already has an account?</small>
          <strong class="text-warning" onclick="window.location='/login'">Login</strong>
          </div>
          
          
          
          
        </form>
      </div>
    </div>
  </div>
</main>

<script src="js/bootstrap.bundle.min.js"></script>

{{View:: make('footer')}}
@endsection


