<?php
//  adds the name of the page
$pname = "contact us";

//adds the links to the page
$extralinks = "
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.10/css/all.css\" integrity=\"sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg\" crossorigin=\"anonymous\">

";

//adds extra css styles to the included page
$extracss = " 
    header .navbar ul{
            font-size: 25px;

        }
        .search-button {
            position: relative;
        }
        .container-full{
            display: flex;
        }
        .f-half{
            display: block;
            width: 50%;
           
            height : 100%;
            background: linear-gradient(101.14deg, #89f7fe14 4.83%, #66abff38 77.32%) ,url(../images/contactus.jpg);
            background-size: cover;
            background-position: center;
        }
        .s-half{
            display: block;
            width: 50%;
            height : 100%;
            background: linear-gradient(101.14deg, #89f7fe14 4.83%, #66abff38 77.32%)
        }
        .info p {
            text-align:center;
            color: #999;
            text-transform:none;
            font-weight:600;
            font-size:15px;
            margin-top:2px
          }
          
          .info i {
            color:#F6AA93;
          }
          form h1 {
            font-size: 18px;
            background: #F6AA93 none repeat scroll 0% 0%;
            color: rgb(255, 255, 255);
            padding: 22px 25px;
            border-radius: 5px 5px 0px 0px;
            margin: auto;
            text-shadow: none; 
            text-align:left
          }
          
          form {
            border-radius: 5px;
            max-width:700px;
            width:100%;
            margin: 5% auto;
           
            overflow: hidden;
          }
          
          p span {
            color: #F00;
          }
          
          p {
            margin: 0px;
            font-weight: 500;
            line-height: 2;
            color:#333;
          }
          
          h1 {
            text-align:center; 
            color: #666;
            text-shadow: 1px 1px 0px #FFF;
            margin:50px 0px 0px 0px
          }
          .InputAddOn {
            display: flex;
          }
          
          .InputAddOn-field {
            flex: 1;
            /* field styles */
          }
          input {
            border-radius: 0px 5px 5px 0px;
            border: 1px solid #eee;
            margin-bottom: 15px;
            width: 75%;
            height: 40px;
            float: left;
            padding: 0px 15px;
          }
          
          a {
            text-decoration:inherit
          }
          
          textarea {
            border-radius: 0px 5px 5px 0px;
            border: 1px solid #EEE;
            margin: 0;
            width: 75%;
            height: 130px; 
            float: left;
            padding: 0px 15px;
          }
          
          .form-group {
            overflow: hidden;
            clear: both;
          }
          
          .icon-case {
            width: 35px;
            float: left;
            border-radius: 5px 0px 0px 5px;
            background:#eeeeee;
            height:42px;
            position: relative;
            text-align: center;
            line-height:40px;
          }
          
          i {
            color:#555;
          }
          
          .contentform {
            padding: 40px 30px;
          }
          
          .bouton-contact{
            background-color: #81BDA4;
            color: #FFF;
            text-align: center;
            width: 100%;
            border:0;
            padding: 17px 25px;
            border-radius: 0px 0px 5px 5px;
            cursor: pointer;
            margin-top: 40px;
            font-size: 18px;
          }
          
          .leftcontact {
            width:49.5%; 
            float:left;
            border-right: 1px dotted #CCC;
            box-sizing: border-box;
            padding: 0px 15px 0px 0px;
          }
          
          .rightcontact {
            width:49.5%;
            float:right;
            box-sizing: border-box;
            padding: 0px 0px 0px 15px;
          }
          
          .validation {
            display:none;
            margin: 0 0 10px;
            font-weight:400;
            font-size:13px;
            color: #DE5959;
          }
          
          #sendmessage {
            border:1px solid #fff;
            display:none;
            text-align:center;
            margin:10px 0;
            font-weight:600;
            margin-bottom:30px;
            background-color: #EBF6E0;
            color: #5F9025;
            border: 1px solid #B3DC82;
            padding: 13px 40px 13px 18px;
            border-radius: 3px;
            box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
          }
          
          #sendmessage.show,.show  {
            display:block;
          }
          @media only screen and (max-width: 768px){
            .container-full{
                display: block;
            }
            h1{
                margin: 0;
            }
            .f-half{
                width: 0px;
                display: none;
                
                
            }
            .s-half{
                height: 100%;
               width: 100%;
               
            }
        }
        
";

//adds links for the navigation
$navlink["Home"] = "../";
$navlink["About"] = "../about";
$navlink["Blog"] = "../blog";

$navlink["Register school"] = "../register-school";
$navlink["Login"] = "../auth";


include("../header.php");

?>


<div class="container-full">
    <div class="f-half">
        
    </div>
    <div class="s-half">
   
	  <h1>Reach out!</h1>
   <div class="info"><p>We would want to hear from you </p></div>
  
  <form>
	    
	    
    <div class="contentform">
    	<div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


    	<div class="leftcontact">
			      <div class="form-group">
			        <p>Surname<span>*</span></p>
			      
				        <input type="text" name="nom" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
                <div class="validation"></div>
       </div> 

            <div class="form-group">
            <p>Name <span>*</span></p>
            
				<input type="text" name="prenom" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."/>
                <div class="validation"></div>
			</div>

         
			<div class="form-group">
			<p>E-mail <span>*</span></p>	
			
                <input type="email" name="email" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire." class="InputAddOn-field"/>
                <div class="validation"></div>
			</div>	

			




	</div>

	<div class="rightcontact">	

			<div class="form-group">
			<p>City <span>*</span></p>
		
				<input type="text" name="ville" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                <div class="validation"></div>
			</div>	

			<div class="form-group">
			<p>Phone number <span>*</span></p>	
			
				<input type="text" name="phone" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
                <div class="validation"></div>
			</div>

		

			<div class="form-group">
			<p>Subject <span>*</span></p>	
			
                <input type="text" name="sujet" id="sujet" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Sujet' doit être renseigné."/>
                <div class="validation"></div>
			</div>
		
			<div class="form-group">
			<p>Message <span>*</span></p>
			
                <textarea name="message" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
                <div class="validation"></div>
			</div>	
	</div>
	</div>
<button type="submit" class="bouton-contact">Send</button>
	
</form>	


    </div>


</div>











<?php
include("../footer.php");

?>
<script>
	
	
    /* Set the width of the side navigation to 250px */
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

</script>
</body>
</html>