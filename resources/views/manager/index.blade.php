<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>後台_課程管理</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
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

	  <!-- 課程管理 -->
      <div class="">
        <section class="section">
          <div class="section-header">
            <h1>首頁-快速連結</h1>
           
          </div>
          <div class="section-body">


            <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">

            <ul>

              課程
              <li><a href="{{ route('uploadCourseView') }}">新增課程</a></li>  
              <li><a href="{{ route('coursesView') }}">課程管理</a></li>    

              學生
              <li><a href="{{ route('showStudents') }}">學生管理</a></li>
              <li><a href="{{ route('studentPurchaseFormView') }}">確認繳費後開課</a></li>
              <li><a href="{{ route('registerStudentView') }}">手動註冊學生</a></li>

              老師
              <li><a href="{{ route('manager.createTeacherView') }}">新增老師</a></li>
              <li><a href="{{ route('manager.editTeacherView') }}">老師管理</a></li>
              
              
              管理員
              <li><a href="{{ route('editManagerView') }}">管理員個人資料</a></li><ul>



    <ul>
      
    <li><a href="{{ route('manager.editTeacherView') }}">編輯老師名單</a></li>
        <li><a href="{{ route('editManagerView') }}">管理員編輯</a></li>
        <li><a href="{{ route('registerStudentView') }}">學生註冊</a></li>
        <li><a href="{{ route('coursesView') }}">編輯課程</a></li>
        <li><a href="{{ route('uploadCourseView') }}">上傳課程</a></li>
        <li><a href="{{ route('studentPurchaseFormView') }}">學生購課</a></li>
        <li><a href="{{ route('editEmailContentView') }}">編輯寄信內容</a></li>
        <li><a href="{{ route('showStudents') }}">顯示學生列表</a></li>
    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>
      </div>
	  <!-- 課程管理結束 -->
        </section>
      </div>
     
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <script src="assets/modules/jquery.sparkline.min.js"></script>
  <script src="assets/modules/chart.min.js"></script>
  
  <script src="assets/modules/summernote/summernote-bs4.js"></script>
  <script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  


  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>
