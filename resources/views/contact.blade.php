{{View:: make('title')}}
{{View:: make('menu')}}

<link href="css/navbars.css" rel="stylesheet">
<link href="css/heroes.css" rel="stylesheet">


<div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
              <div class="col-lg-7 text-center text-lg-start">
                <img class="d-block mx-auto mb-4" src="images/logo.png" alt="" width="300" height="300">
              </div>
              <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-light">
                    <p>If you have any inquiries, please do submit to us</p>
                  <div class="form-floating mb-3">
                        <input type="fullname" class="form-control" id="name" placeholder="Fullname">
                        <label for="name">Full Name</label>
                      </div>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                  </div>
                  <div class="input-group">
                    <span class="input-group-text">Inquiries</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                  </div><br/>
                  
                  <button class="w-100 btn btn-lg btn-warning" type="submit">Submit</button>
                
                </form>
              </div>
            </div>
          </div>