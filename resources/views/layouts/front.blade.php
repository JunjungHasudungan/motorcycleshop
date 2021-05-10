<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ trans('panel.site_title')}}</title>

  <!-- FAVICON -->
  <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon">
  <!-- Bootstrap -->
  
  
<link href="/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<!-- Documentation extras -->

<link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">

<link href="/docs/4.0/assets/css/docs.min.css" rel="stylesheet">
  <link href="/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap-slider.css') }}">
  <!-- Font Awesome -->
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{ asset('css/front.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

</head>

<body class="body-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-light">


            <!-- Links -->
            <div class="collapse navbar-collapse" id="basicExampleNav11">

              <!-- Right -->
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="#" class="nav-link waves-effect">
                    Shop
                  </a>
                </li>
                <li class="nav-item drop-down">
                  <a href="#" class="nav-link waves-effect ">
                    {{ trans('global.products') }}
                  </a>
                  <ul>
                    <li><a class="dropdown-item" href="{{route('services')}}">{{ trans('global.services') }}</a></li>
                    <li><a class="dropdown-item" href="{{route('spareparts')}}">{{ trans('global.spareparts') }}</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="{{route('about')}}" class="nav-link waves-effect">
                    {{ trans('global.about') }}
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('login')}}" class="nav-link waves-effect">
                    {{ trans('global.sigin') }}
                  </a>
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
