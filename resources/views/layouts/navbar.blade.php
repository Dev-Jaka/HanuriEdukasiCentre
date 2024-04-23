<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Vesperr Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        body {
            margin-top: 20px;
        }

        .timeline_area {
            position: relative;
            z-index: 1;
        }

        .single-timeline-area {
            position: relative;
            z-index: 1;
            padding-left: 180px;
        }

        @media only screen and (max-width: 575px) {
            .single-timeline-area {
                padding-left: 100px;
            }
        }

        .single-timeline-area .timeline-date {
            position: absolute;
            width: 180px;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-grid-row-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding-right: 60px;
        }

        @media only screen and (max-width: 575px) {
            .single-timeline-area .timeline-date {
                width: 100px;
            }
        }

        .single-timeline-area .timeline-date::after {
            position: absolute;
            width: 3px;
            height: 100%;
            content: "";
            background-color: #ebebeb;
            top: 0;
            right: 30px;
            z-index: 1;
        }

        .single-timeline-area .timeline-date::before {
            position: absolute;
            width: 11px;
            height: 11px;
            border-radius: 50%;
            background-color: #f1c40f;
            content: "";
            top: 50%;
            right: 26px;
            z-index: 5;
            margin-top: -5.5px;
        }

        .single-timeline-area .timeline-date p {
            margin-bottom: 0;
            color: #020710;
            font-size: 13px;
            text-transform: uppercase;
            font-weight: 500;
        }

        .single-timeline-area .single-timeline-content {
            position: relative;
            z-index: 1;
            padding: 30px 30px 25px;
            border-radius: 6px;
            margin-bottom: 15px;
            margin-top: 15px;
            -webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
            box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
            border: 1px solid #ebebeb;
        }

        @media only screen and (max-width: 575px) {
            .single-timeline-area .single-timeline-content {
                padding: 20px;
            }
        }

        .single-timeline-area .single-timeline-content .timeline-icon {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            width: 30px;
            height: 30px;
            background-color: #f1c40f;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 30px;
            flex: 0 0 30px;
            text-align: center;
            max-width: 30px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .single-timeline-area .single-timeline-content .timeline-icon i {
            color: #ffffff;
            line-height: 30px;
        }

        .single-timeline-area .single-timeline-content .timeline-text h6 {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }

        .single-timeline-area .single-timeline-content .timeline-text p {
            font-size: 13px;
            margin-bottom: 0;
        }

        .single-timeline-area .single-timeline-content:hover .timeline-icon,
        .single-timeline-area .single-timeline-content:focus .timeline-icon {
            background-color: #020710;
        }

        .single-timeline-area .single-timeline-content:hover .timeline-text h6,
        .single-timeline-area .single-timeline-content:focus .timeline-text h6 {
            color: #3f43fd;
        }

        .circle {
            padding: 13px 20px;
            border-radius: 50%;
            background-color: #ED8D8D;
            color: #fff;
            max-height: 50px;
            z-index: 2;
        }

        .how-it-works.row .col-2 {
            align-self: stretch;
        }

        .how-it-works.row .col-2::after {
            content: "";
            position: absolute;
            border-left: 3px solid #ED8D8D;
            z-index: 1;
        }

        .how-it-works.row .col-2.bottom::after {
            height: 50%;
            left: 50%;
            top: 50%;
        }

        .how-it-works.row .col-2.full::after {
            height: 100%;
            left: calc(50% - 3px);
        }

        .how-it-works.row .col-2.top::after {
            height: 50%;
            left: 50%;
            top: 0;
        }


        .timeline div {
            padding: 0;
            height: 40px;
        }

        .timeline hr {
            border-top: 3px solid #ED8D8D;
            margin: 0;
            top: 17px;
            position: relative;
        }

        .timeline .col-2 {
            display: flex;
            overflow: hidden;
        }

        .timeline .corner {
            border: 3px solid #ED8D8D;
            width: 100%;
            position: relative;
            border-radius: 15px;
        }

        .timeline .top-right {
            left: 50%;
            top: -50%;
        }

        .timeline .left-bottom {
            left: -50%;
            top: calc(50% - 3px);
        }

        .timeline .top-left {
            left: -50%;
            top: -50%;
        }

        .timeline .right-bottom {
            left: 50%;
            top: calc(50% - 3px);
        }

        main-timeline {
            font-family: 'Roboto', sans-serif;
            padding: 20px 0;
            position: relative;
        }

        .main-timeline:before,
        .main-timeline:after {
            content: '';
            height: 40px;
            width: 40px;
            background-color: #e7e7e7;
            border-radius: 50%;
            border: 10px solid #303334;
            transform: translateX(-50%);
            position: absolute;
            left: 50%;
            top: -15px;
            z-index: 2;
        }

        .main-timeline:after {
            top: auto;
            bottom: 15px;
        }

        .main-timeline .timeline {
            padding: 35px 0;
            margin-top: -30px;
            position: relative;
            z-index: 1;
        }

        .main-timeline .timeline:before,
        .main-timeline .timeline:after {
            content: '';
            height: 100%;
            width: 50%;
            border-radius: 100px 0 0 100px;
            border: 15px solid #46B2BC;
            border-right: none;
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
        }

        .main-timeline .timeline:after {
            height: calc(100% - 30px);
            width: calc(50% - 12px);
            border-color: #65C7D0;
            left: 12px;
            top: 15px;
        }

        .main-timeline .timeline-content {
            display: inline-block;
        }

        .main-timeline .timeline-content:hover {
            text-decoration: none;
        }

        .main-timeline .timeline-year {
            color: #65C7D0;
            font-size: 50px;
            font-weight: 600;
            display: inline-block;
            transform: translateY(-50%);
            position: absolute;
            top: 50%;
            left: 10%;
        }

        .main-timeline .timeline-icon {
            color: #65C7D0;
            font-size: 80px;
            display: inline-block;
            transform: translateY(-50%);
            position: absolute;
            left: 34%;
            top: 50%;
        }

        .main-timeline .content {
            color: #909090;
            width: 50%;
            padding: 20px;
            display: inline-block;
            float: right;
        }

        .main-timeline .title {
            color: #65C7D0;
            font-size: 22px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0 0 5px 0;
        }

        .main-timeline .description {
            font-size: 15px;
            letter-spacing: 1px;
            margin: 0;
        }

        .main-timeline .timeline:nth-child(even):before {
            left: auto;
            right: 0;
            border-radius: 0 100px 100px 0;
            border: 15px solid red;
            border-left: none;
        }

        .main-timeline .timeline:nth-child(even):after {
            left: auto;
            right: 12px;
            border: 15px solid green;
            border-left: none;
            border-radius: 0 100px 100px 0;
        }

        .main-timeline .timeline:nth-child(even) .content {
            float: left;
        }

        .main-timeline .timeline:nth-child(even) .timeline-year {
            left: auto;
            right: 10%;
        }

        .main-timeline .timeline:nth-child(even) .timeline-icon {
            left: auto;
            right: 32%;
        }

        .main-timeline .timeline:nth-child(5n+2):before {
            border-color: #EA3C14;
        }

        .main-timeline .timeline:nth-child(5n+2):after {
            border-color: #EF5720;
        }

        .main-timeline .timeline:nth-child(5n+2) .timeline-icon {
            color: #EA3C14;
        }

        .main-timeline .timeline:nth-child(5n+2) .timeline-year {
            color: #EA3C14;
        }

        .main-timeline .timeline:nth-child(5n+2) .title {
            color: #EA3C14;
        }

        .main-timeline .timeline:nth-child(5n+3):before {
            border-color: #8CC63E;
        }

        .main-timeline .timeline:nth-child(5n+3):after {
            border-color: #6CAF29;
        }

        .main-timeline .timeline:nth-child(5n+3) .timeline-icon {
            color: #8CC63E;
        }

        .main-timeline .timeline:nth-child(5n+3) .timeline-year {
            color: #8CC63E;
        }

        .main-timeline .timeline:nth-child(5n+3) .title {
            color: #8CC63E;
        }

        .main-timeline .timeline:nth-child(5n+4):before {
            border-color: #F99324;
        }

        .main-timeline .timeline:nth-child(5n+4):after {
            border-color: #FBB03B;
        }

        .main-timeline .timeline:nth-child(5n+4) .timeline-icon {
            color: #F99324;
        }

        .main-timeline .timeline:nth-child(5n+4) .timeline-year {
            color: #F99324;
        }

        .main-timeline .timeline:nth-child(5n+4) .title {
            color: #F99324;
        }

        .main-timeline .timeline:nth-child(5n+5):before {
            border-color: #0071BD;
        }

        .main-timeline .timeline:nth-child(5n+5):after {
            border-color: #0050A3;
        }

        .main-timeline .timeline:nth-child(5n+5) .timeline-icon {
            color: #0071BD;
        }

        .main-timeline .timeline:nth-child(5n+5) .timeline-year {
            color: #0071BD;
        }

        .main-timeline .timeline:nth-child(5n+5) .title {
            color: #0071BD;
        }

        @media screen and (max-width:1200px) {
            .main-timeline .timeline:after {
                border-radius: 88px 0 0 88px;
            }

            .main-timeline .timeline:nth-child(even):after {
                border-radius: 0 88px 88px 0;
            }
        }

        @media screen and (max-width:767px) {
            .main-timeline .timeline {
                margin-top: -19px;
            }

            .main-timeline .timeline:before {
                border-radius: 50px 0 0 50px;
                border-width: 10px;
            }

            .main-timeline .timeline:after {
                height: calc(100% - 18px);
                width: calc(50% - 9px);
                border-radius: 43px 0 0 43px;
                border-width: 10px;
                top: 9px;
                left: 9px;
            }

            .main-timeline .timeline:nth-child(even):before {
                border-radius: 0 50px 50px 0;
                border-width: 10px;
            }

            .main-timeline .timeline:nth-child(even):after {
                height: calc(100% - 18px);
                width: calc(50% - 9px);
                border-radius: 0 43px 43px 0;
                border-width: 10px;
                top: 9px;
                right: 9px;
            }

            .main-timeline .timeline-icon {
                font-size: 60px;
            }

            .main-timeline .timeline-year {
                font-size: 40px;
            }
        }

        @media screen and (max-width:479px) {
            .main-timeline .timeline-icon {
                font-size: 50px;
                transform: translateY(0);
                top: 25%;
                left: 10%;
            }

            .main-timeline .timeline-year {
                font-size: 25px;
                transform: translateY(0);
                top: 65%;
                left: 9%;
            }

            .main-timeline .content {
                width: 68%;
                padding: 10px;
            }

            .main-timeline .title {
                font-size: 18px;
            }

            .main-timeline .timeline:nth-child(even) .timeline-icon {
                right: 10%;
            }

            .main-timeline .timeline:nth-child(even) .timeline-year {
                right: 9%;
            }
        }
    </style>

    <!-- =======================================================
  * Template Name: Vesperr - v4.7.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html">Vesperr</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            @if (Route::has('login'))
                <nav id="navbar" class="navbar">
                    <ul>

                        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="#about">About</a></li>
                        <li><a class="nav-link scrollto" href="#services">Services</a></li>
                        <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                        <li><a class="nav-link scrollto" href="#team">Team</a></li>
                        <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>



                        <li><a href="{{ route('login') }}" class="getstarted scrollto" href="#about">Masuk</a></li>

                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            @endif

        </div>
    </header><!-- End Header -->
