<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>後台_授課教師</title>

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
            <img alt="image" src="/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"></div></a>
            <div class="dropdown-menu dropdown-menu-right">
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
            <a href="#">菜單</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">菜單</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">課程</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>課程</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('teacher.index', ['id' => Auth::id()]) }}">課程管理</a></li>
              </ul>
            </li>

          </ul>

       </aside>
      </div>


		<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>課程管理</h1>

          </div>

          <div class="section-body">
            <h2 class="section-title">授課課程</h2>


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
                             課程名稱
                            </th>
							              <th>詳細內容</th>
                          </tr>
                        </thead>
                        <ul>
                           @foreach ($courses as $course)
                               <tbody>                                
                               <tr>
                                 <td>
                                 <li>
                                   <a href="{{ route('teacher.showStudents', $course->classname) }}">{{ $course->classname }}</a>
                                 </li>
                                 </td>
                                 <td><a href="{{ route('teacher.showStudents', $course->classname) }}" class="btn btn-secondary">查看更多</a></td>
                               </tr>
                               </tbody>
                               @endforeach
                       </ul>
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
  <!-- General JS Scripts -->
  <script src="/assets/modules/jquery.min.js"></script>
  <script src="/assets/modules/popper.js"></script>
  <script src="/assets/modules/tooltip.js"></script>
  <script src="/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="/assets/modules/moment.min.js"></script>
  <script src="/assets/js/stisla.js"></script>
  <!-- JS Libraies -->
  <script src="/assets/modules/datatables/datatables.min.js"></script>
  <script src="/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="/assets/modules/jquery-ui/jquery-ui.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="/assets/js/page/modules-datatables.js"></script>
  <script src="/assets/js/page/modules-sweetalert.js"></script>
  
  <!-- Template JS File -->
  <script src="/assets/js/scripts.js"></script>
  <script src="/assets/js/custom.js"></script>
 
</body>
</html>