<<<<<<< HEAD
<!-- login.blade.php -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>莊小寬數學_忘記密碼</title>
	<link rel="stylesheet" href="/css/sample_sinp_up.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/style.css">
   <!-- Favicon  -->
    <link rel="icon" href="/photos/logo-removebg-.png">
</head>
<body style="background:linear-gradient(90deg, #717071, #abb7bb)">

	    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="sonar-load"></div>
        </div>
    </div>
    <!-- Preloader End -->


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
              <li role="presentation" class="active"><a href="#" >忘記密碼</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active form-are" id="login">
                <form  method="post" action="{{ route('password.email') }}">
                @csrf
                  <div class="form-bor">
                    <div class="form-input-group">
                      <label for="email">電子郵件地址*</label>
                       <input type="email" name="email" id="email" required>
                    </div>

                    <div class="form-input-group">
                      <label for="account">學號*</label>
                      <input type="text" name="account" id="account" required>
                    </div>

                    <div class="form-input-group">
                    <button type="submit">發送重設密碼鏈接</button>
                    </div>
                  </div>
                </form>

                @if(session('status'))
=======
<form method="post" action="{{ route('password.email') }}">
    @csrf

    <label for="account">學號:</label>
    <input type="text" name="account" id="account" required>

    <label for="email">email:</label>
    <input type="email" name="email" id="email" required>

    <button type="submit">發送重設密碼鏈接</button>
</form>

@if(session('status'))
>>>>>>> 0d9ae4934db44b1386542bfdd8de1ff952718947
    <div>{{ session('status') }}</div>
@endif

@if($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif
<<<<<<< HEAD

              </div>
 
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
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

=======
>>>>>>> 0d9ae4934db44b1386542bfdd8de1ff952718947
