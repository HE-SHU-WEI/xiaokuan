<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>莊小寬數學_QA</title>

    <!-- Favicon  -->
    <link rel="icon" href="/photos/logo-removebg-.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/style.css">
	<link rel="stylesheet" href="/css/QA.css">

  <style>
.photo-gallery {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.photo-gallery img {
  width: 100%;
  height: auto;
  max-width: 400px; /* You can adjust this size as needed */
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  .photo-gallery img {
    max-width: 450px; /* You can adjust this size as needed */
  }
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
  .photo-gallery img {
    max-width: 500px; /* You can adjust this size as needed */
  }
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
  .photo-gallery img {
    max-width: 550px; /* You can adjust this size as needed */
  }
}
</style>

</head>

<body>
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
							<a href="{{route('index')}}">
                            <img src="photos/logonav.png" alt="莊小寬數學">
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
	<br>
    <!-- ***** Header Area End ***** -->
<div class="section about-us">
    <div class="container">
      <div class="row">
		          <div class="col-lg-12 offset-lg-0">
          <div class="section-heading">

            <h2>◈◈◈◈ QA問答 ◈◈◈◈</h2>
            <h4 style="color: #000000">一些常見的問題，都幫您列在下方，有任何疑問的地方歡迎聯絡我們。</h4>
			  <br><br><br>

          </div>
        </div>
        <div class="col-lg-12 offset-lg-0">
          <div class="accordion" id="accordionExample">

          
            <div class="accordion-item">
              <h2 style=" text-align: left;" class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 請問新課綱版本、進度；線上課程該如何安排?課程是否有提供試聽呢?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				<img src="photos/course_featurse/course features3.png" alt="教學範例" style="width: 35%; height: auto; float: right; margin-right: 60px;">
                <div class="accordion-body">
				
                 <strong>回覆:</strong><br>

				我們的線上課程屬於預錄課程，<br>不論您的學校版本是選擇：翰林、龍騰、南一、泰宇；<br>或學校決定好版本又另外自行決定章節順序，<br>則您可以選擇購買單一冊(例：高一上)完整課程。<br>
                若您學校該學期授課單元非購買頁面所顯示，<br>請加我們好友由我們為您規劃組合課程！
                (試聽課程)
            
                </div>
				  
              </div>
            </div>
            <div class="accordion-item">
              <h2 style=" text-align: left;" class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                 完成報名後什麼時候開始看課?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <strong>回覆:</strong><br>待您完成該課程報名後請再告知我們您已完成報名並提供註冊帳號，<br>待我們確認收到款項後會在24小時內開通該課程，講義相關教材會在三日內寄出。
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 style=" text-align: left;" class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  可以只單買講義嗎?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>回覆:</strong><br>教材無法單獨販售。
                  一套課程僅搭配一套教材，教材為老師獨家編制。<br>教材的內容也建議搭配老師精闢的講解，才能雙效合一、事半功倍喔！
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2  style=" text-align: left;" class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                 報名一年/兩年/三年課程有優惠嗎?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
					<strong>回覆:</strong><br>
                 有的!<br>報名一年課程95折；兩年課程9折；三年課程85折。<br>若當月已有做課程優惠活動則上述學年折扣僅適用兩年及三年課程折扣(優惠合併)

                 <br>詳細課程組合請加我們好友並為您規劃!

                 <br>更多優惠活動及資訊請至FB粉絲團
                </div>
              </div>
            </div>
	          <div class="accordion-item">
              <h2  style=" text-align: left;" class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                 報名完成後，如何開始正式上課?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
					<strong>回覆:</strong><br>
                  請參考底下觀看流程
                </div>
              </div>
            </div>
			  <div class="accordion-item">
              <h2 style=" text-align: left;" class="accordion-header" id="headingsSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                 有上課次數及觀看期限限制嗎?
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body">
					<strong>回覆:</strong><br>
                 莊小寬數學課程都有一定的觀看期限，<br>高一到高三進度課程觀看至該學期第三次段考結束，期限內可以重複觀看。<br>建議您在收到教材後並制定好學習計畫確保能在上課期間內把課程唸完喔!
                </div>
              </div>
            </div>
			  <div class="accordion-item">
              <h2 style=" text-align: left;" class="accordion-header" id="headingsSeven">
                <button style=" text-align: left;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                 觀看期限快到了，但是我還沒看完/還沒看，該怎麼辦?
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                <div class="accordion-body">
					<strong>回覆:</strong><br>
                  若您尚未看完或是想複習請聯絡我們。<br>延長時間為14天，並額外收300元延長費用。<br>請把握時間觀看課程喔!
                </div>
              </div>
            </div>
              <div class="accordion-item">
              <h2  style=" text-align: left;" class="accordion-header" id="headingsEight">
                <button style=" text-align: left;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                 數學問題如何發問?
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                <div class="accordion-body">
					      <strong>回覆:</strong><br>
                 在您完成報名後我們會邀請您加入相關年級解題群，<br>請將您要問的問題拍照上傳並告知您要問的題號；<br>若您是算到一半卡住或是需要請老師們檢查算式請務必將您的需求表達清楚。
                </div>
              </div>
            </div>



          </div>
        </div>

      </div>
      
    </div>
    
  </div>
  <br><br><br><br>
  <div class="container">
  <div class="row">
		          <div class="col-lg-12 offset-lg-0">
          <div class="section-heading">

            <h2>◈◈◈◈ 完整報名與購買流程 ◈◈◈◈</h2>
            <h4 style="color: #000000">請詳細閱讀，若有任何疑問的地方歡迎聯絡我們。</h4>
			  <br>

          </div>
          <div class="photo-gallery">
                  <img src="/photos/QA/1.png" alt="Photo 1">
                  <img src="/photos/QA/2.png" alt="Photo 2">
                  <img src="/photos/QA/3.png" alt="Photo 3">
                  <img src="/photos/QA/4.png" alt="Photo 4">
                  <img src="/photos/QA/5.png" alt="Photo 5">
                  <img src="/photos/QA/6.png" alt="Photo 6">
                  <img src="/photos/QA/7.png" alt="Photo 7">
                  <img src="/photos/QA/8.png" alt="Photo 8">
                  <img src="/photos/QA/9.png" alt="Photo 9">
                  <img src="/photos/QA/10.png" alt="Photo 10">
                  <img src="/photos/QA/11.png" alt="Photo 11">
                  <img src="/photos/QA/12.png" alt="Photo 12">
                  <img src="/photos/QA/13.png" alt="Photo 13">
          </div>  
        </div>
        </div>
        </div>
	<br><br><br><br>
    
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
	<script src="/js/box.js"></script>
    
</body>

</html>