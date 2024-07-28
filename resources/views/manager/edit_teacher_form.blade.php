<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>後台_更新老師</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/modules/fontawesome/css/all.min.css">

   <!-- CSS Libraries -->
  <link rel="stylesheet" href="/assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="/assets/modules/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="/assets/modules/codemirror/theme/duotone-dark.css">
  <link rel="stylesheet" href="/assets/modules/jquery-selectric/selectric.css">


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
              <a href="components-avatar.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>更新老師</h1>

          </div>

          <div class="section-body">
            <h2 class="section-title">輸入老師資料</h2>
            <p class="section-lead">
             
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>老師內容</h4>
                  </div>
             <form action="{{ route('manager.updateTeacher', $teacher->id) }}" method="post" enctype="multipart/form-data">
              <div class="card-body">
                @csrf
                @method('PUT')
       				<!-- teachername -->
                    <div class="form-group row mb-4">
                      <label  for="name" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">老師姓名</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="name" value="{{ $teacher->name }}" required>
                      </div>
                    </div>

					    <!-- account -->
                    <div class="form-group row mb-4">
                      <label  for="account number" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">帳號</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="account" value="{{ $teacher->account }}" required>
                      </div>
                    </div>

              <!-- introduce -->
                     <div class="form-group row mb-4">
                      <label  for="introduction" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">介紹</label>
                        <textarea class="summernote" name="introduction">{{ $teacher->introduction }}</textarea>
                    </div>

          	  <!-- background -->
                    <div class="form-group row mb-4">
                      <label  for="background"  class="col-form-label text-md-right col-12 col-md-3 col-lg-3">老師背景</label>
                     
				              <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control" name="background" value="{{ $teacher->background }}" required>
					            </div>
                    </div>

        			<!-- Photo -->
                     <div class="form-group row mb-4">
                      <label for="photo" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">圖片</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">選擇檔案</label>
                          <input type="file" name="photo" id="image-upload" />
                        </div>
                      </div>
                    </div>       
                     <!--<label for="photo">照片:</label>
        <input type="file" name="photo"><br>-->

        			<!--entry -->
                    <div class="form-group row mb-4">
                      <label  for="entry"  class="col-form-label text-md-right col-12 col-md-3 col-lg-3">加入時間</label>
				              <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="entry" value="{{ $teacher->entry }}">
					            </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">更新</button>
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
  <script src="/assets/modules/summernote/summernote-bs4.js"></script>
  <script src="/assets/modules/codemirror/lib/codemirror.js"></script>
  <script src="/assets/modules/codemirror/mode/javascript/javascript.js"></script>
  <script src="/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="/assets/js/scripts.js"></script>
  <script src="/assets/js/custom.js"></script>
</body>
</html>