<?php 

//this is the page name
$pname = "Register a School";

//adds links and scripts within the head tag
$extralinks = '
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!-- Website CSS style -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Website Font style -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<!-- Google Fonts -->
<link href=\'https://fonts.googleapis.com/css?family=Passion+One\' rel=\'stylesheet\' type=\'text/css\'>
<link href=\'https://fonts.googleapis.com/css?family=Oxygen\' rel=\'stylesheet\' type=\'text/css\'>

';
//this adds the CSS to the page being included
$extracss = "

/* this css starts for the material design modal */

/** * Material Modal CSS */
 .modal {
	 will-change: visibility, opacity;
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 position: fixed;
	 top: 0;
	 left: 0;
	 right: 0;
	 bottom: 0;
	 overflow-y: auto;
	 overflow-x: hidden;
	 z-index: 1000;
	 visibility: hidden;
	 opacity: 0;
	 transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
	 transition-delay: \$modal-delay;
}
 .modal--active {
	 visibility: visible;
	 opacity: 1;
}
 .modal--align-top {
	 align-items: flex-start;
}
 .modal__bg {
	 background: transparent;
}
 .modal__dialog {
	 max-width: 600px;
	 padding: 1.2rem;
}
 .modal__content {
	 will-change: transform, opacity;
	 position: relative;
	 padding: 2.4rem;
	 background: #ffebee;
	 background-clip: padding-box;
	 box-shadow: 0 12px 15px 0 rgba(0,0,0,0.25);
	 opacity: 0;
	 transition: all 0.25s cubic-bezier(0.23, 1, 0.32, 1);
}
 .modal__content--active {
	 opacity: 1;
}
 .modal__close {
	 z-index: 1100;
	 cursor: pointer;
}
 .modal__trigger {
	 position: relative;
	 display: inline-block;
	 padding: 1.2rem 2.4rem;
	 color: rgba(0,0,0,0.7);
	 line-height: 1;
	 cursor: pointer;
	 background: #ffebee;
	 box-shadow: 0 2px 5px 0 rgba(0,0,0,0.26);
	 -webkit-tap-highlight-color: rgba(0,0,0,0);
	 user-select: none;
	 transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
}
 .modal__trigger--active {
	 z-index: 10;
}
 .modal__trigger:hover {
	 background: #e5d3d6;
}
 #modal__temp {
	 will-change: transform, opacity;
	 position: absolute;
	 top: 0;
	 left: 0;
	 right: 0;
	 bottom: 0;
	 background: #ffebee;
	 transform: none;
	 opacity: 1;
	 transition: opacity 0.1s ease-out, transform 0.5s cubic-bezier(0.23, 1, 0.32, 1);
}
/** * Demo specific CSS */
 body {
	 height: 100vh;
	 background: #f44336;
}
 img {
	 max-width: 100%;
}
 .demo-btns header {
	 padding: 7vh 10vw;
	 background: #ffebee;
	 display: flex;
	 align-items: center;
}
 .demo-btns header h1 {
	 margin: 0;
	 color: rgba(0,0,0,0.54);
	 font-weight: 300;
}
 .demo-btns .info {
	 background: #f44336;
	 padding: 3vh 10vw;
	 height: 70vh;
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 flex-flow: column wrap;
}
 .demo-btns p {
	 text-align: center;
	 color: #fff;
}
 .demo-btns .link {
	 font-size: 20px;
}
 .demo-btns .modal__trigger {
	 margin-right: 3px;
}
 @media (max-width: 640px) {
	 .demo-btns .modal__trigger {
		 margin-bottom: 0.8rem;
	}
}
 .demo-close {
	 position: absolute;
	 top: 0;
	 right: 0;
	 margin: 1.2rem;
	 padding: 0.6rem;
	 background: rgba(0,0,0,0.3);
	 border-radius: 50%;
	 transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
}
 .demo-close svg {
	 width: 24px;
	 fill: #fff;
	 pointer-events: none;
	 vertical-align: top;
}
 .demo-close:hover {
	 background: rgba(0,0,0,0.6);
}

