<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>莊小寬數學_選購課程</title>

    <!-- Favicon  -->
    <link rel="icon" href="photos/logo-removebg-.png">   

    <!-- Style CSS -->
    <link rel="stylesheet" href="/style.css">


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
    <!-- ***** Main Menu Area End ***** -->
</div>
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
                                
                                <a href="https://www.youtube.com/@dennis18_com" data-toggle="tooltip" data-placement="bottom" title="YT"><i class="fa" aria-hidden="true"></i>YT</a>
								
                                <a href="https://line.me/ti/p/44-5QDRsvx" data-toggle="tooltip" data-placement="bottom" title="Line"><i class="fa" aria-hidden="true"></i>LINE</a>
                                <a href="https://www.facebook.com/people/%E8%8E%8A%E5%B0%8F%E5%AF%AC%E6%95%B8%E5%AD%B8%E7%B7%9A%E4%B8%8A%E8%A3%9C%E7%BF%92%E7%8F%AD/100054881665986/?ref=pages_you_manage" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                              

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
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(/photos/shop/top/top.png);"></div>
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="line"></div>
                        <h2 style=" text-align: left;">選購課程</h2>
                        <p>升高一銜接課程 / 科學班資優 / 高一 / 高二 / 高三進度 / 學測總複習 / 分科測驗 / 大一<br>選定課程後加入購物車即可</p>
                        <a href="{{route('register')}}" class="btn sonar-btn white-btn">還沒有註冊嗎?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->

 <!-- Shop Section Begin -->
 <section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop__sidebar">
                    <div class="shop__sidebar__accordion">
                        <form action="{{ route('class.index') }}" method="get">
                        <button type="submit" class="primary-btn btn-success">選擇</button>
                        <br><br>
                            <div class="accordion" id="accordionExample">
                                @foreach ($classTypes as $classType)
                                    <div class="cardshop">
                                        <div class="cardshop-heading">
                                            <label class=" h4-5 custom-checkbox "  >
                                                <input type="checkbox" name="classTypes[]" value="{{ $classType }}"
                                                       {{ in_array($classType, $selectedClassTypes) ? 'checked' : '' }}>
                                                       
                                                        <span> {{ $classType }}</span>
                                            </label>
                                           
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </form>
                    </div>
                </div>
            </div>


				
				
				<!--課程內容-->
				<div id="app" class="col-lg-9">
                    <div class="row">
                        
                    <div class="container">
    @forelse ($filteredClasses->chunk(3) as $chunk)
        <div class="row">
            @foreach ($chunk as $class)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="photos/shop/course/2.png">
                            <a href="{{ route('showClass', ['id' => $class->id]) }}">
                                <img src="{{ asset('storage/' . $class->photo) }}" alt="Class Photo">
                            </a>
                            <ul class="product__hover">
                                <li>
                                    <a href="{{ route('showClass', ['id' => $class->id]) }}">
                                        <img src="photos/icon/shop/eye.png" alt="">
                                    </a>
                                    <span>查看更多</span>
                                </li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>{{ $class->classname }}</h6>
                            <ul class="NT">
                                <li class="money">
                                    <div class="product-details">
                                        <span class="h4-6">價格:{{ $class->money }}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @empty
        <p>無課程</p>
    @endforelse
</div>


                        

                    </div>
				</div>

                </div>
            </div>
    </section>
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
	<script src="/js/box.js"></script>
@endsection

</body>

</html>