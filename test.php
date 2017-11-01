<!doctype html>

<html ng-app="agent" lang="en">

<head>
    <meta charset="utf-8">

    <title>Project Alice Agency</title>
    <meta name="SPG Agency, Usher Agency, Talent Agency" content="The HTML5 Herald">
    <meta name="AndrePR" content="SitePoint">

    <link rel="stylesheet" href="style/css/style.css">
    <link rel="stylesheet" href="plugins/slick.css">
    <link rel="stylesheet" href="plugins/animate.min.css">
    <link rel="stylesheet" href="plugins/normalize.min.css">
    <script src="js/angular.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>


    <header>
        <?php include 'top-menu.php';?>
    </header>

    <?php include 'nav.php';?>
    <div class="grid display">
        <div class="row left">

            <!-- START DISPLAY -->
            <div ng-controller="AgentController as agent" class="talent-container">
                <div ng-repeat="product in agent.products" class="card boxed" ng-class=" {{product.indexing}}">
                    <div class="actionlist">
                        <div id="id"><span>{{product.id}}</span></div>
                        <div class="addBtn">
                            <a href="#"><img src="assets/icons/plus.svg"></a>
                        </div>
                        <div class="loveBtn">
                            <a href="#"><img src="assets/icons/heart-in-a-circle.svg"></a>
                        </div>
                    </div>
                    <div class="media">
                        <!--<div class="overlay">
                    <button class="gallery moreBtn">STORY</button>
                </div>-->
                        <div><img id="slideShow" ng-src="{{product.images[0]}}"></div>
                        <div class="hide"><img id="slideShow" ng-src="{{product.images[1]}}"></div>
                        <div class="hide"><img id="slideShow" ng-src="{{product.images[2]}}"></div>

                    </div>
                    <div class="info">
                        <div id="name">{{product.name}}</div>
                        <div class="button medium">
                            <a href="#" class="moreBtn">MORE</a>
                        </div>
                    </div>

                    <div class="skills-thumb">
                        <a href="#" class="boxedMedium">{{product.skills[0]}}</a>
                        <a href="#" class="boxedMedium">{{product.skills[1]}}</a>
                        <a href="#" class="boxedMedium">{{product.skills[2]}}</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="spacer huge"></div>






    <div class="spacer huge"></div>

    <footer id="footer" class="#">
        <div class="row fopad">
            <div class="boxing gr-5">
                <div class="lg-footer logo">
                    <img src="assets/images/ALIS-DEER.svg">
                </div>
            </div>
            <div class="boxing gr-3-5">
                <div class="seo-footer">
                    <p>In-store promotions are an effective way of increasing brand and product awareness. The in-store promotions can vary from sampling products such as beauty, fragrances, food & liquor or demonstrating products such as electronics, kitchenware and sporting equipment. Our staff are also regularly involved in flash mobs, PR stunts and hospitality events within the stores.</p>
                </div>
            </div>
            <div class="boxing gr-2-4">

                <div class="sitemap">
                    <ul>
                        <h5 class="sitefooter">Sitemap</h5>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="howto-map">
                    <ul>
                        <h5 class="sitefooter">How To</h5>
                        <li><a href="#">Hire</a></li>
                        <li><a href="#">Bookings</a></li>
                        <li><a href="#">Create Project</a></li>
                        <li><a href="#">Create Event</a></li>
                        <li><a href="#">Client Zone</a></li>
                    </ul>
                </div>

            </div>

            <div class="boxing gr-5">



                <div class="social-sprites">
                    <ul>
                        <li class="facebook"><a href="#">Facebook</a></li>
                        <li class="twitter"><a href="#">Twitter</a></li>
                        <li class="googlep"><a href="#">Google+</a></li>
                        <li class="instagram"><a href="#">Instagram</a></li>
                    </ul>
                </div>

                <div class="payment-logo">
                    <ul>
                        <li class="bca"><a href="#">BCA</a></li>
                        <li class="visa"><a href="#">Visa</a></li>
                        <li class="mastercard"><a href="#">MasterCard</a></li>
                    </ul>
                </div>

            </div>


        </div>

        <div class="copyrights">
            <p>copyright ® 2017 nusatrip. all rights reserved.</p>
        </div>
    </footer>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/app.js"></script>
    <script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
    <script src="plugins/slick.js"></script>
    <script src="plugins/animatedModal.js"></script>
</body>

</html>
