<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>莊小寬數學_學員感言</title>

   <!-- Favicon  -->
    <link rel="icon" href="/photos/logo-removebg-.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/style.css">

</head>

<body>

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
    <!-- ***** Header Area End ***** -->
    <!-- ***** Hero Area Start ***** -->
    <div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(photos/students/st1.png);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="line"></div>
                        <h2  style=" text-align: left; font-size: 35px;x">最美好的未來，<br>就在你選擇莊小寬的那一刻。</h2>
                        <p>最後一戰，最後的機會，對自己好一點，該給自己好好的上一堂優質的數學課。</p>
                        <a href="{{route('register')}}" class="btn sonar-btn white-btn">加入我們</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->

<br><br><br><br><br><br>
    <div class="sonar-testimonials-area bg-img" style="background-image: url(photos/students/st2.png);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="testimonial-content bg-white">
                        <div class="section-heading text-left">
                            <div class="line"></div>
                            <h2 style=" text-align: left;">學生感言</h2>
                        </div>

                        <div class="testimonial-slides owl-carousel">

                            <div class="single-tes-slide">
								<h2 style=" text-align: left;">高雄中學 潘祐君<br>錄取 台大醫學系</h2>
								<br>
                                <p>高中數學內容廣泛、包羅萬象，並且著重思考，光是在學校聽講或是參考書是難以駕馭的，因此起初對於數學這門科目，我常抱有恐懼。幸而在小寬老師的認真教學下，我重拾了對數學的信心。老師針對觀念的精闢分析，再加上解題時仔細用心地講解思考流程，既能讓學生對於章節內有全盤的認識，也能建立學生在考場上臨危不亂的心態。感謝老師的教導，助我大考數學順利，前進理想校系。</p>
                              
                            </div>

 

                            <div class="single-tes-slide">
								<h2 style=" text-align: left;">台南一中 楊秉嶧<br>錄取 台大電機</h2>
								<br>
                                <p>小寬在觀念關連結得很透徹，原本看似複雜的內容就這樣一步一步被拆解，只要完全搞懂來龍去脈，我覺得根本不需要背，只要思考就可以了。
                                解題時的技巧也很實用，相較學校參考書或其它補習班很「笨」的做法，小寬的做法總是直觀且乾淨俐落，因此考試時我可以很快算完題目，有更多時間應付難題或是檢查。
                                小寬的板書很美，是我接觸過許多老師中少見的，除了字體公正，看了舒服外，算式間的⇒(imply)更是有條理地推演出答案，這點讓我很喜歡。上了小寬三年的課，原本作筆記、 寫算式都很凌亂的我，漸漸學會有組織地寫出很美的計算過程。

                                </p>
                              
                            </div>
				           <div class="single-tes-slide">
		    	               <br>
				               <p>我曾聽過其它補習班老師上課，非出身本科系的他們，對數學往往停留在解題的階段，但無論是解法或是觀念的講解都不能令我滿意，只有小寬能讓我對所有內容瞭解透徹。
                               小寬有著數學系的背景，加上對數學的熱愛，他的教學絕對比其他人專業，有效率。我很幸運能在高中階段遇到小寬， 讓喜愛數學的我帶著良好的數學基礎前往大學之路，謝謝小寬一直以來的照顧!
                               </p>
                              
                            </div>
							
						    <div class="single-tes-slide">
								<h2 style=" text-align: left;">嘉義高中 張淵荏<br>錄取 台大醫學系</h2>
								<br>
                                <p>小寬上課時很強調定義和觀念，同時也能將各個單元的概念融會貫通，以一題多解的方式引導我們的多元思考。此外，小寬也很樂於為同學解惑，無論是基本題、挑戰題，甚至課外的題目，他都能給出令人信服的解法。</p>
                              
                            </div>
							
						    <div class="single-tes-slide">
								<h2 style=" text-align: left;">高雄中學 謝秉高<br>錄取 台大醫學系</h2>
								<br>
                                <p>老師上課可說是十分高效率，省去一些繁瑣的計算過程，
                                   更能顯現出解題的核心，也能花更多時間在觀念反覆和
                                   帶到更多的題目，讓學生在上課時學得更多。</p>
                              
                            </div>
							
						   <div class="single-tes-slide">
								<h2 style=" text-align: left;">嘉華中學 呂政儒<br>錄取 陽明醫學系</h2>
								<br>
                                <p>小寬老師的上課氣氛相當輕鬆，講解也相當清楚，讓我可以掌握一個觀念的核心，從中學到的不只是解題技巧，還有一套清楚的思路，以及其他一些延伸的知識，讓我這三年來的數學成績從原本的大起大落到現在的穩定取得高分。</p>
                              
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<br><br>
    <div class="sonar-testimonials-area bg-img" style="background-image: url(photos/students/st3.png);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="testimonial-content bg-white">
                        <div class="section-heading text-left">
                            <div class="line"></div>
                            <h2 style=" text-align: left;">學生感言</h2>
                        </div>

                        <div class="testimonial-slides owl-carousel">

                            <div class="single-tes-slide">
                                <p>自二下接觸了小寬老師數學後，簡單俐落地作法讓我對於數學邏輯思考
                                   不再害怕，老師的教學內容無懈可擊！有分門別類的單元與練習題，觀念
                                   也十分清楚，最方便的是提供線上輔導老師以及24小時的line群組解惑，
                                   讓我不用來回奔波到實體補習班事課，節省很多的交通時間和實體課程中
                                   必須忍受的廢話時間。</p>
                               <h6>建功高中 陳柏安 <br>111-1第一次段考數學：班一(92分) / 校排二</h6>
                            </div>

                            <div class="single-tes-slide">
                                <p>非常感謝小寬老師的指導，原來會考只有B++的我在小寬老師的教學下
                                   也慢慢地不畏懼數學。不僅從小寬老師身上學到多樣的解題方式；更多的
                                   是小寬獨特的思路，此外，小寬完整的課程內容讓我在殘破不堪的108課綱
                                   下也有足夠的能力面對數學。</p>
                                <h6>嘉中 黃暐宸 <br>111-1第一次段考數學：單科班二(96分) / 班二</h6>
                            </div>

                            <div class="single-tes-slide">
                                <p>首先謝謝小寬老師的指導，讓我數學的思考方向可以比同儕更快速，更有效率。另外，小寬課程的完整性也使我在學習上沒有缺漏，本次數學成績因為
                                粗心大意而失了許多分，希望以後別再犯這種錯誤。</p>
                                <h6>嘉中 黃暐宸 <br>111-1第二次段考數學：單科班二(96分) / 班二</h6>
                            </div>

                            

                            <div class="single-tes-slide">
                                <p>我在這次月考能獲得好成績，全因歸功於小寬數學的指導。在小寬老師輕快教學節奏的帶領下，我輩引領至數學的美妙世界，啟發了我對數學的興趣及養成思考的習慣，小寬老師的上課方式專業而不失一分幽默，讓人想一題接著一的上下去，使我的數學進步了許多。</p>
                                <h6>嘉中 葉威麟 <br>110-2第二次段考數學：單科班一(100) / 班二</h6>
                            </div>

                            <div class="single-tes-slide">
                                <p>曾經苦惱許久的數學自從上了小寬的課後再也不是令我困擾的科目了。小寬
                                   的課程內容是我遇過所有的數學老師中最扎實的，從基本觀念的彙整到解題邏輯的清晰思路都是其他老師無可比擬的，除此之外，小寬更會同一題目從不同的角度給予數種解法，讓我在考場中更得心應手。小寬老師是我數學最佳的靠山。</p>
                                <h6>南一中 李峻煒 <br>110-1第一次段考數學 / 班二</h6>
                            </div>
						
                            <div class="single-tes-slide">
                                <p>小寬老師好，我是在高一看到小寬老師的招生簡章。
                                 從小我就排斥補習班，不過自從疫情開始接觸線上教學課程之後，覺得線上教學除了空氣中沒有教室的氣氛之外，其他都和一般的課程沒有不同，所以就抱著試試也無妨加入這個大家庭。<br>
                                 經過了一整個學期，不敢說我的數學有多強大，但和教室𥚃每天放學就趕著去補習班上課的同學們成績相比並沒有失色，甚至有超越，在學期成績單的數學成績也是排名在中上。<br>
                                 謝謝老師給我的鼓勵與無私的奉獻！我會繼續努力並保持成績持續，像射線一樣無終點，就像數字一樣無窮大。</p>
                                <h6>北一女中 劉蘋萱 <br>111-1第一次段考 / 班三</h6>
                            </div>

                            <div class="single-tes-slide">
                                <p>在線上學習的過程中，因為有這樣子的數學練習題使我的成績比上學期更高
                                   也更加的好，透過平常些許的練習；每天的10題也使我更懂得甚麼叫做
                                   運用零碎的時間。俗話說的好：『一步一腳印』希望我日後的數學可以一直
                                   持續下去，從原本根本不懂一直到懂，不會的題目也可以多多問老師，讓自己
								   更加進步。未來也期許自己能更上一層樓使自己的成績更加的出色，繁星上好學校。</p>
                                <h6>秀峰高中 黃羿寧 <br>111-2第一次段考 / 班二</h6>
                            </div>


                        </div>
                    </div>
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

    <!-- ***** Footer Area End ***** -->

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
	<script src="/js/memu.js"></script>

</body>

</html>