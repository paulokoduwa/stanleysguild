
<footer>
    <div class="container footer-container">
        <section class="section1 l">
            <ul style="">
            <?php
            //this loops the new nav links for the page
            if(@$footerlink1 !=""){
            foreach($footerlink1 as $x => $x_value) {
               
                echo "<li><a href=". $x_value .">". $x ."</a></li>";
                
            }
            }else{
                ?>
                <li><a href="">Home</a></li>


<!--
<footer>
        <div class="row">
            <div class="col-sm-4">
            <ul style="">
                <li><a href="#">Home</a></li>

                <li><a href="about">About</a></li>
               <li><a href="contact">contact</a></li>
               <li><a href="register-school">Register a school</a></li>
                

               <!-- <li><img src="images/Schoolsguidelogo.png"></li>
               --> 
            <?php }?>
            </ul>
        </section>

        <section class="section2 l">
            
            <ul>     
            <?php
            //this loops the new nav links for the page
            if(@$footerlink2 !=""){
            foreach($footerlink2 as $x => $x_value) {
               
                echo "<li><a href=". $x_value .">". $x ."</a></li>";
                
            }
            }else{
                ?>                    

               <!-- <li><img src="images/Schoolsguidelogo.png"></li> 
               
            </ul>
</div>

        <div class="col-sm-4"> 
            <ul>                          

                <li><a href="blog">Blog</a></li>
                <li><a href="review">Review</a></li>
                <li><a href="about/#how">How to use</a></li>
                <li><a href="contact">Contact us</a></li>

            <?php } ?>
            </ul>
        </section>

        <section class="section3 l">
            <ul style="margin-bottom: 0;
                 padding-bottom: 10px;">

            </ul>
</div>

        <div class="col-sm-4">
            <ul>

                 <li><h4  style="margin: 0px; color: #fff;">Contact Info</h4></li> 
               
                <li><span class="title">Address:</span><span  class="contact-info"> 34, Newton street, Benin city</span></li>
                <li><span class="title">Email:</span><span  class="contact-info"> info@proschoolguide.com</span></li>
                <li><span class="title">Phone:</span><span  class="contact-info">08036376025, 07057911177</span></li>
            </ul>

        </section>
        
    </div>

</div>
        
    </div>
    <footer>


    <div class="social">
        <ul>
        <li style="color: blue;"><a href="" style="color: blue;"><i class="fab fa-facebook-square"></i></a> </li> 
        <li style="color: pink;"><a href="" style="color: pink;"><i class="fab fa-instagram"></i></a></li> 
        <li style="color: #0084b4;"><a href="" style="color: #0084b4;"><i class="fab fa-twitter-square"></i></a> </li> 
        <li style="color: red;"><a href="" style="color: red;"><i class="fab fa-youtube"></i></a></li> 
        </ul>
        </div>

</footer> -->

<footer>

<div class="row" style="background-color:#90b644; ">
    <div class="col-sm-4">
            <ul>
                    <li><a href="#" class="anchor">Home</a></li>
                    <li><a href="about" class="anchor">About</a></li>
                   <li><a href="contact" class="anchor">contact</a></li>
                   <li><a href="register-school" class="anchor">Register a school</a></li>
                    
                   <!-- <li><img src="images/Schoolsguidelogo.png"></li> -->
                   
            </ul>
    </div>
    <div class="col-sm-4">
            <ul>                          
                    <li><a href="blog" class="anchor">Blog</a></li>
                    <li><a href="review" class="anchor">Review</a></li>
                    <li><a href="about/#how" class="anchor">How to use</a></li>
                    <li><a href="contact" class="anchor">Contact us</a></li>
                </ul>
    
    
    
        </div>
        <div class="col-sm-4">
                <ul >
                        <li style="color: white !important;"> <h4>Contact Info</h4></li> 
                    
                       <li style="color: white !important;"> 34, Newton street, Benin city</li>
                       <li style="color: white !important;"> info@proschoolguide.com</li>
                       <li style="color: white !important;">08036376025, 07057911177</li>
                   </ul>
            </div>

</div>
<div class="row bg-light">
<div class="col-sm-12 col-xs-12" style="text-align: center">

            <h4>Social Media handles</h4>

            <!-- Add font awesome icons -->
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
    </div>
</div>
</div>

    


    

</footer>