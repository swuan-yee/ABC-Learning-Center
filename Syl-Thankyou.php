<?php
   
?>

<!DOCTYPE html>
<html>

<head>
    <title>ABC Learning Centre</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!--Font for footer-->
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300&display=swap" rel="stylesheet">
    <!--font for carousel-->
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
    <!--========= footer external css ================-->
    <link rel="stylesheet" href="footer.css">
    <!--================ end of footer external css ======================-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">


    <style>
        body {
            background: #ffffff;
            background: linear-gradient(to bottom, #ffffff 0%, #e1e8ed 100%);
            filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed', GradientType=0);
            height: 100%;
            margin: 0;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        .wrapper-1 {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .wrapper-2 {
            padding: 30px;
            text-align: center;
        }
        
        h1 {
            font-family: 'Kaushan Script', cursive;
            font-size: 4em;
            letter-spacing: 3px;
            color: #5892FF;
            margin: 0;
            margin-bottom: 20px;
        }
        
        .wrapper-2 p {
            margin: 0;
            font-size: 1.3em;
            color: #aaa;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
        }
        
        .login {
            color: #fff;
            background: #5892FF;
            border: none;
            padding: 10px 50px;
            margin: 30px 0;
            border-radius: 30px;
            text-transform: capitalize;
            box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
        }
        
        @media (min-width:360px) {
            h1 {
                font-size: 4.5em;
            }
            .login {
                margin-bottom: 20px;
            }
        }
        
        @media (min-width:600px) {
            .content {
                max-width: 1000px;
                margin: 0 auto;
            }
            .wrapper-1 {
                height: initial;
                max-width: 620px;
                margin: 0 auto;
                margin-top: 50px;
                box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
            }
        }
    </style>


</head>

<body>
    <!--===== Navagation bar coding ==========-->

    <nav class="navbar navbar-expand-lg navbar-dark " style="background:linear-gradient(59deg, #3A6073, #16222A);">

        <a class="navbar-brand " href="Syl-Index.html">
            <img src="logo.png " alt="logo" width="130"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Syl-Index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Syl-SiteMap.html">Site Map</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Courses
          </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Syl-IntroCS.html">Java Courses</a>
                        <a class="dropdown-item" href="Syl-IntoWebCourse.html">Web Design Courses</a>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="Syl-JavaSchedule.html">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Syl-Register.html">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Syl-AboutCourse.html">About Courses</a>
                    </li>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn my-2 my-sm-0" style="background: #3A6073;" type="submit">Search</button>
            </form>
        </div>

    </nav>






    <!--======= end of navagation bar coding ==========-->
    <!--========== starting thank you coding session ====================-->
    <div class=content>
        <div class="wrapper-1">
            <div class="wrapper-2">
                <h1>Thank you !</h1>
                <p>You are now set up your account.</p>
                <p>You can now login.</p>
                <button class="login" onclick="location.href='Syl-Login.html'">
            Login Now
            </button>
            </div>

        </div>
    </div>







    <!--=========== end of thankyou coding session ======================-->


    <!--===============  starting footer ==============-->
    <footer class="mainfooter" role="contentinfo">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h5><u>Opening Hours</u></h5>
                            <ul class="list-unstyled">
                                <li><span><i class="fa fa-times"></i></span>
                                    <a class="clock-time"><strong>Sunday : Closed</strong></a>
                                </li>
                                <li><span><i class="fa fa-check"></i></span>
                                    <a><strong>Mon - Fri : 10am - 5pm</strong></a>
                                </li>
                                <li><span><i class="fa fa-check"></i></span>
                                    <a><strong>Saturday: 10am - 4pm</strong></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h5><u>Our Learning Center</u></h5>
                            <ul class="list-unstyled">
                                <li><strong><a href="Syl-AboutUs.html">About Us</a></strong></li>
                                <li><strong><a href="Syl-ContactUs.html">Contact Us</a></strong></li>
                                <li><strong><a href="Syl-PrivacyPolicy.html">Privacy Policy</a></strong></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h5><u>Address</u></h5>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-location-arrow" style="font-size:27px"><a><strong>  No.(71), Yadana Street, PaukTaw, Insein, Yangon, Myanmar.</strong></a></i></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5><u>Follow Us</u></h5>
                        <ul class="social-network social-circle">
                        <li><a href="https://www.facebook.com/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.twitter.com/" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center">&copy; Copyright 2020 - ABC Learning Center. Created by Swuan Yee Lin.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--===============  end of footer ==============-->

</body>

</html>