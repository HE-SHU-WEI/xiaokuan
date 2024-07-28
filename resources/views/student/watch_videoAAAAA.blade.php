<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>後台_觀看課程</title>

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
<!-- /END GA 
<script>
        // 页面加载完成后执行
        window.onload = function() {
            // 获取回前页的按钮
            var backButton = document.getElementById('backButton');
            var watchTimeInput = document.getElementById('watchTimeInput');
            var classnameInput = document.getElementById('classnameInput');
            var updateWatchTimeBtn = document.getElementById('updateWatchTimeBtn');

            // 获取视频框架元素
            var videoFrame = document.getElementById('videoFrame');

            // 设置初始观看时间为0
            var watchTime = 0;

            // 每1秒更新观看时间
            setInterval(function() {
                // 如果视频正在播放，则增加观看时间
                if (!videoFrame.paused && !videoFrame.ended) {
                    watchTime++;
                }
            }, 1000);

            // 获取当前课程名称
            var classname = "{{ $classname }}";
            classnameInput.value = classname;

            // 为回前页的按钮添加点击事件监听器
            // 为回前页的按钮添加点击事件监听器
backButton.addEventListener('click', function(event) {
    // 阻止默认行为，即不执行页面重定向
    event.preventDefault();

    // 将观看时间和课程名称发送到后端
    watchTimeInput.value = watchTime;

    // 使用 AJAX 请求发送数据到后端
    fetch("{{ route('update.watchtime') }}", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        body: JSON.stringify({
            watchTime: watchTime,
            classname: classname
        })
    })
    .then(response => {
        // 请求成功后执行页面重定向
        window.location.href = "{{ route('watch.courses') }}";
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

        };
    </script>-->

    <script>
        window.onload = function() {
            var backButton = document.getElementById('backButton');
            var watchTimeInput = document.getElementById('watchTimeInput');
            var classnameInput = document.getElementById('classnameInput');
            var updateWatchTimeBtn = document.getElementById('updateWatchTimeBtn');
            var videoFrame = document.getElementById('videoFrame');
            var watchTime = 0;

            // Increment watch time every second
            setInterval(function() {
                watchTime++;
            }, 1000);

            var classname = "{{ $classname }}";
            classnameInput.value = classname;

            backButton.addEventListener('click', function(event) {
                event.preventDefault();
                watchTimeInput.value = watchTime;

                fetch("{{ route('update.watchtime') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        watchTime: watchTime,
                        classname: classname
                    })
                })
                .then(response => {
                    if (response.ok) {
                        window.location.href = "{{ route('watch.courses') }}";
                    } else {
                        console.error('Error:', response.statusText);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        };
    </script>

    <style>
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
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
            <img alt="image" src="/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"> </div></a>
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
            
              </ul>
            </li>
                
          </ul>

       </aside>
      </div>
		
		<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>觀看課程</h1> 

          </div>
          <a href="javascript:void(0)" id="backButton" class="btn btn-primary">回前頁</a>
          <br><br>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                    <div class="video-container">
                            <iframe   id="videoFrame" width="854" height="480" src="{{ $link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>


<form id="watchTimeForm" action="{{ route('update.watchtime') }}" method="POST" style="display: none;">
    @csrf
    <input type="hidden" name="watchTime" id="watchTimeInput">
    <input type="hidden" name="classname" id="classnameInput">
    <button type="submit" id="updateWatchTimeBtn"></button>
</form>
<br><br><br>
<h1 style="color:#6777f0 ; font-size:24px;">課程講義連結</h1>
    <div>
        {{ $drive }}
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

  <!-- Page Specific JS File -->
  <script src="/assets/js/page/modules-datatables.js"></script>
  
  <!-- Template JS File -->
  <script src="/assets/js/scripts.js"></script>
  <script src="/assets/js/custom.js"></script>
  
</body>
</html>

