<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- our project just needs Font Awesome Solid + Brands -->
      <link rel="stylesheet" href="{{ asset('assets/frameworks/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/frameworks/fontawesome-free-6.6.0-web/css/all.css') }}" />
    <title>@yield('title_page')</title>
</head>
<body>
    <div class="container px-4">
        <div class="row gx-5">
            @include('layout.header')
        </div>
        <div class="row gx-5 p-2">
            @yield('content', '<>content<>')
          <div class="col">
           {{-- <div class="p-3">Custom column padding</div> --}}
          </div>
        </div>
      </div>
    <script src="{{ asset('assets/frameworks/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>