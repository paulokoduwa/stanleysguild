

<?php
//this is the page name
$pname = "Registration page";

$extralinks = '
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="profile_school.css">';

//this adds the CSS to the page being included
$extracss = "
#nav_id {
  max-width: 960px;
  margin: 0 auto;
}
";

//adds links for the navigation
$navlink["Home"] = "../";
$navlink["Blog"] = "../blog";
$navlink["Contact"] = "../contact";

$navlink["Login"] = "../auth";




include("../header.php"); ?>

  <div id="nav_id" class="container">
    <div class="row">
      <div class="col-lg-12">


        <ul class="nav nav-tabs horizontal">
          <li class="active">
            <a data-toggle="tab" href="#home">Sign Up</a>
          </li>
          <li>
            <a data-toggle="tab" href="#menu1">About your school</a>
          </li>
          <li>
            <a data-toggle="tab" href="#menu2">Attraction</a>
          </li>
          <li>
            <a data-toggle="tab" href="#menu3">Choose a package</a>
          </li>
        </ul>

        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <form method="post" action="../php/process_reg_form.php">

              <div class="form-group">
                <label for="sel1">Select Your Title:</label>
                <select class="form-control" id="sel1" name="title">
                  <option vaue="Mr.">Mr.</option>
                  <option value="Mrs">Mrs</option>
                  <option value="Dr.">Dr.</option>
                  <option value="Ms.">Ms.</option>
                </select>
              </div>

              <div class="form-group">
                <label for="F_name">First Name:</label>
                <input type="text" class="form-control" name="f_name" id="F_name">
              </div>

              <div class="form-group">
                <label for="L_name">Last Name:</label>
                <input type="text" class="form-control" name="l_name" id="L_name">
              </div>
              <div class="form-group">
                <label for="email">Email Address (school Co-ordinator)</label>
                <input type="email" class="form-control" name="coordinator_email" id="email">
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="pwd" id="password">
              </div>
              <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" class="form-control" name="pwd_confirm" id="c_password">
              </div>
              <div class="form-group">
                <label for="tel">Tel:</label>
                <input type="tel" class="form-control" id="tel" name="coordinator_tel">
              </div>
              <div id="">
                <a href="#" role="button">
                  <a type="button" data-toggle="tab" href="#menu1" class="btn btn-primary btn-lg btn-block" id="btn_nxt1">Next >></a>
                </a>
              </div>
           <script>

             


           </script>
         
           


          </div>

          
      <!-- about your school-->
          <div id="menu1" class="tab-pane fade">

            
              <div class="form-group">
                <label for="school_name">School Name</label>
                <input type="text" class="form-control" id="school_name">
              </div>
              <div class="form-group">
                <label for="school_fee"> Choose your School fee range per term</label>

                <select class="form-control">
                  <option value="free for pre-intake">Free for pre-intake</option>
                  <option value="N 25,000 and below">₦ 0 - ₦25,000</option>
                  <option value="N 26,000 - 100,000">₦ 26,000 - ₦ 100,000</option>
                  <option value="N 101,000 - 200,000">₦ 101,000 - ₦ 200,000</option>
                  <option value="N 201,000 - 300,000">₦ 201,000 - ₦ 300,000</option>
                  <option value="N 301,000 - 500,000">₦ 301,000 - ₦ 500,000</option>
                  <option value="N 501,000 - 750,000">₦ 501,000 - ₦ 750,000</option>
                  <option value="N 751,000 - N 1,000,000">₦ 751,000 - ₦ 1,000,000</option>
                  <option value="N 1,000,000 And Above">₦ 1,000,000 And Above</option>
                </select>
              </div>
              <div class="form-group">
                <label for="school_motto">School motto:</label>
                <input type="text" class="form-control" id="school_motto" placeholder="Faith and Honour">
              </div>
              <div class="form-group">
                <label for="educational_level">Select your school level(s) </label>
                <br>
                <input class="form-check-inline" type="checkbox" name="school_level[]" value="primaryschool"> Creche, Daycare, Nusery, and Primary
                <br>
                <input class="form-check-inline" type="checkbox" name="school_level[]" value="sec_school"> secondary school and Advance class
                <br> Others
                <input type="text" class="form-inline" name="school_level_other" id="others">
                </select>
              </div>
              <div class="form-group">
                <label for="school_type">School type:</label>
                <select class="form-control" name="school_type">
                  <option value="day">Day</option>
                  <option value="boarding">Boarding</option>
                  <option value="boarding_and_day">Boarding and Day</option>
                  <option value="part_time">Part-time</option>
                  <option value="home_study">Home Study</option>
                </select>
              </div>
              <div class="form-group">
                <p>Whats makes your school unique </p>
                <textarea rows="5" class="form-control" name="what_mksunique" id="school_details" placeholder="Our school put the child first in anything we do"></textarea>
              </div>
              <h4>School Contact Details</h4>

              <div class="form-group">
                <label for="state">State:</label>
                <select name="state" id="states" required="required">
                  <option value="">(Select State)</option>
                  <option value="Edo">Edo</option>
                  <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="Akwa_Ibom">Akwa Ibom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross_River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="FCT">FCT</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nassarawa">Nassarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamfara</option>
                </select>
              </div>
              <div class="form-group">
                <label for="school_city">City</label>
                <input type="text" class="form-control" name="school_city" maxlength="50" placeholder="enter your school City" required>
              </div>
              <div class="form-group">
                <label for="school_Area">Area</label>
                <input type="text" class="form-control"name="school_area" maxlength="50" placeholder="enter your school Area">
              </div>
              <div class="form-group">
                <label for="school_landmark">
                  Landmark:
                </label>
                <input class="form-control" type="text" name="school_landmark" placeholder="enter a Landmark" maxlength="200">
              </div>

              <div class="form-group">
                <label for="school_address">
                  School Address:
                </label>
                <input type="text" class="form-control" maxlength="300" name="school_address" placeholder="enter your school address" required>
              </div>
              <div class="form-group">
                <label for="school_email">School email address</label>
                <input type="email" class="form-control" maxlength="50" name="school_email" placeholder="enter school email address" required>
              </div>
              <div class="form-group">
                <label for="school_phone">School telephone </label>
                <input type="tel" class="form-control" maxlength="50" placeholder="+234XXXXXXXXXX" required>
              </div>
              <div class="btn-group">
            <a data-toggle="tab" href="#menu1" class="btn btn-primary"><< Back</a>
            <a data-toggle="tab" href="#menu2" class="btn btn-primary">Next >></a>
            
            </div>
          </div>
        
      
      
