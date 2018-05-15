<?php 

//this is the page name
$pname = "About";

//adds links and scripts within the head tag
$extralinks = '<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">';
//this adds the CSS to the page being included
$extracss = "
.bg{
    height: 200px;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-image: url(../images/1.jpeg);
    }
.container-text{
    margin: 30px;
    font-family: 'Open Sans', sans-serif;
    }
    .footer-container {
        background: #398cd6;
    }  
";

//adds links for the navigation
$navlink["Home"] = "../";
$navlink["Blog"] = "../blog";
$navlink["Contact"] = "../contact";
$navlink["Register School"] = "../register-school";
$navlink["Login"] = "../auth";

?>

<?php include("../header.php"); ?>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="bg"></div>

      <div class="container-text">  
       <h4> ABOUT US</h4>
        At ProSchoolGuide, we believe that there is a unique school for that 
        precious child of yours.
         We recognize the difficulties parents go through choosing the ideal 
         school for their kids when they are ripe for education, owing to the proliferation of schools everywhere. While some parents settle for schools that is visually appealing to them (without knowing in details the quality of education from such schools), others go through the stressful processes of moving from place to place in search of an ideal school for their kids.
        Hence, ProSchoolGuide is set up for parents to have unbiased and
         detailed information on schools around their locations to aid them
          in making the best choice for an ideal school.
        At ProSchoolGuide, parents seat at the comfort of their homes or
         offices and have a visual tour of schools around any location of 
         their choice. In addition, they get to see and select schools based
          on the schools’ curriculum, range of school fess to compare with 
          their financial budgets, schools’ facilities, etc.
        
        <h5>CONTACT US</h5>
        Email: info@proschoolguide.com <br>
        Call us on 08036376025, 07057911177
        <h5>VISSION</h5>
        We are building an online platform, which provides unbiased and 
        detailed information about schools, thus, helping to guide parents’
         choice for their children’s education.
        <h5>MISSION</h5>
        At ProSchoolGuide, we believe that every child should have a 
        standard education, and that there is an ideal school for each 
        child. We therefore help parents erase the hurdles and eliminate
         the obstacles of distance and complexity that keep them from 
         discovering these ideal schools. We do this by providing an 
         easy online platform where parents can assess and access schools 
         that fit into their ideal criteria for their child’s education.
        
        <h5>AIM</h5>
        Our goal is to display schools with excellent standards and 
        encourage others to standardize their services so that parents
         would get value for their money in sending their kids to such
          schools.
        
       <h5>DISCLAIMER</h5> 
        We have made serious efforts in ensuring that the information 
        from each registered school is correct and authentic. We have 
        personally visited most of these schools to verify the information
         provided on our website. ProSchoolGuide shall incur no liability 
         for any errors or omissions in connection with this information.
          We however leave our doors open to welcome reliable changes on
           the information provided on our site.

    </div>
    <?php include("../footer.php"); ?>
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
