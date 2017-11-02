<?php include 'header.php';?>


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




<?php include 'footer.php';?>