<div id="menu2" class="tab-pane fade">

  <div class="col-lg-6">
    <!-- this is the beginning of the heading for column 1-->

      
         <div class="form-group">
          <label for="school_website">School Website:</label>
          <input type="text" class="form-control" maxlength="300" placeholder="Enter your school website">
        </div>
   
      <div class="form-group">
        <label for="school_curriculum">School curriculum type:</label>
          <select name="curriculum" id="fees">
              <option value="Nigerian">Nigerian</option>
              <option value="American Nigerian">American Nigerian</option>
              <option value="British Nigerian">British Nigerian</option>
              <option value="Canadian English">Canadian English</option>
              <option value="British">British</option>
              <option value="British American">British American</option>
              <option value="Canadian Nigerian">Canadian Nigeria</option>
              <option value="Indian">Indian</option>
              <option value="STEM">STEM</option>
              <option value="Broadbased">Broadbased</option>
              <option value="American">American</option>
              <option value="Montessori">Montessori</option>
         </select>
  </div>


      <div class="form-group">
      <label for="edu_scope">Educational Scope:</label> 

      <div class="checkbox"><label for="edu_1"><input type="checkbox" name="edu_scope[]" id="edu_id_2" value="secondary"> Secondary</label></div>
      <div class="checkbox"><label for="edu_3"><input type="checkbox" name="edu_scope[]" id="edu_id_3" checked="checked" value="primary">Primary </label></div>
      <div class="checkbox"><label for="edu_4"><input type="checkbox" name="edu_scope[]" id="edu_id_4" value="after_school_lectures"> After school lectures</label></div>
      <div class="checkbox"><label for="edu_5"><input type="checkbox" name="edu_scope[]" id="edu_id_5" checked="checked" value="nursery"> Nursery</label></div>
      <div class="checkbox"><label for="edu_6"><input type="checkbox" name="edu_scope[]" id="edu_id_6" value="toddler"> Toddler</label></div>
      <div class="checkbox"><label for=""><input type="checkbox" name="edu_scope[]" value="creche_daycare" id=""> Creche/Daycare</label></div>
      </div>
      <div class="form-group">
      <label for="website">School Facilities:</label>
      <p class="alert alert-info">
      Do select facilities that your have presently in your school
      </p>
      <div class="checkbox"><label for=""><input type="checkbox" name="school_facilities[]" id="" checked="checked"value="positive education ethics"></label>Positive Education Ethics</div>
      <div class="checkbox"><label for=""><input type="checkbox" name="school_facilities[]" id="" value="Teacher: Pupils in Ratio 1:10"></label>Teacher: Pupils in Ratio 1:10</div>
      <div class="checkbox"><label for=""><input type="checkbox" name="school_facilities[]" id="" checked="checked" value="Spacious Classrooms"></label>Spacious Classrooms</div>
      <div class="checkbox"><label for=""><input type="checkbox" name="school_facilities[]"id="" value="Music Room"></label>Music Room</div>
      <div class="checkbox"><label for=""><input type="checkbox" name="school_facilities[]" id="" value="Lunch Programme"></label>Lunch Programme</div>
      <div class="checkbox"><label for=""><input type="checkbox" name="school_facilities[]" id="" value="Children with Special Needs"></label>Children with Special Needs</div>
      <div class="checkbox"><label for=""><input type="checkbox" name="school_facilities[]" id="" value="Interactive Whiteboard"></label>Interactive Whiteboard</div>
      <div class="checkbox"><label for=""><input type="checkbox" name="school_facilities[]" id="" value="Sick Bay"></label>Sick Bay</div>
      <div class="checkbox"><label for=""><input type="checkbox" name="school_facilities[]" id="" value="Zoological/Botanical Garden"></label>Zoological/Botanical Garden</div>
      <div class="checkbox"><label for=""><input type="checkbox" name="school_facilities[]" id="" value="School Bus Services"></label>School Bus Services </div>
      <div class="checkbox"><label for=""><input type="checkbox" name="school_facilities[]" id="" value="Swimming Pool"></label>Swimming Pool</div>
      <div class="checkbox"><label for=""><input type="checkbox" name="school_facilities[]" id="" checked="checked" value="Standard Library"></label>Standard Library</div>
      <div class="checkbox"><label for=""><input type="checkbox" name="school_facilities[]" id="" value="Sport Complex and Playground"></label>Sport Complex and Playground</div>
      <div class="checkbox"><label for=""><input type="checkbox" name="school_facilities[]" id="" value="Standard ICT Centre"></label>Standard ICT Centre</div>
      <div class="checkbox"><label for="">
        <input type="checkbox" name="school_facilities[]" id="" checked="checked" value="Standard Multipurpose Hall">
      </label>Standard Multipurpose Hall</div>  


