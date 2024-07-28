<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>後端_手動新增學生課程</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

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
            <div class="section-header-back">
              <a href="layout-transparent.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>通過學生課程</h1>

          </div>

          <div class="section-body">
            <h2 class="section-title">輸入資料</h2>
            <p class="section-lead">
             
            </p>
			  
            
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>課程與學生內容</h4>
                  </div>
					
				@if(session('success'))	
				<div class="alert alert-success">
                    {{ session('success') }}
                </div>
				@endif
					
				<form method="post" action="{{ route('storeStudentPurchase') }}">
                      @csrf
                  <div class="card-body">
					  
					   <!-- STname -->
                    <div class="form-group row mb-4">
                      <label  for="classname" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
						                 課程名稱</label>
                           
                      <div class="col-sm-12 col-md-7">
                           <select name="classname" class="form-control">
                           @foreach($classes as $class)
                           <option value="{{ $class }}">{{ $class }}
                           </option>
                           @endforeach   
                           </select>
                      </div>
                    </div>
					  
					   <!-- account -->
                    <div class="form-group row mb-4">
                      <label for="student_account" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">學生學號:</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="student_account" placeholder="請輸入學號" >
                      </div>
                    </div>
					  <!-- name -->
					<div class="form-group row mb-4">
                      <label  for="student_name" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
						  學生名字:</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="student_name" placeholder="請輸入名字">
                      </div>
                    </div>
					  
					  <!-- class_expire_date -->
                    <div class="form-group row mb-4">
                      <label  for="class_expire_date"  class="col-form-label text-md-right col-12 col-md-3 col-lg-3">課程到期日:</label>
				      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="class_expire_date" >
					  </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">新增</button>
                      </div>
                    </div>
                  </div>
			    </form>
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

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="/assets/js/scripts.js"></script>
  <script src="/assets/js/custom.js"></script>
</body>
</html>