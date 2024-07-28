<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>莊小寬數學_購物車</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="/style.css">

    <!-- Favicon  -->
    <link rel="icon" href="/photos/logo-removebg-.png">


</head>

<body>
@extends('layouts.app')
@section('content')

    <!-- Preloader End -->

    <!-- ***** Main Menu Area Start ***** -->
    <div class="mainMenu d-flex align-items-center justify-content-between">
        <!-- Close Icon -->
        <div class="closeIcon">
            <i class="ti-close" aria-hidden="true"></i>
        </div>
     <!-- Logo Area  -->
     <div class="logo-area">
			<a href="{{route('index')}}">
            <img src="photos/logonav.png" alt="莊小寬數學">
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
                        <li><a href="{{route('Terms_of_Service')}}" class="nav-link" style="color:#ddb998">服務條款</a></li>
                        <li><a href="{{route('Registration_Terms')}}" class="nav-link" style="color:#ddb998">註冊條款</a></li>
                        
                        
                       
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
	<br><br><br><br><br><br><br>
  <h2 class="h4-4">◈◈◈◈  購物車  ◈◈◈◈</h2>

	<!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class=" shopping__cart__table ">
                    @if(count($cartItems) > 0)
                    <form action="{{ route('purchase') }}" method="post">
                     @csrf
                        <table>
                            <thead>
                                <tr>
                                    <th>課程</th>
                                    <th>點選</th>
                                    <th>價格</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($cartItems as $index => $item)
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                        <img src="{{ asset('storage/' .$cartDetails[$index]['photo']) }}" style="max-width: 100px;">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>課程名稱: {{ $item->classname }}</h6>
                                            <h6>課程對象: {{ $cartDetails[$index]['forwho'] }}</h6>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                            <input type="checkbox" name="selected_courses[]" value="{{ $item->classname }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">價格: {{ $cartDetails[$index]['money'] }}</td>
                                    
                                </tr>
                            
                                @endforeach
                            </tbody>
                        </table>
                    
                    </div>
                    <button type="submit" class="primary-btn btn-success text-rightshop" >購買所選課程</button>
                    </form>
    @else
        <p>您的購物車是空的</p>
    @endif
    
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
    <!-- Shopping Cart Section End -->
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>
  
    <!-- Bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/plugins.js"></script>
    <!-- Active js -->
    <script src="/js/active.js"></script>
	<script src="/js/bootstrap.bundle.min.js"></script>
	<script src="/js/memu.js"></script>

</body>
</html>
