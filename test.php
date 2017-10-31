<?php include 'header.php';?>
   
    <header>
        <?php include 'top-menu.php';?>
    </header>

    <?php include 'nav.php';?>
    
    
<?php

mysql_connect("localhost","root","");
mysql_select_db("display_data");
$res=mysql_query("select * from data1");

while($row=mysql_fetch_array($res))
{
    $Image=$row["photo"];
}

?>    

    <div class="grid display">
        <div class="row center">
            <div class="card boxed">
                <div class="actionlist">
                    <div id="id"><span>US-3345</span></div>
                    <div class="addBtn">
                        <a href="#"><img src="assets/icons/plus.svg"></a>
                    </div>
                    <div class="loveBtn">
                        <a href="#"><img src="assets/icons/heart-in-a-circle.svg"></a>
                    </div>
                </div>
                <div class="media">
                    <img id="jasmine"  src="$Image">
                </div>
                <div class="info">
                    <div id="name">Marlon Alves</div>
                    <div class="button medium">
                        <a href="#" class="moreBtn">MORE</a>
                    </div>
                </div>
                
                <div class="skills-thumb">
                        <a href="#" class="boxedMedium">Usherette</a>
                        <a href="#" class="boxedMedium">Escort</a>
                        <a href="#" class="boxedMedium">Modeling</a>
                </div>
            </div>

       <div class="card boxed">
                <div class="actionlist">
                    <div id="id"><span>US-0233</span></div>
                    <div class="addBtn">
                        <a href="#"><img src="assets/icons/plus.svg"></a>
                    </div>
                    <div class="loveBtn">
                        <a href="#"><img src="assets/icons/heart-in-a-circle.svg"></a>
                    </div>
                </div>
                <div class="media">
                    <img src="assets/images/Anda.jpg">
                </div>
                <div class="info">
                    <div id="name">Marlon Alves</div>
                    <div class="button medium">
                        <a href="#" class="moreBtn">MORE</a>
                    </div>
                </div>
                
                
                
                <div class="skills-thumb">
                        <a href="#" class="boxedMedium">Usherette</a>
                        <a href="#" class="boxedMedium">Escort</a>
                        <a href="#" class="boxedMedium">Modeling</a>
                </div>
            </div>
            
            <div class="card boxed">
                <div class="actionlist">
                    <div id="id"><span>US-9211</span></div>
                    <div class="addBtn">
                        <a href="#"><img src="assets/icons/plus.svg"></a>
                    </div>
                    <div class="loveBtn">
                        <a href="#"><img src="assets/icons/heart-in-a-circle.svg"></a>
                    </div>
                </div>
                <div class="media">
                    <img src="assets/images/AnneD8.jpg">
                </div>
                <div class="info">
                    <div id="name">Marlon Alves</div>
                    <div class="button medium">
                        <a href="#" class="moreBtn">MORE</a>
                    </div>
                </div>
                
                
                
                <div class="skills-thumb">
                        <a href="#" class="boxedMedium">Usherette</a>
                        <a href="#" class="boxedMedium">Escort</a>
                        <a href="#" class="boxedMedium">Modeling</a>
                </div>
            </div>
            
            
            <div class="card boxed">
                <div class="actionlist">
                    <div id="id"><span>US-3345</span></div>
                    <div class="addBtn">
                        <a href="#"><img src="assets/icons/plus.svg"></a>
                    </div>
                    <div class="loveBtn">
                        <a href="#"><img src="assets/icons/heart-in-a-circle.svg"></a>
                    </div>
                </div>
                <div class="media">
                    <img src="assets/images/BrunaD17.jpg">
                </div>
                <div class="info">
                    <div id="name">Marlon Alves</div>
                    <div class="button medium">
                        <a href="key.php" class="moreBtn">MORE</a>
                    </div>
                </div>
                
                
                
                <div class="skills-thumb">
                        <a href="#" class="boxedMedium">Usherette</a>
                        <a href="#" class="boxedMedium">Escort</a>
                        <a href="#" class="boxedMedium">Modeling</a>
                </div>
            </div>

            
            
            
            
        </div>
    </div>
    

    <div class="spacer huge"></div>

    <script src="js/script.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/tilt.jquery.js"></script>
</body>

</html>