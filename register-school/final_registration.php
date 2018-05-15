<?php
//adds links for the navigation
$navlink["Home"] = "../";
$navlink["Blog"] = "../blog";
$navlink["Contact"] = "../contact";

$navlink["Login"] = "../auth";

$extralinks = "
<link rel='stylesheet' href='assets/bootstrap/css/bootstrap.min.css'>
<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet'>
";
    //this adds the CSS to the page being included
$extracss = "
body{
    margin:0;
    padding:0;
    background-color: #effcf7;
}
footer{
    position: relative;
    width: 100%;
    bottom: -72px;
}
@media only screen and (min-width: 500px){
    
}
.form-group {
    margin: auto;
    padding: 20px;
    height: auto;
    background-color: #ffffff;
    width: auto;
    box-shadow: 0px 0px 20px -8px;

}
.input-group{
    margin: auto;
}
.input{
    border-radius: 5%;
    width: 100%;
    border-color: #6db7fe;
    padding: 10px;
    margin: 5px;
}
.btn-success{
    padding: 10px;
    width: 100%;
    margin: 10px;
    border: none;
    background-color: #08fb08;
    /* background-color: white; */
    color: white;
}

.plan {
    flex: 1;
    box-shadow: -1px 5px 16px -9px black;
    margin: 0 0px 20px 0;
    background: rgba(200, 200, 200, 0.15);
    padding: 3px 4px 50px 0;
    position: relative;
  }
  .plan ul{
      margin: 0px;
      padding: 20px;
  }
  .plan ul li{
      margin: 10px;
      list-style-type: none;
      text-align: center;
      font-family: 'PT Sans', sans-serif;
  }
  .col1-footer,.col2-footer,.col3-footer{
        width: 100%;
        height: 50px;
        text-align: center;
      


  }
  .plan .col1-footer button, .col2-footer button, .col3-footer button{
            border: none;
            margin: auto;
            font-size: 18px;
            
            background-color: #a2ecd0;
            color: #333;
            width: 100%;
            font-family: 'Passion One', cursive;
            border-bottom-left-radius: 6%;
            border-bottom-right-radius: 6%;
            height: 100%;
            padding: 10px;
  } 
  
  .col1{
      padding: 0;
      border-radius: 2%;
      background-color: #fbf8fa;
     
  }
  .col1-header{
        width: 100%;
        text-align: center;
        height: 110px;
        color: #ffffff;
        background-color: #5FDBAC;
  }
  .col1 h4{
      margin:0;
      font-size: 40px;
      padding: 20px;
      text-align: center;
  }
  .col2{
    border-radius: 2%;
    background-color: #f5eff5;
    padding: 0;

  }
  .col2-header{
        background-color: #54A7FB;
       
        color:#ffffff;
        height: 110px;
  }
  .col2-subtitle{
    background-color: #116fce;
  }
  .col2-subtitle h5{
    margin: 0;
    padding: 10px;
    color: #fff;
    text-align: center;
    
  }
  .col2 h4{
    padding: 20px;
    text-align: center;
    margin: 0;
    font-size: 40px;
}

.col3{
    border-radius: 2%;
    background-color: #f5eff5;
    padding: 0;

  }
  .col3-header{
        background-color: #D4AF37;
       
        color:#ffffff;
        height: 110px;
  }
  .col3-subtitle{
    background-color: #af8809;
  }
  .col3-subtitle h5{
    margin: 0;
    padding: 10px;
    color: #fff;
    text-align: center;
    
  }
  .col3 h4{
    padding: 20px;
    text-align: center;
    margin: 0;
    font-size: 40px;
}
";
?>
<?php include("../header.php"); ?>





