<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style/style.css" />


  </head>
  <body style="background-color: #F0EBE3;">

    <div class="container d-flex flex-row justify-content-center pt-5 pb-5">
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-4 align-content-center">
                        <img src="img/latahzanEdu.jpg" class="img-fluid rounded-start">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Login</h5>
                          <hr>
                          {{-- form Input --}}
                          <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail">
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword">
                                </div>
                            </div>
                          </div>
                          {{-- Akhir Form Input --}}
                          <button class="btn btn-primary"><a href="/account" style="text-decoration: none; color: white;">Login</a></button>
                          <p class="mt-2">Do you not have an account yet? <a href="/register">Register</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>