<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Metrimonial Website</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">Cupid Knot</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('/')}}">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 my-3">
                <div class="card">
                  <h1 class="text-center">Login</h1>
                    <form class="p-20" action="{{url('/login-user')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @if(session('message'))
               <p class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session('message')}}
               </button>
               </p>
               @endif
                        
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
                        <br>
                        <button type="submit" class="btn btn-primary btn-block col-sm-12">Login</button>
                        <br>
                        <a href="{{ url('auth/google') }}" class="btn btn-dark my-3 btn-user btn-block col-sm-12">
                          Login with Google
                         </a>
                      </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>