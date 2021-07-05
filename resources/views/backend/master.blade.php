<!DOCTYPE html>
<html>

@include('backend.include.head')

<body class="theme-red">
  <!-- Page Loader -->
  <div class="page-loader-wrapper">
    <div class="loader">
      <div class="preloader">
        <div class="spinner-layer pl-red">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
      <p>Please wait...</p>
    </div>
  </div>
  <!-- #END# Page Loader -->
  <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- #END# Overlay For Sidebars -->
  @guest

  @else

  <!-- Top Bar -->
  @include('backend.include.top_bar')
  <!-- #Top Bar -->
  <section>
    <!-- Left Sidebar -->
    @include('backend.include.left_sidebar')
    <!-- #END# Left Sidebar -->
  </section>
  @endguest
  @yield('content')
  @include('backend.include.js')

</body>

</html>
