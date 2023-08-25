<!DOCTYPE html>
<html>
<head>
  @include('includes.header')

</head>
<body>
    <nav class="navbar is-sea has-shadow">
        <!-- logo / brand -->
        <div class="navbar-brand text-bold">
            <div class="ml-2">
                <span class="is-size-2 is-italic" style="line-height: 1.2;font-weight: bold"> Midcoast Provisions </span>
            </div>

            <a class="navbar-burger" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>

        <div class="navbar-menu is-danger" id="nav-links">
            <!-- right links -->
            <div class="navbar-end">
                <a class="navbar-item has-text-weight-bold">Home</a>
                <a class="navbar-item has-text-weight-bold">About Us</a>
                <a class="navbar-item has-text-weight-bold">Offerings</a>
                <a class="navbar-item has-text-weight-bold">Contact</a>
            </div>
        </div>
    </nav>

  @yield('content')

  @include('includes.footer')
  <script src="{{ asset('../js/index.js') }}"></script>
</body>
</html>
