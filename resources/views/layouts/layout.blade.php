<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tokopedia Clone</title>
@include('partials.styles')
  </head>
  <body>
    <!-- Navbar -->
@include('partials.navbar')
    <!-- End Navbar -->

@yield('content')

@include('partials.footer')
  <!-- End Footer -->
</body>
@include('partials.scripts')
</html>