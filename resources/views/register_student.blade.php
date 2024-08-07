<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>莊小寬數學_註冊</title>
	<link rel="stylesheet" href="/css/sample_sinp_up.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/style.css">
   <!-- Favicon  -->
    <link rel="icon" href="/photos/logo-removebg-.png">
</head>

<body style="background:linear-gradient(90deg, #717071, #abb7bb)">
@extends('layouts.app')
@section('content')
	    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="sonar-load"></div>
        </div>
    </div>
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
							<a href="首頁_莊小寬數學.html">
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
                            <!-- Menu Icon 三條橫線 -->
                            <span class="navbar-toggler-icon "  id="menuIcon"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

<br><br><br>
<div class="sing-log-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="form-area">
          <div class="form-sing">
            <ul class="nav navs-tabs" role="tablist">
              <li  class="active"><a href="{{route('login')}}" >登入</a></li>
			   <li class="active"><a href="{{route('register')}}" >註冊</a></li>
            </ul>
	
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active form-are" id="profile">
                <form action="{{ route('manager.registerStudent') }}" method="post">
					@csrf
                  <div class="form-bor">
					  
                    <div class="form-input-group">
                      <label for="name">使用者名稱(本名)*</label>
						 <input type="text" class="" id="name" name="name" required>
                    </div>
					  
                    <div class="form-input-group">
                      <label for="password">密碼(請務必記住)*</label>
                      <input type="password" class="" id="password" name="password"  required>
                    </div>
					  
                    <div class="form-input-group">
                      <label for="email2">電子郵件地址*</label>
                      <input type="email" class="" id="email2" name="email2" required>
                    </div>
					  
		            <div class="form-input-group">
                      <label for="school">學校*</label>
                      <input type="text" class="" id="school" name="school" required>
                    </div>
					  
		            <div class="form-input-group">
                      <label for="grade">年級(ex:高一)*</label>
                      <input type="text" class="" id="grade" name="grade" required>
                    </div>
					  
		            <div class="form-input-group">
                      <label for="stuaddress1">可實際收件地址(收講義包裹)*</label>
                      <input type="text" class="" id="stuaddress1" name="stuaddress1" required>
                    </div>
					  
		            <div class="form-input-group">
                      <label for="stuaddress2">外國地址(非必填，請留英文地址)</label>
                      <input type="text" class="" id="stuaddress2" name="stuaddress2">
                    </div>
					  
                    <div class="form-input-group">
                      <label for="stphone">電話*</label>
                      <input type="tel" class="" id="stphone" name="stphone" required>
                    </div>
					  
                    <div class="form-input-group">
                      <label for="parname">家長姓名*</label>
                      <input type="text" class="" id="parname" name="parname" required>
                    </div>	
					  
                    <div class="form-input-group">
                      <label for="parnumber">家長電話*</label>
                      <input type="text" class="" id="parnumber" name="parnumber" required>
                    </div>	
					  
		    <div class="form-input-group" > <!-- 推薦來源下拉式選單 -->
                <label for="recommendation">推薦來源*</label>
                <select id="recommendation" name="recommendation" required onchange="updateLabel(this.value)" class="form-control">
                    <option value="" disabled selected style="color:#3f2a28">請選擇推薦來源</option>
                    <option value="FB" style="color:#3f2a28">FB</option>
                    <option value="朋友推薦" style="color:#3f2a28">朋友推薦</option>
                    <option value="補習班" style="color:#3f2a28">補習班</option>
                    <option value="家長介紹" style="color:#3f2a28">家長介紹</option>
                    <option value="老師推薦" style="color:#3f2a28">老師推薦</option>
                    <option value="YouTube" style="color:#3f2a28">YouTube</option>
                </select>
            </div>
                    <div class="form-input-checkbox"><!-- 多我已閱讀服務條款*這項 -->
                      <input type="checkbox" id="test1" required>
                      <label for="test1" >我已閱讀服務條款及註冊條款*</label>
                    </div>
                    <div class="form-input-group">
                      <button type="submit">註冊</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
	
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
    function updateLabel(value) {
        var label = document.querySelector('label[for="recommendation"]');
        label.textContent = '推薦來源* (' + value + ')';
    }
</script>
		<script src="/js/jquery.min.js"></script>

	<script src="/js/sample_sinp_up.js"></script>
</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="/js/sample_sinp_up.js"></script>
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
