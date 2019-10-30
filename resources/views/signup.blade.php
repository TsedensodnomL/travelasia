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
    <title>Signup</title>

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
                <form class="login-form-info sign-up col-lg-6" action='signup/store' method='post'>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                    <img src="img/logo.png" class="login-logo">

                    <span class="login100-form-title " style="padding-bottom: 25px;">
                        Бүртгүүлэх
                    </span>

                    <div class="wrap-input100 signup-wrap validate-input">
                        <input class="input100" type="text" name="username">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Хэрэглэгчийн нэр</span>
                    </div>

                    <div class="wrap-input100 signup-wrap validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Цахим шуудан</span>
                        </div>
                        
                        
                        <div class="wrap-input100 signup-wrap validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="pass">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Нууц үг</span>
                        </div>
                    
                      

                  

                        <div class="container-login100-form-btn">
                                <button class="primary-btn">Бүртгүүлэх<span class="lnr lnr-arrow-right"></span></a>
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