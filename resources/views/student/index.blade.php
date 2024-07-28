<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>後台_學生主頁</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="/assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
	
  <!-- Template CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA -->
<style>
.photo-gallery {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.photo-gallery img {
  width: 100%;
  height: auto;
  flex-basis: calc(100% / 2 - 10px); /* 2 columns by default */
  box-sizing: border-box;
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  .photo-gallery img {
    flex-basis: calc(100% / 3 - 10px); /* 3 columns */
  }
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
  .photo-gallery img {
    flex-basis: calc(100% / 4 - 10px); /* 4 columns */
  }
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
  .photo-gallery img {
    flex-basis: calc(100% / 5 - 10px); /* 5 columns */
  }
}
</style>

    </head>

<body>
@extends('layouts.app')

@section('content')
 <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>

        </form>
 
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"> {{ $studentName }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              
              <a href="{{ route('student.profile') }}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> 個人資料
              </a>
  
              <div class="dropdown-divider"></div>
              <form method="post" action="{{ route('logout') }}">
                @csrf
              <!-- <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> 登出 -->
               
                <button type="submit" class=" dropdown-item  btn btn-danger">登出</button>
      
              </form>
            </div>
          </li>
        
      </nav>
  <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('student.index') }}">主頁</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('student.index') }}">主頁</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">購買課程</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>購買課程</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('class.index') }}">去購買課程</a></li>
                <li><a class="nav-link" href="{{ route('cart.show') }}">查看購物車</a></li>
              </ul>
            </li>
            <li class="menu-header">課程</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th-large"></i> <span>課程</span></a>
              <ul class="dropdown-menu">
				      <li><a class="nav-link" href="{{ route('watch.courses') }}">課程總攬</a></li>
      
              </ul>
            </li>
           


                   
            <li class="menu-header">學員</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>個人檔案</span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('student.profile') }}">個人資料</a></li> 
                <!-- <a href="{{ route('student.profile') }}" class="btn btn-warning">個人檔案</a><br> -->
            
              </ul>
            </li>
                
          </ul>

       </aside>
      </div>
      

		 
		<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>歡迎來到莊小寬數學</h1>

          </div>

          <div class="section-body">
            <h2 class="section-title"></h2>


<<<<<<< HEAD
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>購課流程及觀看方法教學</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                    <div class="photo-gallery">
                    <img src="assets/img/avatar/1.png" alt="Photo 1">
                  <img src="assets/img/avatar/2.png" alt="Photo 2">
                  <img src="assets/img/avatar/3.png" alt="Photo 3">
                  <img src="assets/img/avatar/4.png" alt="Photo 4">
                  <img src="assets/img/avatar/5.png" alt="Photo 5">
                  <img src="assets/img/avatar/6.png" alt="Photo 6">
                  <img src="assets/img/avatar/7.png" alt="Photo 7">
                  <img src="assets/img/avatar/8.png" alt="Photo 8">
                  </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>
      </div>
=======

    <a href="{{ route('class.index') }}" class="btn btn-primary">去購買課程</a><br>


    <a href="{{ route('cart.show') }}" class="btn btn-info">查看購物車</a><br>
>>>>>>> 0d9ae4934db44b1386542bfdd8de1ff952718947

    </div>
  </div>
  @endsection
  <!-- General JS Scripts -->
  <script src="/assets/modules/jquery.min.js"></script>
  <script src="/assets/modules/popper.js"></script>
  <script src="/assets/modules/tooltip.js"></script>
  <script src="/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="/assets/modules/moment.min.js"></script>
  <script src="/assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="/assets/modules/summernote/summernote-bs4.js"></script>

<<<<<<< HEAD
  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="/assets/js/scripts.js"></script>
  <script src="/assets/js/custom.js"></script>
</body>
</html>
=======
    <a href="{{ route('student.profile') }}" class="btn btn-warning">個人檔案</a><br>

    <!-- Logout button -->
    <form method="post" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">登出</button>
    </form>
@endsection
>>>>>>> 0d9ae4934db44b1386542bfdd8de1ff952718947
