<!DOCTYPE html>
<html lang="en">

<head>
  @include('home_partials.header')
</head>

<body class="">
  <div class="wrapper ">
  @include('home_partials.nav')
    
    <div class="main-panel">
      <!-- Navbar -->
      @include('home_partials.headnav')
      <!-- End Navbar -->
      
      <div class="content">
        @yield('content')
      </div>
      
    @include('home_partials.upfooter')
      
    </div>
  </div>
  <!--   Core JS Files   -->
  @include('home_partials.script')
</body>

</html>