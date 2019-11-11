<!DOCTYPE html>
    <html lang="en">
    <head>	<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Login</title>

		<link href="https://fonts.googleapis.com/css?family=Cuprum:400,700&display=swap&subset=cyrillic" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap&subset=cyrillic" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <section class="login">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="login-image half-img col-lg-6 no-padding">
                        <img class="img-fluid d-block" src="img/flight.jpg">
                    </div>
                    <form class="login-form-info sign-up col-lg-6" action='adminlogin/search' method='get'>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <img src="img/logo.png" class="login-logo">

                        <span class="login100-form-title " style="padding-bottom: 43px;">
                            Нэвтэрнэ үү
                        </span>

                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <input class="input100" type="text" name="username">
                                <span class="focus-input100"></span>
                                <span class="label-input100">Хэрэглэгчийн нэр</span>
                            </div>
                            
                            
                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <input class="input100" type="password" name="pass">
                                <span class="focus-input100"></span>
                                <span class="label-input100">Нууц үг</span>
                            </div>
        
                            <div class="wrap-input100 validate-input">
                                <select id="inputState" name='utype'class="form-control">
                                                    <option value='O' selected>Оператор</option>
                                                    
                                                       
                                                        <option value='A'>Админ</option>
                                                    </select>
                            </div>

                            <div class="flex-sb-m w-full pt-3 pb-32">
                                <div class="contact100-form-checkbox">
                                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                    <label class="label-checkbox100" for="ckb1">
                                        Намайг сана
                                    </label>
                                </div>
                            </div>
                            
                            <div class="container-login100-form-btn">
                                    <button class="primary-btn">Нэвтрэх<span class="lnr lnr-arrow-right"></span></button>
                            </div>
                            
                            
                    </form>
                  
                </div>

            </div>
        </section>
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/parallax.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/main.js"></script>
    </body>
    </html>