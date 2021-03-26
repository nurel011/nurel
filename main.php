<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>nurel abdumanapov</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { margin: 0 auto; padding: 0px; font-family: 'Akrobat'; } .bgcolor { width: 100%; height: 100%; z-index: -100; position: absolute; } .logotype { max-width: 200px; max-height: 150px; margin-top: 70px; position: relative; z-index: 20; } .caption { z-index: 20; } .caption h4 { color: #f8b410; text-transform: uppercase; letter-spacing: 2px; font-family: 'Akrobat'; margin-top: 90px; font-weight: bold; } .btn { width: 60px; height: 60px; background-color: black; position: fixed; z-index: 100; cursor: pointer; top: 70px; } .btn div { display: block; } .btn:before, .btn:after { content: ""; position: absolute; width: 0; height: 0; opacity: 0; -webkit-box-sizing: border-box; -o-box-sizing: border-box; box-sizing: border-box; } .btn:before { bottom: 0; left: 0; border-left: 1px solid white; border-top: 1px solid white; border-radius: 4px; -webkit-transition: 0s ease opacity .8s, .2s ease width .4s, .2s ease height .6s; -o-transition: 0s ease opacity .8s, .2s ease width .4s, .2s ease height .6s; transition: 0s ease opacity .8s, .2s ease width .4s, .2s ease height .6s; } .btn:after { top: 0; right: 0; border-right: 1px solid white; border-bottom: 1px solid white; border-radius: 4px; -webkit-transition: 0s ease opacity .4s, .2s ease width, .2s ease height .2s; -o-transition: 0s ease opacity .4s, .2s ease width, .2s ease height .2s; transition: 0s ease opacity .4s, .2s ease width, .2s ease height .2s; } .btn:hover:before, .btn:hover:after { height: 100%; width: 100%; opacity: 1; } .btn:hover:before { -webkit-transition: 0s ease opacity 0s, .2s ease height, .2s ease width .2s; -o-transition: 0s ease opacity 0s, .2s ease height, .2s ease width .2s; transition: 0s ease opacity 0s, .2s ease height, .2s ease width .2s; } .btn:hover:after { -webkit-transition: 0s ease opacity .4s, .2s ease height .4s, .2s ease width .6s; -o-transition: 0s ease opacity .4s, .2s ease height .4s, .2s ease width .6s; transition: 0s ease opacity .4s, .2s ease height .4s, .2s ease width .6s; } .sandwich { width: 45px; height: 22px; position: absolute; top: 17px; left: 7px; z-index: 150; } .sw-top, .sw-mid, .sw-foot { width: 45px; height: 3px; background: #ffffff; position: relative; border: none; } .sw-top { top: 1px; background: rgb(255, 255, 255); border: none; border-radius: 4px 4px 4px 4px; -webkit-transition: top 0.2s, -webkit-transform 0.5s; transition: top 0.2s, -webkit-transform 0.5s; -o-transition: transform 0.5s, top 0.2s; transition: transform 0.5s, top 0.2s; transition: transform 0.5s, top 0.2s, -webkit-transform 0.5s; transition: transform 0.5s, top 0.2s, -webkit-transform 0.5s; } .sw-mid { top: 7px; background: rgb(255, 255, 255); border: none; border-radius: 4px 4px 4px 4px; -webkit-transition: top 0.2s, -webkit-transform 0.5s; transition: top 0.2s, -webkit-transform 0.5s; -o-transition: transform 0.5s, top 0.2s; transition: transform 0.5s, top 0.2s; transition: transform 0.5s, top 0.2s, -webkit-transform 0.5s; } .sw-foot { top: 13px; background: rgb(255, 255, 255); border: none; border-radius: 4px 4px 4px 4px; -webkit-transition: all 0.5s; -o-transition: all 0.5s; transition: all 0.5s; -webkit-transition-delay: 0.1s; -o-transition-delay: 0.1s; transition-delay: 0.1s; } .top-txt { position: absolute; width: 100% !important; height: 100% !important; top: 0; left: 0; } .top-sur:before { content: ""; display: inline-block; height: 40%; vertical-align: middle; } .top-sur { height: 100%; } .top-sur div { vertical-align: middle; } .sandwich.active .sw-top { top: 10px; -webkit-transform: rotate(135deg); -ms-transform: rotate(135deg); transform: rotate(135deg); } .sandwich.active .sw-mid { top: 7px; -webkit-transform: rotate(-135deg); -ms-transform: rotate(-135deg); transform: rotate(-135deg); } .sandwich.active .sw-foot { opacity: 0; top: 0; -webkit-transform: rotate(180deg); -ms-transform: rotate(180deg); transform: rotate(180deg); } .top-sur h1 { color: #f8b410; text-transform: uppercase; border: 4px solid #fff; padding: 15px 20px; font-family: 'Akrobat'; letter-spacing: 3px; margin-bottom: 150px; display: inline-block; } .top-txt p { color: #f8b410; font-size: 18px; font-family: 'Akrobat'; letter-spacing: 3px; font-weight: bold; display: inline-block; text-align: center; }
    </style>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="icon" type="images/x-icon" href="img/logo.ico">
    <!--chart-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.malihu.PageScroll2id.min.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
    <div class="wrapper">
        <!-- ШАПКА -->
        <header id="header" style="background: white;">
            <img src="https://s23527.pcdn.co/wp-content/uploads/2019/12/Downside-Up-745x449.jpg.optimal.jpg" alt="Фон" class="bgcolor">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-4 logotype">
                        <a href="https://instagram.com/nurel011"><img src="" alt="">&nbsp;</a>
                    </div>
 
                    <div class=" col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-10 col-xs-offset-1 caption text-center wow fadeInDown" data-wow-offset="150">
                        <h4 class="titl">САЙТ-ПОРТФОЛИО молодого бизнесмена</h4>
                    </div>
                 <div>
                 img    
                 <div/>
                 
                    <div class="top-txt">
                        <div class="top-sur text-center">
                            <div>
                                <h1>nurel abdumanapov</h1>
                           
                                <p class="top-text wow fadeInUp" data-wow-offset="150">бизнесмен / начинающий актер</p>
                                <br>
                                <p class="top-text wow fadeInUp" data-wow-offset="150">/блогер</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
      

</body>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/jquery.circliful.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/jquery.circliful.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/mixitup.min.js"></script>

</html>
