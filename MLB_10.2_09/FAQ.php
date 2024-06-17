<?php
    include_once 'config.php';
?>
<!DOCTYPE html>
<html>
    <head> 
        <title>CoralReef.com</title>
        <link rel="stylesheet"  href="HRS_styles.css">
        <script src="HRS_JAVA.js"></script>
    </head>
    <body>
        <header class="Header">
            <h1>Coral Reef Resort</h1>
            <img src = "images/logo.png" class="logo" width = "200 px" height = "50 px" >
            <ul class="ul1">
            <li class="li1"><a class="active" href="HRS_html.html"><b>Home</b></a></li>
            <li class="li1"><a href="Help.html"><b>Help</b></a></li>
            <li class="li1"><a href="Contact.html"><b>Contact</b></a></li>
            <li class="li1"><a href="AboutUs.html"><b>About Us</b></a></li>
            
            </ul>
        </header>
        <hr>
        <section class="sec2">
            <h1 class="faq-heading"><b>FAQ! Need Help?</b></h1>
            <h3 class="faq-para"><b>We've got you covered</b></h3>
            <section class="faq-container">
                <div class="faq-one">
                    <!-- faq question -->
                    <h1 class="faq-page1">How to make a reservation for a BirthDay Party?</h1>
                    <!-- faq answer -->
                    <div class="faq-body1">
                        <p>First you have to create an account if you are not a member of our "CoralReef Community".If you are alredy an authorized 
                            member of our "CoralReef Community" you are fully privileged to access our outstanding services.You can access our 
                            website using your credentials and choose from variety of Banquet Halls, Preferred Buffet and all other services provided 
                            by CoralReefResort.
                        </p>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="faq-two">
                    <!-- faq question -->
                    <h1 class="faq-page2">How can I make a Payment?</h1>
                    <!-- faq answer -->
                    <div class="faq-body2">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                            necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                            aperiam.
                            Perspiciatis, porro!</p>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="faq-three">
                    <!-- faq question -->
                    <h1 class="faq-page3">Do I recieve a refund in a cancellation within 2 weeks of reservation?</h1>
                    <!-- faq answer -->
                    <div class="faq-body3">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                            necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                            aperiam.
                            Perspiciatis, porro!</p>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="faq-four">
                    <!-- faq question -->
                    <h1 class="faq-page4">Is there any related Resorts in your Resort chain?</h1>
                    <!-- faq answer -->
                    <div class="faq-body4">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                            necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                            aperiam.
                            Perspiciatis, porro!</p>
                    </div>
                </div><br>

                <center>
                    <h2>Any Concerns?</h2>
                    <form action = "submitFAQ.php" method="post">
                        Your Question<br>
                        <textarea name="field1" rows="5" cols="50"></textarea><br>
                        </form>

                    <?php

                    $sql = "select Description from faq";
                    $result = $conn->query($sql);

                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                            echo"textarea".$row ["Description"];
                        }
                    }
                    else{
                        echo"Empty Box";
                    }

                    mysqli_close($conn);

                    
                    
                    ?>
                </center>
                

            </section>
</section>
<hr>
        <footer class="footer">
            <img src = "images/logo.png" class="logo_1" width = "200 px" height = "50 px" >
                <div class="footercontent">
                    <p>&copy; 2023 Coral Reef Resort. All rights reserved.</p>
                    <p>Contact us: info@CoralReefResort.com | +94-123-456-7890</p>
                </div>
                
            
        </footer>
    </body>
</html>
