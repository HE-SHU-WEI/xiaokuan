<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>莊小寬數學_{{ $class->classname }}</title>

    <!-- Favicon  -->
    <link rel="icon" href="photos/logo-removebg-.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/css/CAP-1.css">


</head>

<body>
@extends('layouts.app')
@section('content')


    <!-- ***** Main Menu Area Start ***** -->
    <div class="mainMenu d-flex align-items-center justify-content-between">
        <!-- Close Icon -->
        <div class="closeIcon">
            <i class="ti-close" aria-hidden="true"></i>
        </div>
     <!-- Logo Area  -->
     <div class="logo-area">
			<a href="{{route('index')}}">
            <img src="/photos/logonav.png" alt="莊小寬數學">
			</a>
         </div>
               <!-- Nav -->
        <div class="sonarNav wow fadeInUp" data-wow-delay="0.1s">
            <nav>
                <ul>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('index')}}">首頁</a>
						
                    </li>
                    
					<li class="nav-item">
                        <botton class="nav-link" id="toggleMenu">關於我們</botton>
						<div id="menu" style="display: none;">
                    <ul>
                        <li><a href="{{route('teacher_experience')}}" class="nav-link" style="color:#ddb998">教師資歷</a></li>
                        <li><a href="{{route('features')}}" class="nav-link" style="color:#ddb998">課程特色</a></li>
                       <li><a href="{{route('st_comment')}}" class="nav-link" style="color:#ddb998">學員感言</a></li>
                    </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                      <botton class="nav-link" id="toggleMenu2">課程須知</botton>
						<div id="menu2" style="display: none;">
                    <ul>
                        <li><a href="{{route('registration_process')}}" class="nav-link" style="color:#ddb998">報名流程</a></li>
                        <li><a href="{{route('QA')}}" class="nav-link" style="color:#ddb998">常見QA</a></li>
                        <li><a href="{{route('class')}}" class="nav-link" style="color:#ddb998">服務條款</a></li>
                        <li><a href="{{route('class')}}" class="nav-link" style="color:#ddb998">註冊條款</a></li>
                        
                        
                       
                    </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('free_class')}}">免費試聽</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">登入會員</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">註冊帳號</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('class.index') }}">購買課程</a>
                    </li>

                </ul>




            </nav>
        </div>
		
                       <!-- Copywrite Text -->
                <div class="copywrite-text text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                       <a>莊小寬數學</a>
                        <i class="fa" aria-hidden="true"></i>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
   
</div>
    <!-- ***** Main Menu Area End ***** -->

       <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="menu-area d-flex justify-content-between">
                        <!-- Logo Area  -->
                        <div class="logo-area">
							<a href="{{route('index')}}">
                            <img src="/photos/logonav.png" alt="莊小寬數學">
							</a>
                        </div>

                        <div class="menu-content-area d-flex align-items-center">
                            <!-- Header Social Area -->
                            <div class="header-social-area d-flex align-items-center">
                                
                                <a href="https://www.youtube.com/@dennis18_com/videos" data-toggle="tooltip" data-placement="bottom" title="YT"><i class="fa" aria-hidden="true"></i>YT</a>
								
                                <a href="https://line.me/ti/p/fhY1SIhdPO" data-toggle="tooltip" data-placement="bottom" title="Line"><i class="fa" aria-hidden="true"></i>LINE</a>
                                <a href="https://www.facebook.com/people/%E8%8E%8A%E5%B0%8F%E5%AF%AC%E6%95%B8%E5%AD%B8%E7%B7%9A%E4%B8%8A%E8%A3%9C%E7%BF%92%E7%8F%AD/100054881665986/" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                               
                            </div>
                            <!-- Menu Icon -->
                            <span class="navbar-toggler-icon" id="menuIcon"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
	
    <!-- ***** Hero Area Start ***** -->
    
    <div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
<div id="bg" ></div>
<div id="bg_mask"></div>

        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">

                </div>
            </div>
        </div>

    </div>
    
    <br><br>        @if(session()->has('remembered_account'))
    {{-- Session 中有填入 remembered_account --}}
    <h2>目前登入學號: {{ session('remembered_account') }}</h2>
@else
    {{-- Session 中沒有填入 remembered_account --}}
    <h2>目前沒有登入</h2>
