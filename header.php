<html>
    <head>
    <!-- Show fav icon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Scale -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- pull in font-awesome -->
   <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
     <!-- pull in google font -->
    <link href="https://fonts.googleapis.com/css?family=Forum|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <?php if($extralinks != ""){
                  echo $extralinks;
              } ?>
    <title>ProSchoolGuide | <?php echo $pname; ?> </title>
          <style>
              body{
                overflow-x: hidden;
                margin:0;
                padding: 0;
              }
              <?php if($extracss != ""){
                  echo $extracss;
              } ?>
              header{
                  width: 100%;
              }
              /* The side navigation menu */

         .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            box-shadow: 0px 1px 28px -7px black;
            background-color: #6eb9ff;
            overflow-x: hidden;
            padding-top: 60px;
            transition: 0.5s;
            }
            /* The navigation menu links */
            .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

                /* When you mouse over the navigation links, change their color */
                .sidenav a:hover {
                    color: #f1f1f1;
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
                  flex-direction: row;
                  background: linear-gradient(90deg, #89f7fe,#66a6ff);
              }
             header .navbar{
                background: linear-gradient(90deg, #89f7fe,#66a6ff);
                height: auto;
                width: 100%;
                z-index: 99;
                /* margin: 6px; */
                padding: 5px;
                position: relative;
                margin-bottom: 5px;
                box-shadow: -1px 1px 9px 0px black;
                    
                    }
            .navbar-button{
                position:relative;
                padding: 9px;
                margin-left: 10px;
                font-size: 30px;
                background: transparent;
                border: none;
            }
            .search-button{
                position: absolute;
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
            background-image: url(images/2.jpg);
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
                width: 250px;
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
            }
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
                /* FOR THE FINAL REGISTRATION PAGE */
                .form-group { 
                      width: 360px;
                 }  
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
                header .container .h-brand img {
                 
                        height: 90px;
                        display: block;
                        position: absolute;
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
                }
            }
            @media only screen and (min-width: 803px){

                /* FOR THE FINAL REGISTRATION PAGE */
                .plans{
                    display:flex;
                }
                .form-group { 
                      width: 760px;
                 }
                 /*END OF FINAL PAGE CSS */
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
                    padding: 10px;
                    
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

         <?php 

            //this loops the new nav links for the page
            if($navlink !=""){
            foreach($navlink as $x => $x_value) {
                echo "<a href=". $x_value .">". $x . "</a>";
                
            }
            }else{


            ?>

            <a href="about">About</a>
            <a href="blog">Blog</a>
            <a href="schools">Schools</a>
            <a href="contact">Contact</a>
            <a href="auth">Login</a>
            <a href="register-school">Register school </a>
            <?php } ?>
        </div>
        <header>
            
           <div class="container navbar">
                <a class="navbar-button" onclick="openNav()">
                <i class="fas fa-bars"></i>
                </a>
                <div class=" h-brand">
                   <span class="brand"> ProSchoolGuide</span>
                    <img src="images/Schoolsguidelogo.png">
                </div>
                <div class="h-links">
                    <ul>
                    <?php 

                    //this loops the new nav links for the page
                    if($navlink !=""){
                    foreach($navlink as $x => $x_value) {
                        echo "<li><a href=". $x_value .">". $x . "</a></li>";
                        
                    }
                     }else{

                    
                    ?>
                    <li><a href="about">About</a></li>
                    <li><a href="blog">Blog</a></li>
                    <li><a href="schools">Schools</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li id="register-school"><a href="register-school">Register School</a></li>
                    <li><a style="
                        padding: 10px;
                        background-color: rgba(165, 220, 134, 0.2);
                        color:  black;
                        border:  0.7px solid  black;
                    " href="">Login</a></li>
                     <?php }?>
                    </ul>
                </div>
                
                <button class="search-button">
                <i class="fas fa-search"></i>
                </button>

            </div>
        </header>
      