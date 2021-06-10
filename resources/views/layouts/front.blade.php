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
  <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
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
          <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2 w-100">

            <!-- Links -->
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              
              <!-- Right -->
              @include('partials.navbar_top')
            </div>
            <!-- Links -->
          </nav>
          <!-- Navbar -->
        </div>
      </div>
      @include('partials.middle_navbar')
    </div>
  </section>

  <main class="main">
      @yield('content')
  </main>

</body>

</html>