/* ends for the material design modals */
.search-button{
	display: none;
}
a{
	color: black;
}
#playground-container {
    height: 500px;
    overflow: hidden !important;
    -webkit-overflow-scrolling: touch;
}
body, html{
     height: 100%;
	 background-repeat: no-repeat;
	 
	 background:linear-gradient(0deg,#dddddd85,#eeeeee00),url(../images/pb.jpg);
 	/*background:url(https://i.ytimg.com/vi/4kfXjatgeEU/maxresdefault.jpg);*/
 	font-family: 'Oxygen', sans-serif;
	    background-size: cover;
}

.main{
 	margin:50px 15px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}
.form-control {
    height: auto!important;
padding: 8px 12px !important;
}
.input-group {
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
#button {
    border: 1px solid #ccc;
    margin-top: 28px;
    padding: 6px 12px;
    color: #666;
    text-shadow: 0 1px #fff;
    cursor: pointer;
    -moz-border-radius: 3px 3px;
    -webkit-border-radius: 3px 3px;
    border-radius: 3px 3px;
    -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    box-shadow: 0 1px #fff inset, 0 1px #ddd;
    background: #f5f5f5;
    background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
    background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 400px;
    padding: 10px 40px;
	background:#9d9d9d;
	    color: #FFF;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}

";

//adds links for the navigation
$navlink["Home"] = "../";
$navlink["Blog"] = "../blog";
$navlink["Contact"] = "../contact";

$navlink["Login"] = "../auth";

?>

<?php include("../header.php"); ?>





	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Register your school in simple steps</h5>
					<form class="" method="post" action="php/process_reg_form_1.php">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="schoolname" class="cols-sm-2 control-label">School name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="school_name" id="schoolname"  placeholder="Enter your School's name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm_password" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>
						
						<div class="info">
						<div class="buttons">
							<p>
								<a href="" data-modal="#modal" class="modal__trigger">Modal 1</a>
								<a href="" data-modal="#modal2" class="modal__trigger">Modal 2</a>
								<a href="" data-modal="#modal3" class="modal__trigger">Modal 3</a>
							</p>
						</div>
						</div>
						<!-- modals begin here -->
							
							<!-- Modal -->
						<div id="modal" class="modal modal__bg" role="dialog" aria-hidden="true">
							<div class="modal__dialog">
								<div class="modal__content">
									<h1>Modal</h1>
									<p>Church-key American Apparel trust fund, cardigan mlkshk small batch Godard mustache pickled bespoke meh seitan. Wes Anderson farm-to-table vegan, kitsch Carles 8-bit gastropub paleo YOLO jean shorts health goth lo-fi. Normcore chambray locavore Banksy, YOLO meditation master cleanse readymade Bushwick.</p>
									
									<!-- modal close button -->
									<a href="" class="modal__close demo-close">
										<svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"/><path d="M0 0h24v24h-24z" fill="none"/></svg>
									</a>
									
								</div>
							</div>
						</div>


							<div id="modal2" class="modal modal--align-top modal__bg" role="dialog" aria-hidden="true">
						<div class="modal__dialog">
							<div class="modal__content">
								<h1>Big Modal</h1>
								<h3>This modal is pretty tall.</h3>
								<p>Selfies normcore four dollar toast four loko listicle artisan. Hoodie Marfa authentic, wayfarers church-key tofu Banksy pop-up Kickstarter Brooklyn heirloom swag synth. Echo Park cray synth mixtape. Tofu gastropub squid readymade, trust fund Wes Anderson DIY PBR 8-bit try-hard +1 Shoreditch lo-fi tote bag.</p>
								<p><img src="http://unsplash.it/600/300" alt="" /></p>
								<p>Mumblecore cred selfies fingerstache. Tousled skateboard plaid lo-fi shabby chic salvia, swag Odd Future Etsy art party Austin cronut. Crucifix whatever Pinterest food truck, pickled viral cray 90's DIY chambray keffiyeh biodiesel Vice blog. Cred meh yr tofu.</p>
								<p>Mumblecore cred selfies fingerstache. Tousled skateboard plaid lo-fi shabby chic salvia, swag Odd Future Etsy art party Austin cronut. Crucifix whatever Pinterest food truck, pickled viral cray 90's DIY chambray keffiyeh biodiesel Vice blog. Cred meh yr tofu.</p>
								<!-- modal close button -->
								<a href="" class="modal__close demo-close">
									<svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"/><path d="M0 0h24v24h-24z" fill="none"/></svg>
								</a>
							</div>
						</div>
					</div>

						<div class="form-group ">
							<button type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>

						
					</form>
				</div>
			</div>
		</div>
	<?php include_once("../footer.php"); ?>
	<script>
	
            /* Set the width of the side navigation to 250px */
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            /* Set the width of the side navigation to 0 */
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
		var Modal = (function() {

var trigger = $qsa('.modal__trigger'); // what you click to activate the modal
var modals = $qsa('.modal'); // the entire modal (takes up entire window)
var modalsbg = $qsa('.modal__bg'); // the entire modal (takes up entire window)
var content = $qsa('.modal__content'); // the inner content of the modal
  var closers = $qsa('.modal__close'); // an element used to close the modal
var w = window;
var isOpen = false;
  var contentDelay = 400; // duration after you click the button and wait for the content to show
var len = trigger.length;

// make it easier for yourself by not having to type as much to select an element
function $qsa(el) {
  return document.querySelectorAll(el);
}

var getId = function(event) {

  event.preventDefault();
  var self = this;
  // get the value of the data-modal attribute from the button
  var modalId = self.dataset.modal;
  var len = modalId.length;
  // remove the '#' from the string
  var modalIdTrimmed = modalId.substring(1, len);
  // select the modal we want to activate
  var modal = document.getElementById(modalIdTrimmed);
  // execute function that creates the temporary expanding div
  makeDiv(self, modal);
};

var makeDiv = function(self, modal) {

  var fakediv = document.getElementById('modal__temp');

  /**
   * if there isn't a 'fakediv', create one and append it to the button that was
   * clicked. after that execute the function 'moveTrig' which handles the animations.
   */

  if (fakediv === null) {
	var div = document.createElement('div');
	div.id = 'modal__temp';
	self.appendChild(div);
	moveTrig(self, modal, div);
  }
};

var moveTrig = function(trig, modal, div) {
  var trigProps = trig.getBoundingClientRect();
  var m = modal;
  var mProps = m.querySelector('.modal__content').getBoundingClientRect();
  var transX, transY, scaleX, scaleY;
  var xc = w.innerWidth / 2;
  var yc = w.innerHeight / 2;

  // this class increases z-index value so the button goes overtop the other buttons
  trig.classList.add('modal__trigger--active');

  // these values are used for scale the temporary div to the same size as the modal
  scaleX = mProps.width / trigProps.width;
  scaleY = mProps.height / trigProps.height;

  scaleX = scaleX.toFixed(3); // round to 3 decimal places
  scaleY = scaleY.toFixed(3);


  // these values are used to move the button to the center of the window
  transX = Math.round(xc - trigProps.left - trigProps.width / 2);
  transY = Math.round(yc - trigProps.top - trigProps.height / 2);

	  // if the modal is aligned to the top then move the button to the center-y of the modal instead of the window
  if (m.classList.contains('modal--align-top')) {
	transY = Math.round(mProps.height / 2 + mProps.top - trigProps.top - trigProps.height / 2);
  }


	  // translate button to center of screen
	  trig.style.transform = 'translate(' + transX + 'px, ' + transY + 'px)';
	  trig.style.webkitTransform = 'translate(' + transX + 'px, ' + transY + 'px)';
	  // expand temporary div to the same size as the modal
	  div.style.transform = 'scale(' + scaleX + ',' + scaleY + ')';
	  div.style.webkitTransform = 'scale(' + scaleX + ',' + scaleY + ')';


	  window.setTimeout(function() {
		  window.requestAnimationFrame(function() {
			  open(m, div);
		  });
	  }, contentDelay);

};

var open = function(m, div) {

  if (!isOpen) {
	// select the content inside the modal
	var content = m.querySelector('.modal__content');
	// reveal the modal
	m.classList.add('modal--active');
	// reveal the modal content
	content.classList.add('modal__content--active');

	/**
	 * when the modal content is finished transitioning, fadeout the temporary
	 * expanding div so when the window resizes it isn't visible ( it doesn't
	 * move with the window).
	 */

	content.addEventListener('transitionend', hideDiv, false);

	isOpen = true;
  }

  function hideDiv() {
	// fadeout div so that it can't be seen when the window is resized
	div.style.opacity = '0';
	content.removeEventListener('transitionend', hideDiv, false);
  }
};

var close = function(event) {

	  event.preventDefault();
  event.stopImmediatePropagation();

  var target = event.target;
  var div = document.getElementById('modal__temp');

  /**
   * make sure the modal__bg or modal__close was clicked, we don't want to be able to click
   * inside the modal and have it close.
   */

  if (isOpen && target.classList.contains('modal__bg') || target.classList.contains('modal__close')) {

	// make the hidden div visible again and remove the transforms so it scales back to its original size
	div.style.opacity = '1';
	div.removeAttribute('style');

		  /**
		  * iterate through the modals and modal contents and triggers to remove their active classes.
	* remove the inline css from the trigger to move it back into its original position.
		  */

		  for (var i = 0; i < len; i++) {
			  modals[i].classList.remove('modal--active');
			  content[i].classList.remove('modal__content--active');
			  trigger[i].style.transform = 'none';
	  trigger[i].style.webkitTransform = 'none';
			  trigger[i].classList.remove('modal__trigger--active');
		  }

	// when the temporary div is opacity:1 again, we want to remove it from the dom
		  div.addEventListener('transitionend', removeDiv, false);

	isOpen = false;

  }

  function removeDiv() {
	setTimeout(function() {
	  window.requestAnimationFrame(function() {
		// remove the temp div from the dom with a slight delay so the animation looks good
		div.remove();
	  });
	}, contentDelay - 50);
  }

};

var bindActions = function() {
  for (var i = 0; i < len; i++) {
	trigger[i].addEventListener('click', getId, false);
	closers[i].addEventListener('click', close, false);
	modalsbg[i].addEventListener('click', close, false);
  }
};

var init = function() {
  bindActions();
};

return {
  init: init
};

}());

Modal.init();
	</script>
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>