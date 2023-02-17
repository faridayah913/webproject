<?php echo e(View:: make('title')); ?>

<?php echo e(View:: make('menu')); ?>


<link href="css/navbars.css" rel="stylesheet">
    <link href="css/heroes.css" rel="stylesheet">

    <div class="album py-5 bg-light">
            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 g-1">
                <div class="col">
                  <div class="card shadow-sm border-0">
                    <img src="images/sunwaylagoon.jpg" width="100%" height="454" class="rounded-start" alt="sunwaylagoon"/>
                  </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm border-0">
                        <img src="images/sunwaylagoon2.jpg" width="100%" height="225" class="rounded-end mb-1" alt="sunwaylagoon"/>
                        <img src="images/sunwaylagoon3.jpg" width="100%" height="225" class="rounded-end" alt="sunwaylagoon"/>      
                    </div>
                  </div>
                </div>
                <br><br><br><br>
                <div class="row g-5">
                    <div class="col-md-5 col-lg-4 order-md-last">
                      <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your cart</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                      </h4>
                      <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                          <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                          </div>
                          <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                          <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-muted">Brief description</small>
                          </div>
                          <span class="text-muted">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                          <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-muted">Brief description</small>
                          </div>
                          <span class="text-muted">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                          <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                          </div>
                          <span class="text-success">−$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                          <span>Total (USD)</span>
                          <strong>$20</strong>
                        </li>
                      </ul>
              
                      <form class="card p-2 mb-4">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Promo code">
                          <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                      </form>

                      <div class="g-3">
                        <a href="/cart"><button" class="btn btn-outline-warning">Add to cart</button></a>
                        <a href="/insertinfo"><button type="button" class="btn btn-warning">Book now</button></a>
                      </div>
                    </div>
                    <div class="col-md-7 col-lg-8 ">
                        <div class="row row-cols-1  g-3">
                            <div class="col">
                              <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                                <div class="card-body">
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                                <div class="card-body">
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                  </div>


</div>
            </div><?php /**PATH C:\xampp\htdocs\finalproject\resources\views//select.blade.php ENDPATH**/ ?>