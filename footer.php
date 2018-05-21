

<footer>

<div class="row" style="background-color:#90b644; ">
    <div class="col-sm-4">
            <ul>
            
            <?php
            //this loops the new nav links for the page
            if(@$footerlink1 !=""){
            foreach($footerlink1 as $x => $x_value) {
               
                echo "<li><a href=". $x_value .">". $x ."</a></li>";
                
            }
            }else{
                ?>
                

               <li><a href="#" class="anchor">Home</a></li>
                    <li><a href="about" class="anchor">About</a></li>
                   <li><a href="contact" class="anchor">contact</a></li>
                   <li><a href="register-school" class="anchor">Register a school</a></li>
                    
               <!-- <li><img src="images/Schoolsguidelogo.png"></li>
               --> 
            <?php }?>
            </ul>
                    
                 
    </div>
    <div class="col-sm-4">
            <ul>                   
            <?php
            //this loops the new nav links for the page
            if(@$footerlink2 !=""){
            foreach($footerlink2 as $x => $x_value) {
               
                echo "<li><a class=\"anchor\" href=". $x_value .">". $x ."</a></li>";
                
            }
            }else{
                ?>                    

               <!-- <li><img src="images/Schoolsguidelogo.png"></li> 
               
            </ul>
</div>-->
            <li><a href="blog" class="anchor">Blog</a></li>
                    <li><a href="review" class="anchor">Review</a></li>
                    <li><a href="about/#how" class="anchor">How to use</a></li>
                    <li><a href="contact" class="anchor">Contact us</a></li>
            <?php } ?>       
                    
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