<div class="container-fluid">

        <form action="" method="post">
           <div class="form-group">
                <h5>SCHOOL FEE RANGE</h5>
                <div class="input-group">               
                                
                            <label for="from">FROM
                                <select class="input form-control" name="from">
                                    <option> &#8358 1000</option>
                                </select>
                            </label>
                            <label for="from">TO
                                <select class="input form-control" name="to">
                                    <option> &#8358 100,000</option>
                                </select>
                            </label>
                </div>

               
                <div class="input-group">

                        <h5>School Profile</h5>
                        <textarea class="input"></textarea>
                
                </div>

                    <div class="input-group">

                        <h5>Contact Information</h5>
                        <textarea class="input"></textarea>

                    </div>

                    <div class="input-group">
                    <label for="school_facilitites">AVAILABLE SCHOOL FACILITIES</label>
                    <select name="school_facilitites" class="input form-control" >

                   <option>  Standard Multipurpose Hall
                   <option> Standard ICT Centre
                   <option>  Sport Complex and Playground
                   <option>  Standard Library
                   <option>  Swimming Pool
                   <option> School Bus Services
                   <option> Zoological/Botanical Garden
                    <option>  Sick Bay
                    <option>  Interactive Whiteboard
                    <option>  Children with Special Needs
                    <option>  Lunch Programme
                    <option>  Music Room
                    <option> Spacious Classrooms
                    <option>  Teacher : Pupils in Ratio 1:10
                  <option> Positive Education Ethics
                    </select>
                    </div>               
                    <div class="input-group">

                        <h5>Upload School Logo</h5> 
                       <button type="button" style="border: none;box-shadow: 0 0 7px -10px black;" onclick="document.getElementById('imgInp').click()">
                        <div class="box" style="width:120px;height:120px;    box-shadow: 0 0 6px black; border: 1px solid #0000005c;background:url(../images/click.png);background-size: cover;">
                        <img id="blah" src="#" alt="Logo" width="100%"height="100%">
                        </div>
                        </button>
                        
                      
                        <input type="file" class="input" class="form-control" id="imgInp">

                    </div>

                    <div class="input-group">
                   <center> <h3>SELECT A PLAN</h3></center>
                    <div class="plans">
                            <div class="plan col1">
                                   <div class="col1-header">
                                        <h4> FREE </h4>
                                   </div>
                                    <ul>

                                        <li> 6 Months Validity
                                        <li>Low Referral Priority </li>
                                        <li>Limited Gallery Images </li>
                                        
                                        <li>Seminars/Trainings</li>
                                       
                                       
                                        <li>Ratings/Reviews from parents and alumni</li>
                                        
                                   </ul>
                                   <div class="col1-footer">
                                   <button type="submit" name="free_plan">Choose Plan</button>
                                   </div>

                            </div>
                            <div class="plan col2">
                                <div class="col2-header">
                                    <h4> N20,000 </h4>
                                   
                                </div>
                                <div class="col2-subtitle"><h5>IDEAL PLAN</h5></div>
                                    <ul>

                                        <li>6 Months Validity</li>
                                        <li> High Referral Priority</li>
                                        <li> Unlimited Gallery Images</li>
                                        
                                        <li> 10% discount on Seminars/Trainings</li>
                                        <li>Academic Performance Tab</li>
                                        <li>Verified by our team of professionals </li>
                                        <li>Ratings/Reviews from parents and alumni</li>
                                   
                                   </ul>
                                   <div class="col2-footer">
                                        <button type="submit" name="ideal_plan">Choose plan</button>
                                   </div>
                            </div>
                            <div class="plan col3">
                                    
                            <div class="col3-header">
                                    <h4> N50,000 </h4>
                                   
                                </div>
                                <div class="col3-subtitle"><h5>PRESTIGE PLAN</h5></div>
                                    <ul>

                                        <li>6 Months Validity</li>
                                        <li> Highest Referral Priority</li>
                                        <li> Unlimited Gallery Images</li>
                                        <li>Homepage Features</li>
                                        <li> 20% discount on Seminars/Trainings</li>
                                        <li>Academic Performance Tab</li>
                                        <li>Verified by our team of professionals </li>
                                        <li>Ratings/Reviews from parents and alumni</li>
                                   
                                   </ul>
                                   <div class="col3-footer">
                                        <button type="submit" name="ideal_plan">Choose plan</button>
                                   </div>

                            </div>
                           
                    </div>
                        
                    </div>

           </div> 
        </form>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script>

        
    
            /* Set the width of the side navigation to 250px */
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            /* Set the width of the side navigation to 0 */
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }


                function readURL(input) {

                if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
                }
                }

                $("#imgInp").change(function() {
                readURL(this);
                });

                
</script>










<?php include_once("../footer.php"); ?>