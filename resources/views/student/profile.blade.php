<!-- resources/views/student/profile.blade.php -->
<<<<<<< HEAD
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
<!-- /END GA --></head>

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
            <div class="d-sm-none d-lg-inline-block">我的帳戶</div></a>
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
            <h1>學生資料</h1>

          </div>

          <div class="section-body">
            <h2 class="section-title"></h2>


            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>詳細資料</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              學號
                            </th>
                            <th>學員姓名</th>
                            <th>電子郵件</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                          <tr>
                            <td>
                            {{ $student->account }}
                            </td>
                            <td>{{ $student->name }}</td>
                             <td >
                             {{ $student->gmail }}
                            </td>

                          </tr>


                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>
      </div>

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

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="/assets/js/scripts.js"></script>
  <script src="/assets/js/custom.js"></script>
</body>
</html>

=======

@extends('layouts.app')

@section('content')
    <h2>學生個人檔案</h2>

    <p><strong>帳號:</strong> {{ $student->account }}</p>
    <p><strong>密碼:</strong> {{ $student->password }}</p>
    <p><strong>姓名:</strong> {{ $student->name }}</p>
    <p><strong>學校:</strong> {{ $student->school }}</p>
    <p><strong>年級:</strong> {{ $student->grade }}</p>
    <p><strong>電子郵件:</strong> {{ $student->gmail }}</p>
    <p><strong>地址1:</strong> {{ $student->stuaddress1 }}</p>
    <p><strong>地址2:</strong> {{ $student->stuaddress2 }}</p>
    <p><strong>家長姓名:</strong> {{ $student->parname }}</p>
    <p><strong>家長電話:</strong> {{ $student->parnumber }}</p>
    <p><strong>了解途徑:</strong> {{ $student->Howtoknow }}</p>
@endsection
>>>>>>> 0d9ae4934db44b1386542bfdd8de1ff952718947
