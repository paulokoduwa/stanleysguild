<html>
    <head>
    <!-- Show fav icon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <!-- Scale -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- pull in font-awesome -->
   <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
     <!-- pull in google font -->
    <link href="https://fonts.googleapis.com/css?family=Forum|Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <title>Schools Guide | Home Page </title>
          <style>

              body{
                overflow-x: hidden;
                margin:0;
                padding: 0;
              }
              header{
                  width: 100%;
              }

              /* The side navigation menu */

            .sidenav {
                height: 100%; /* 100% Full-height */
                width: 0; /* 0 width - change this with JavaScript */
                position: fixed; /* Stay in place */
                z-index: 9999;/* Stay on top */
                top: 0; /* Stay at the top */
                left: 0;
                box-shadow: 0px 1px 28px -7px black;
                background-color: #6eb9ff; /* Blueish*/
                overflow-x: hidden; /* Disable horizontal scroll */
                padding-top: 60px; /* Place content 60px from the top */
                transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
            }

            /* The navigation menu links */
            .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #fbf9f9;
                display: block;
                transition: 0.3s;
            }

                /* When you mouse over the navigation links, change their color */
                .sidenav a:hover {
                    color: #f1f1f1;
                }
                li{
                    list-style-type: none;
                }
                /* Position and style the close button (top right corner) */
                .sidenav .closebtn {
                    position: absolute;
                    top: 0;
                    right: 25px;
                    font-size: 36px;
                    margin-left: 50px;
                }

                /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
                #main {
                    transition: margin-left .5s;
                    padding: 20px;
                }

               

              header .navbar{
                  display: flex;
                  background: linear-gradient(90deg, #89f7fe,#66a6ff);
                  flex-direction: row;
                  width: 100%;
              }
             header .navbar{
                background-color: #ffffff;
                height: 60px;
               
                z-index: 99;
                /* margin: 6px; */
                padding: 5px;
                position: relative;
                margin-bottom: 5px;
                box-shadow: -1px 1px 9px 0px black;
                    
                    }
            .navbar-button{
                position: absolute;
                padding: 9px;
                margin-left: 10px;
                font-size: 30px;
                background: transparent;
                border: none;
            }
           
            .search-button{
                position: relative;
                right: 0;
                width: auto;
                background: none;
                font-size: 20px;
                border: none;
                margin-right: 8px;
                padding: 13px;
            }
            header .container .h-brand{
                
                font-family: sans-serif;
                font-variant: all-small-caps;
               margin: auto;
               font-size: 20px;
               font-weight: bold;

            }
            header .container .h-brand img{
                display: none;
            }
            header .container .h-links{
                display: none;
            }
            .carousel {
                position: absolute;
                height: 70vh;
                width: 100vw;
            }
            .carousel .item{
                margin: 0px 0px 10px 0px;
                
            }
            .search-form{
                background-color: #00000047;
                padding: 20px;
                position: relative;
                top:0;
                bottom: 0;
            }
            .search-form h3{
            color: #fff;
            font-family: 'Ubuntu', sans-serif;
            }
            article .first-section{
                margin-top: -8px;
                top: 50px;
                width: 100%;
                height: auto;
            }
            article .first-section .background-image{
           /* background-image: url(images/2.jpg);*/
            background-repeat: no-repeat;
            background-size: cover;
            height:70vh;
            width: 100vw;

            }
            .search-form{
                position: relative;
                width: 300px;
                height: auto;
                display: flex;
                top:50px;
                margin: auto;              
            }
           
            .search-form label{
                color: #ffffff;
                font-family: 'Ubuntu', sans-serif;

            }
            .search-form .text-input{
                border: 0.7px solid #fff;
                background-color: #00000000;
                padding:10px;
                margin-bottom: 10px;
                width:100%;
            }
            .search-form .text-input::placeholder{
                color: #fff;
                font-family: 'Forum', cursive;
            }
            .search-form .text-input:hover{
                border: 0.7px solid #fff;
                background-color: #fff; 
            }
            .find{
                width: 100%;
                padding: 20px;
                font-size: 20px;
                border: none;
            }
            /* Make the school list scroll horizontally */
            section #scroll-schools{
                background-color: #f3f3f3;
                
                overflow: hidden;
                overflow-x: scroll;
                position: relative:
                overflow-y: hidden;
                white-space: nowrap;
                padding: 20px 0;
            }
            .item {
                margin: 10px;
                margin-top: 50px;
                display: inline-block;
                width: 200px;
                box-shadow: -1px 1px 9px 0px black;
              
            }
            .item .card--big{
                background-color: #fff;
                
                text-wrap: wrap;
            

            }
            .item .card--big .card__image{
                position: relative;
                
                height: 150px;
              
            }
            .item .card--big .card__title{
                margin: 0;
                text-shadow: 0px 0px 3px black;
                top: -11px;
                white-space: pre-wrap;
                position: relative;
                background: #0000001c;
                color: white;
                padding: 0 5px;
                box-shadow: 0 0 60px -4px black;
             }
            .item .card--big .card__image img{
           
                width: 100%;
               
                }
            .item .card--big {
            }
            .card__button {
                outline: none;
                position: relative;
                display: inline-block;
                border: none;
                line-height: 33px;
                background-color: transparent;
                padding: 0 16px;
                color: #FF1744;
            }
            .card__button:hover {
                box-shadow: 0 0 20px 1px black;
                font font-family: sans-serif;
                background-color: #999999;
                color: #fff;
            }
            section .first, .second, .third{
            padding: 0px 20px;

            }
            section .first img, .second img, .third img{
                width: 200px;
                height: 200px;
            }
            .footer-container{
                background: #398cd6;
            }
            .footer-container section{
                text-align: justify;
                padding-top: 20px;
            }
            .footer-container .l{
                    width: 33.3%;
                    margin: auto;
                }
           
            .footer-container section ul li{
                list-style-type: none;
                padding: 8px 0px;
                font-size: 20px;
            }
            .footer-container section ul li:hover{
                font-size: 23px;
            }

            .footer-container section ul li a{
               
               text-decoration: none;
               color: rgba(255, 255, 255, 0.75);
               /* font-weight: lighter; */
               font-family: open-sans-light;
            }
            .footer-container section ul li .contact-info{
                color: rgba(255, 255, 255, 0.5);
                
                word-wrap: break-word;
            }
            .footer-container section ul li .title{
                color: rgba(255, 255, 255);
            }
            footer .social{
                width: 100%;
                padding: 1px;
                background-color:#999;

            }
            footer .social ul{
                display: flex;
                justify-content: space-between;
                width: auto;
            }
            footer .social ul li{
                display: block;
                padding: 5px;
                font-size:30px;
                flex-grow: 1;
                text-align: center;
                list-style-type: none;
            }fg
            footer .social ul li:hover{
                font-size:35px;
                border-right: 0.7px solid #ccc;
                border-left: 0.7px solid #ccc;
            }


            /*****     **        Start of media queries  **    ****/
            /*
              *
              *
               max-height: 450px
               max width 370px
               min-width 375px
               min-height 812px and min-width 375px
               min-height 800px and min-width 1280px
               min-width 500px
               min-width 803px
               *
               *
               *
               *
            */
             
             /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
             @media screen and (max-height: 450px) {
                    .sidenav {padding-top: 15px;}
                    .sidenav a {font-size: 18px;}
                }
            @media only screen and (max-width: 370px){
                

            .search-form {
                position: relative;
                width: 260px;
                }
                article .first-section .background-image{
                height:70vh;
                } 
            }
            /** Media for iphone 4 mobile devices **/
            @media (min-height: 812px) and (min-width: 375px) {
                article .first-section .background-image{
                        height:65vh;
                } 
            }
            /** Media for nexus 10 devices **/
            @media (min-height: 800px) and (min-width: 1280px) {
                article .first-section .background-image{
                        height:46vh;
                } 
            }
            /*the End of small screen styling
            *
            */
            @media only screen and (min-width: 500px){

                /* Media Query

                --To make the logo Visible on wider screens 
                --

                */
                article .first-section .background-image{
                        height:80vh;
                }
                header .container .h-brand {
                        font-family: sans-serif;
                        font-variant: all-small-caps;
                        margin: -4px 12px 12px 63px;
                        /* margin: auto; */
                        font-size: 20px;
                        font-weight: bold;
                    }
                /* Show logo when the screen is 500px */
                header .container .h-brand img{
                        height: 120px;
                        display: block;
                        box-shadow: 0px 3px 20px 3px #7fdfff;
                }
              

                /* Remove Brand Text when the screen is 500px */
                 header .container .h-brand .brand{
                         display: none;
                     }
               
                         
                }

            @media only screen and (min-width: 620px){

                .container-info{
                    display: flex;
                    margin-top: 20px;
                }
            }
            @media only screen and (min-width: 803px){
                header .container .h-links{
                    margin: auto;
                    display: block;
                
                }
                header .container .h-links ul{
                    margin: auto;
                    display: flex;
                    flex-direction: row;
                }
                header .container .h-links ul li{
                    list-style-type: none;
                    padding: 10px;
                    margin-right: 10px;
                    font-size: 18px;
                }
                header .container .h-links ul li#register-school{
                    border-radius: 6%;
                }
                header .container .h-links ul li#register-school > a{
                    padding: 10px;
                    background-color: #000000;
                    color: white;
                    
                    border-radius: 6%;
                    border: 0.7px solid  black;
                }
                header .container .h-links ul li#register-school > a:hover{
                    background: transparent;
                    font-weight: bold;
                    box-shadow: 0 0 20px -7px #000000;
                    color: #000;

                }
                header .container .h-links ul li a{
                    text-decoration: none;
                    color: #000;

                }
                section .first, .second, .third{
                    width: 33.3%;
                    padding: 45px;
                    
                }
                .footer-container{
                    width: 100%;
                    display: flex;
                }
                .footer-container .l{
                    width: 33.3%;
                    text-align: justify;
                }
                    }
            </style>

    </head>
    <body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="about">About</a>
            <a href="blog">Blog</a>
            <a href="schools">Schools</a>
            <a href="contact">Contact</a>
            <a href="auth">Login</a>
            <a href="register-school">Register school </a>
        </div>
        <header>
            
           <div class="container navbar">
                <a class="navbar-button" onclick="openNav()">
                <i class="fas fa-bars"></i>
                </a>
                <div class="h-brand">
                   <span class="brand"> Schools Guide</span>
                    <img src="images/Schoolsguidelogo.png">
                </div>
                <div class="h-links">
                    <ul>
                    <li><a href="about">About</a></li>
                    <li><a href="blog">Blog</a></li>
                    <li><a href="schools">Schools</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li id="register-school"><a href="register-school">Register School</a></li>
                    <li><a style="
                        padding: 10px;
                        /* background-color: rgba(165, 220, 134, 0.2);*/
                      /* color:  black; */
                        background-color: rgb(91, 255, 0);
                         color: #271e1e;
                        /*border:  0.7px solid  black;*/
                    " href="auth">Login</a></li>
                    </ul>
                </div>
                
                <button class="search-button">
                <i class="fas fa-search"></i>
                </button>

            </div>
        </header>
      
       
    <section>
            <article>
                <div class="first-section">

            <div class="background-image">


                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">
                
                    <div class="item" style="width: 100%; height:100%;">
                        <img src="images/b.jpg" width="100%" height="100%" alt="Slide Image">
                    </div>

                    <div class="item active" style="width: 100%; height:100%;">
                        <img src="images/1.jpeg" width="100%" height="100%" alt="Slide Image">
                    </div>

                    <div class="item" style="width: 100%; height:100%;">
                        <img class="img-responsive" width="100%" height="100%" src="images/2.jpg" alt="Slide Image" id="image-slide">
                    </div>
                </div>
                <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
                    <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0"></li>
                    <li data-target="#carousel-1" data-slide-to="1" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
              </div>


                    
                    <?php include("findit.php"); ?>



                    </div>
                   
                </div> 
            </article>
            
            <article id="scroll-schools">
            <center><span class="best-school-title" 
                                    style="
                                    position: absolute;
                                    right: 0;
                                    left: 0;
                                    background: #fff;
                                    font-family: sans-serif;
                                    font-weight: bold;
                                    font-size: 29px;">
                                                    Featured schools
                                                    </span></center>
                 <?php include("schools.php"); ?>
            </article>
        </section>
                
                   

        <section>
        <div class="container container-info">
        <h4> Whats in it for Parents, students, and Edu stakeholders </h4>
            <div class="first p">
                        <img src="images/parents.jpg" width="100%">
                        <p>
                           <h4> Search for the right school by</h4>
                            <ul>
                                <li>Location</li>
                                <li>Budget</li>
                                <li>School type</li>
                                <li>Boarding, Day school or both</li>
                            </ul>
                       </p>
                    </div>

                    <div class="second p" >
                    <img src="images/library.jpg" width="100%">
                    <h4>More than 20,000 tops schools are register and ranked using</h4>
                    <p> 
                            <ul>
                                
                                <li>Parent honest reviews</li>
                                <li>Academic performance</li>
                                <li>Location</li>
                            </ul>
                    </p>
                    </div>

                    <div class="third p" style="font-family: 'PT Sans', sans-serif;">
                    <img src="images/reg.png" width="100%">
                    <p>
                     <h4>Search for the right school by</h4>
                            <ul>
                                <li>Location</li>
                                <li>Honest reviews</li>
                                <li>Location</li>
                                <li>Location</li>
                            </ul>
                    </p>
                    </div>
            </div>
           
         <section>
         <?php include("footer.php"); ?>
         </div>
         <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
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