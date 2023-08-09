<!DOCTYPE html>
<html>
<head>
  @include('includes.header')

</head>
<body>

  @yield('content')

  @include('includes.footer')
  <script src="{{ asset('../js/index.js') }}"></script>
</body>
</html>
