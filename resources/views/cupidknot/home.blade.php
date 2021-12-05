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
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">Cupid Knot</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/logout')}}">
                  Logout
                   </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
        <div class="row my-5">
            @foreach($data as $list)
                  <div class="col-md-3">
                    <div class="card mb-3" style="max-width: 540px;">
                    <div class="card-body">
                      <h5 class="card-title">Name:  {{$list->name}}</h5>
                      <span class="card-text">Gender:  {{$list->gender}}</span>
                      <br>
                      <span class="card-text">Date of Birth: {{$list->date_of_birth}}</span>
                      <br>
                      <span class="card-text">Occupation:  {{$list->occupation}}</span>
                      <br>
                      <span class="card-text">Family Type:  {{$list->family_type}}</span>
                      <br>
                      <span class="card-text">Manglik:  {{$list->manglik}}</span>
                      <br>
                      <span class="card-text">Manglik:  {{$list->salary}}</span>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/navbar.js"></script>
  </body>
</html>   