<div class="form-group">
<label for="website">Club Activities</label>
<p class="alert alert-info">
Tick special activities that children in your school take part in:
</p>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" checked="checked"></label>Music and Drama</div>

<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="Art and Craft"></label>Art and Craft</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" checked="checked" value="Chess"></label>Chess</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="Ballet"></label>Ballet</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="Taekwondo"></label>Taekwondo</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="Dabate/Press"></label>Dabate/Press</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id=""value="Maths"></label>Maths</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="Foreign Language"></label>Foreign Language</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="Instruments Training"></label>Instruments Training</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="Spelling Bee"></label>Spelling Bee </div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="Aerobics"></label>Aerobics</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="Etiquette" checked="checked"></label>Etiquette</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="Yoruba"></label>Yoruba</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="Drawing and Painting"></label>Drawing and Painting</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value=">Young Life Savers (First Aiders)" checked="checked"></label>Young Life Savers (First Aiders)</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="Football Club"></label>Football Club</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="Basketball Club"></label>Basketball Club</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="ICT Club"></label>ICT Club</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="French"></label>French</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id="" value="Hausa"></label>Hausa</div>
<div class="checkbox"><label for=""><input type="checkbox" name="club_activities[]" id=""value="Igbo"></label>Igbo</div>
</div>







<!-- this is the ending of column 2, doing this cos am missing my div-->
</div>

  <div class="col-sm">
  
  <!-- this is the beginning of column 2, doing this cos am missing my div-->



    <div class="form-group">
        <label for="website">Extra Curricular Activities</label>
        <p class="alert alert-info">
        Tick extra activities that applies to your school
        </p>
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id="" checked="checked" value="Inter-House Sports"></label>Inter-House Sports</div>
        
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id="" value="Special Music Class"></label>Special Music Class</div>
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id="" checked="checked"  value="Quiz/Debate/Spelling Bee">Quiz/Debate/Spelling Bee</label>Chess</div>
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id=""  value="French or foreign languages"></label>French or foreign languages</div>
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id=""  value="Colour Day"></label>Colour Day</div>
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id=""  value="Debate/Press"></label>Debate/Press</div>
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id=""  value="Costume Day"></label>Costume Day</div>
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id=""  value="Dance"></label>Dance</div>
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id=""  value="Swimming"></label>Swimming</div>
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id=""  value="Etiquette (Teaching)"></label>Etiquette (Teaching)</div>
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id="" value="Prize/Award giving day"></label>Prize/Award giving day</div>
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id="" value="Karate, Kung-fu etc" checked="checked"></label>Karate, Kung-fu etc</div>
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id="" value="Voice training"></label>Voice training</div>
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id="" value="Local excursions/field trips"></label>Local excursions/field trips</div>
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id="" value="Foreign field trips" checked="checked"></label>Foreign field trips</div>
        <div class="checkbox"><label for=""><input type="checkbox" name="extra_curricular[]" id="" value="Class Party"></label>Class Party</div>
        </div>
        <div class="form-group">
            <label for="website">Admission Officer info</label>
            <p class="alert alert-info">
            Let us know who parents can call
            </p>
           <div class="form-group">
            <label for="Admin_name">Name:</label>
            <input class="form-control" type="text" name="admin_name" id="admin_info1">
          </div>
          <div class="form-group">
              <label for="Admin_name">Telephone:</label>
              <input class="form-control" type="tel" name="admin_telephone" id="admin_info2" placeholder="23408XXXXXXXXXX">
            </div>
            <div class="form-group">
                <label for="Admin_name">Email:</label>
                <input class="form-control" type="email" name="admin_email" id="admin_info3">
              </div>

              <div class="form-group">
                  <label for="website">School Achievements:</label>
                  <p class="alert alert-info">let Parents know about special awards won by the school
                  </p>
                  <textarea rows="5" class="form-control" id="school_details" name="awards" placeholder="In 2007 we were the best in Maths"></textarea>
                </div>
                <div id="">
                   <div class="btn btn-group">
                      <a type="button" data-toggle="tab" href="#menu2" class="btn btn-primary btn-lg btn-block" id="btn_pr2"><< Previous</a> 
                      <a type="button"data-toggle="tab" href="#menu3" class="btn btn-primary btn-lg btn-block" id="btn_nxt2">Next >></a>
                   </div>
                  </div>
                  


