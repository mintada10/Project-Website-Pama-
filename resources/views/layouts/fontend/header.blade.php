<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.php">ร้านขายของชำป้ามา</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
      
        <li><a class="nav-link scrollto active" href="#hero">หน้าแรก</a></li>
        <li><a class="nav-link scrollto " href="#portfolio">สินค้า</a></li>
        <li><a class="nav-link scrollto" href="#contact">ช่องทางการติดต่อ</a></li>
        <li><a class="nav-link scrollto" href="#team">เกี่ยวกับ</a></li>
      @if (Auth::check())
      <li><a class="getstarted scrollto"href="{{route('home')}}">Account</a></li>
        <li><a class="getstarted scrollto" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">ออกสู่ระบบ</a></li>
      @else
        <li><a class="getstarted scrollto" href="{{route('login')}}">เข้าสู่ระบบ</a></li>
      @endif
      </ul>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->