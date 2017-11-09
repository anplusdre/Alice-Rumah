<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Project Alice Agency</title>
    <meta name="SPG Agency, Usher Agency, Talent Agency" content="The HTML5 Herald">
    <meta name="AndrePR" content="SitePoint">

    <link rel="stylesheet" href="style/css/style.css">
    <link rel="stylesheet" href="plugins/slick.css">
    <link rel="stylesheet" href="plugins/animate.min.css">
    <script src="js/angular.js"></script>
    <script>
        document.write('<base href="' + document.location + '" />');

    </script>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body ng-app="alice">
    <header ng-include src="'view/header.html'"></header>

    <div ng-include src="'view/nav.html'"></div>

    <div class="grid display">
        <div class="row left">
            <div ng-include src="'view/home.html'"></div>
        </div>
    </div>

    <div class="spacer huge"></div>

    <div ng-include src="'view/footer.html'"></div>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.js">
        $.noConflict();

    </script>
    <script src="js/app.js"></script>
    <script src="js/ui-router.js"></script>
    <script src="plugins/slick.js"></script>
    <script src="js/angular-route.min.js"></script>
    <!--<script src="js/app.js"></script>-->
</body>

</html>
