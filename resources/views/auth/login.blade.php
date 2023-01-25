<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JobHunter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
        height: 100%;
        }
        }
    </style>
</head>
<body>
    <div class="container">
        <section class="vh-100">
            <div class="container-fluid h-custom">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                  <img src="{{asset('assets/images/job-hunter.svg')}}"
                    class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                  <form method="post" action="/login">
                    @csrf
                    <div class="divider d-flex align-items-center my-4">
                      <p class="text-center"><h2>JobHunter</h2></p>
                    </div>
          
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="form3Example3" class="form-control form-control"
                        placeholder="Enter a valid email address" name="email" />
                    </div>
          
                    <!-- Password input -->
                    <div class="form-outline mb-3">
                      <input type="password" id="form3Example4" class="form-control form-control"
                        placeholder="Enter password" name="password" />
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                      <input type="submit" class="btn btn-primary btn"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Login">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
    </div>
</body>
</html>