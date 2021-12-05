<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/rSlider.min.css">
    <title>Metrimonial Website</title>
  </head>
  <body>
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">Cupid Knot</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('/do-login')}}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 my-10">
                <div class="card">
                  <h1 class="text-center">Registration</h1>
                    <form class="p-20" action="{{url('/register_user')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @if(session('message'))
               <p class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session('message')}}
               </button>
               </p>
               @endif
                        <div class="mb-3">
                          <label  class="form-label">First Name</label>
                          <input type="text" class="form-control"  name="name" spellcheck="true">
                          @error('name')
                                  <span class="error">
                                 {{$message}}
                                 </span>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label  class="form-label">Email</label>
                          <input type="email" class="form-control"  name="email">
                          @error('email')
                                  <span class="error">
                                 {{$message}}
                                 </span>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control" name="password">
                          @error('password')
                                  <span class="error">
                                 {{$message}}
                                 </span>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label  class="form-label">Date Of birth</label>
                          <input type="date" class="form-control" name="date_of_birth">
                          @error('d_o_b')
                                  <span class="error">
                                 {{$message}}
                                 </span>
                          @enderror
                        </div>
                        <div class="mb-3 form-check">
                          <p>Gender</p>
                          <input class="form-check-input" type="radio" name="gender" value="male" >
                          <label class="form-check-label" >
                           Male
                          </label>
                        </div>
                        <div class="mb-3 form-check">
                          <input class="form-check-input" type="radio" name="gender" value="male" >
                          <label class="form-check-label">
                           Female
                          </label>
                        </div>
                        <div class="mb-3 form-check">
                          <input class="form-check-input" type="radio" name="gender" value="other" >
                          <label class="form-check-label">
                           Other
                          </label>
                        </div>
                        @error('gender')
                                  <span class="error">
                                 {{$message}}
                                 </span>
                          @enderror
                        <select name="occupation" class="form-select mb-3" aria-label="Default select example">
                          <option selected disabled>--Select Occupation--</option>
                          <option value="private job">Private job</option>
                          <option value="govt job">Government job</option>
                          <option value="business">Business</option>
                          <option value="other">Other</option>
                        </select>
                        @error('occupation')
                                  <span class="error">
                                 {{$message}}
                                 </span>
                          @enderror
                        <select name="family_type" class="form-select mb-3" aria-label="Default select example">
                          <option selected disabled>--Select Family Type--</option>
                          <option value="joint family">Joint Family</option>
                          <option value="nuclear family">Nuclear Family</option>
                          <option value="other">Other</option>
                        </select>
                        @error('family_type')
                                  <span class="error">
                                 {{$message}}
                                 </span>
                        @enderror
                        <select name="manglik" class="form-select mb-3" aria-label="Default select example" multiple>
                          <option selected disabled>--Select Manglik--</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select> 
                        @error('manglik')
                                  <span class="error">
                                 {{$message}}
                                 </span>
                        @enderror
                        <div class="slider-container">
                          <input type="text" id="slider2" class="slider" name="salary" />
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-block col-sm-12">Register</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/rSlider.min.js"></script>
    <script src="js/navbar.js"></script>
    <script>
      (function () {
          'use strict';

          var init = function () {                

              var slider2 = new rSlider({
                  target: '#slider2',
                  values: [10000, 20000, 30000, 40000, 50000, 600000],
                  range: false,
                  set: [20000],
                  tooltip: false,
                  onChange: function (vals) {
                      console.log(vals);
                  }
              });
          };
          window.onload = init;
      })();
  </script>
  </body>
</html>