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
                        <a href="#talentData" class="moreBtn">MORE</a>
                    </div>
                </div>

                <div class="skills-thumb">
                    <a href="#" class="boxedMedium">{{product.skills[0]}}</a>
                    <a href="#" class="boxedMedium">{{product.skills[1]}}</a>
                    <a href="#" class="boxedMedium">{{product.skills[2]}}</a>
                </div>
            </div>


            <div class="modalData" id="talentData">
                <div class="modalOverlay"></div>
                <div class="contentData">
                    <div class="dataContainer">
                        <div class="gr-2 gallery">
                            <div id="gallery-img">
                                <img src="">
                            </div>
                        </div>
                        <div class="gr-2 biodata">
                        </div>
                    </div>
                    <a href="#" id="closeData">X</a>
                </div>
            </div>


        </div>

    </div>
</div>

<div class="spacer huge"></div>


<div class="tabCard">
    <div class="verticalTabs">
        <div class="tabHeader active">
            <div class="tabText"><img src="assets/icons/manager.svg"></div>
        </div>
        <div class="tabHeader">
            <div class="tabText">Tab 2</div>
        </div>
        <div class="tabHeader">
            <div class="tabText">Tab 3</div>
        </div>
        <div class="tabHeader">
            <div class="tabText">Tab 4</div>
        </div>
        <div class="tabHeader">
            <div class="tabText">Tab 5</div>
        </div>
        <div class="tabHeader">
            <div class="tabText">Tab 6</div>
        </div>
    </div>
    <div class="textHolder">
        <div class="tabTitle">First Tab</div>
        <div class="textBody">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat pharetra magna at ultricies. Morbi bibendum suscipit urna. Sed interdum orci ipsum, non ornare sem mattis sed. Praesent sagittis turpis in sollicitudin pellentesque. Mauris non aliquet dolor. Duis rhoncus orci augue, ut tincidunt enim egestas ac. Morbi ut bibendum metus. Praesent in scelerisque dolor, eu porttitor felis. Curabitur non orci lectus. Maecenas ac ligula vel dui lobortis condimentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</div>
    </div>
</div>


<?php include 'footer.php';?>