</div>
</div>
</div>
</div>



<div id="menu3" class="tab-pane fade">
  <!--this div contains the payment plan-->
''
  <div class="row">
    <div class="columns">
      <ul class="price">
          <li class="header">Free plan</li>
          <li class="grey">₦ Free/6 months</li>
        
          <li> 6 Months Validity</li>
         
          <li>Low Referral Priority</li>
          <li>Limited Gallery Images</li>
          <li>Trainings</li>
          <li>Ratings/Reviews from parents and alumni</li>
          <li class="grey"><button type="submit" name="free_plan"  class="button">Choose plan</button></li>
        </ul>   
  </div>

    <div class="columns">
      <ul class="price">
        <li class="header" style="background-color: #4CAF40">Ideal plan</li>
        <li class="grey">₦ 20,000</li>

        <li>6 Months Validity</li>
        <li> High Referral Priority</li>
        <li> Unlimited Gallery Images</li>
        
        <li> 10% discount on Seminars/Trainings</li>
        <li>Academic Performance Tab</li>
        <li>Verified by our team of professionals </li>
        <li>Ratings/Reviews from parents and alumni</li>
        <li class="grey"><button type="submit" name="ideal_plan" class="button">Choose plan</button></li>
   
   </ul>

    </div>

    <div class="columns">
      <ul class="price">
      <li class="header">Prestige plan</li>
      <li class="grey"> ₦ 50,000 </li>
<li>
  6 Months Validity</li>
<li> Highest Referral Priority</li>
<li> Unlimited Gallery Images</li>
<li>Homepage Features</li>
<li> 20% discount on Seminars/Trainings</li>
<li>Academic Performance Tab</li>
<li>Verified by our team of professionals </li>
<li>Ratings/Reviews from parents and alumni</li>
<li class="grey">
  <button type="submit" name="prestige_plan" class="button">Choose plan</button>
</li>    
</ul>
</div>











  </div>



  <!-- this is the end of school payment plan column-->

</div>
</div>
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
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    </form>
</body>

</html>