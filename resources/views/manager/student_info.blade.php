<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>後台_學生課程信息</title>

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
            <img alt="image" src="/assets/img/avatar/logo-removebg-.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">莊小寬</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              
              <a href="{{ route('editManagerView') }}" class="dropdown-item has-icon">
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
            <a href="{{ route('manager.index') }}">菜單</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('manager.index') }}">菜單</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">課程</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>課程</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('uploadCourseView') }}">新增課程</a></li>
                <li><a class="nav-link" href="{{ route('coursesView') }}">課程管理</a></li>
              </ul>
            </li>
            <li class="menu-header">學生</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th-large"></i> <span>學生總攬</span></a>
              <ul class="dropdown-menu"> 
                <li><a class="nav-link" href="{{ route('showStudents') }}">學生管理</a></li>          
                <li><a href="{{ route('studentPurchaseFormView') }}">確認繳費後開課</a></li>
                <li><a href="{{ route('registerStudentView') }}">手動註冊學生</a></li>
                
      
              </ul>
            </li>
           
            <li class="menu-header">老師</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i> <span>老師</span></a>
              <ul class="dropdown-menu">
              <li><a href="{{ route('manager.createTeacherView') }}">新增老師</a></li>
                <li><a href="{{ route('manager.editTeacherView') }}">老師管理</a></li>
              </ul>
            </li>

                   
            <li class="menu-header">管理員</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>個人檔案</span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('editManagerView') }}">個人資料</a></li> 
            
              </ul>
            </li>
                
          </ul>

       </aside>
      </div>

		<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>學生課程管理</h1>

          </div>

          <div class="section-body">
            <h2 class="section-title">進度查看</h2>

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
                            <th>課程名稱</th>
                            <th>已/未購買</th>
							<th>觀看時間</th>
                            <th>總時長</th>
                            <th>到期時間</th>
							<th>觀看百分比</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($studentData as $course)
                          <tr>
                            <td>
                            {{ $course->classname }}
                            </td>
                            <td>{{ $course->classbuy }}</td>
							<td >
                            {{ $course->watchtime }}
                            </td>
                             <td >
                             {{ $course->videotime }}
                            </td>
							<td>
                            @if ($course->classend)
                            {{ $course->classend }}
                            @else
                            未購買
                            @endif
                            </td>
                            <td>                    
                                   @php
                                   $watchTime = \Carbon\Carbon::createFromFormat('H:i:s', $course->watchtime); 
                                   $videoTime = \Carbon\Carbon::createFromFormat('H:i:s', $course->videotime);

                                   // 轉秒數
                                   $totalWatchSeconds = $watchTime->hour * 3600 + $watchTime->minute * 60 + $watchTime->second;
                                   $totalVideoSeconds = $videoTime->hour * 3600 + $videoTime->minute * 60 + $videoTime->second;

                                  //算百分比
                                  $percentage = ($totalWatchSeconds / $totalVideoSeconds) * 100;
                                  @endphp


                                  {{ round($percentage, 2) }}%
                            </td>
                          </tr>
                          @endforeach
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
  <script src="/assets/modules/datatables/datatables.min.js"></script>
  <script src="/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="/assets/modules/jquery-ui/jquery-ui.min.js"></script>
	<script src="/assets/modules/sweetalert/sweetalert.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="/assets/js/page/modules-datatables.js"></script>
  <script src="/assets/js/page/modules-sweetalert.js"></script>
  
  <!-- Template JS File -->
  <script src="/assets/js/scripts.js"></script>
  <script src="/assets/js/custom.js"></script>
</body>
</html>