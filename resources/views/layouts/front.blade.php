<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Motorcycle Shop</title>

  <!-- FAVICON -->
  <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap-slider.css') }}">
  <!-- Font Awesome -->
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

</head>

<body class="body-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-md navbar-light">

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav11"
              aria-controls="basicExampleNav11" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="basicExampleNav11">

              <!-- Right -->
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="#!" class="nav-link waves-effect">
                    Shop
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#!" class="nav-link waves-effect">
                    Contact
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#!" class="nav-link waves-effect">
                    Sign in
                  </a>
                </li>
                <li class="nav-item pl-2 mb-2 mb-md-0">
                  <a href="#!" type="button"
                    class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">Sign up</a>
                </li>
              </ul>

            </div>
            <!-- Links -->

          </nav>
          <!-- Navbar -->
        </div>
      </div>
    </div>
  </section>

@yield('content')


</body>

</html>