@endif
	<div class="container">
	<h2>◈◈◈◈  {{ $class->classname }} ◈◈◈◈</h2>
    <div class="row">
	
        <div class="col-12 col-md-6">
           
            <div class="">
                <br>
                <a href="{{ route('showClass', ['id' => $class->id]) }}">
                                <img src="{{ asset('storage/' . $class->photo) }}" alt="Class Photo" style="background-size: 150%;">
                            </a>
            </div>
        </div>
		<br><br><br>
        <div class="col-12 col-md-6">
            
            <div class=""><br><br><br>
            <h4-1>✪ 老師: {{ $class->teachername }} </h4-1><br><br>
            <h4-1>✪ 價格: {{ $class->money }} </h4-1><br><br>
            <h4-1>✪ 課程總堂數: {{ $class->classnum }}</h4-1><br><br>
            <h4-1>✪ 課程時長: {{ $class->videotime }} </h4-1><br><br>
            <h4-1>✪ 對象: {{ $class->forwho }} </h4-1>
            </div><br><br>
					
        @if(session()->has('remembered_account'))
            <!-- 如果 Session 中有填入 remembered_account，顯示加入購物車按鈕 -->
            <form method="post" action="{{ route('addToCart', ['id' => $class->id]) }}">
                @csrf
                <button type="submit" class="primary-btn btn-success">加入購物車</button>
            </form>
        @else
            <!-- 如果 Session 中沒有填入 remembered_account，顯示提示訊息並提供登入連結 -->
            <p>請先登入以加入購物車。</p>
            <a href="{{ route('login') }}" class=" primary-btn btn-warning">點此登入</a>
        @endif
		</div>
	
        </div>
	</div><br><br>
	<div class="container">
	<h2>⇝ 課程資訊 ⇜</h2><br>
		
    <div class="row">
        <div class="col-12">

            <div class="">
            <img src="{{ asset('storage/' . $class->introduction) }}" alt="Introduction Image">
            </div>
            
        </div>
		</div>
	</div>
	 <!--<div class="container">
	<h2>⇝ 課程影片 ⇜</h2><br>
		
    <div class="row">
        <div class="col-12">
            <div class="">
            <h4-1>✪ 課程章節: {{ $class->know }} </h4-1>
            </div>

        </div>
        </div>
		</div>
        <br><br> <br><br>-->
		 <!-- ***** Footer Area Start ***** -->
    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area" style="background-color:#000000">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6 ">
                        <br><br>
                        <h4 style="color: #FFFFFF">聯繫我們</h4>
						<br>
                        <p style="color: #FFFFFF">公司名稱:莊小寬數學</p>
                        <p style="color: #FFFFFF">服務時間:週一至週日 | 14:00-23:00</p>
                        <p style="color: #FFFFFF">電子郵件 : a0911297490@gmail.com</p>
                        <p style="color: #FFFFFF">電話: 0910-651618</p>
                    </div>
                    <div class="col-md-6 ">
                        <br><br>
                        <h4 style="color: #FFFFFF">快速連結</h4>
						<br>
                    <ul>
                        <li><a style="color:#ddb998" href="{{route('index')}}" >首頁</a></li>
                        <li><a style="color:#ddb998" href="{{route('teacher_experience')}}">關於我們</a></li>
                        <li><a style="color:#ddb998" href="{{route('registration_process')}}">課程須知</a></li>
                        <li><a style="color:#ddb998" href="{{route('free_class')}}">免費試聽</a></li>
						<li><a style="color:#ddb998" href="{{route('login')}}">登入會員</a></li>
						<li><a style="color:#ddb998" href="{{route('register')}}">註冊帳號</a></li>
                    </ul>
                    </div>
                </div>
                <!-- Copywrite Text -->
                <div class="copywrite-text text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                       <a>莊小寬數學</a>
                        <i class="fa" aria-hidden="true"></i>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>  

<!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="/js/plugins.js"></script>
    <!-- Active js -->
    <script src="/js/active.js"></script>
	<script src="/js/bootstrap.bundle.min.js"></script>
	<script src="/js/memu.js"></script>
    <script src="/js/new card.js"></script>
	<script src="/js/CAP-1.js"></script>
@endsection

</body>
</html>
