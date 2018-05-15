<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<style>

body{
    background-color: silver;
}

.reviews{
  padding: 15px;
  max-width: 768px;
  margin: 0 auto;
}

.review-item{
  background-color: white;
  padding: 15px;
  margin-bottom: 5px;
  box-shadow: 1px 1px 5px #343a40;
}

.review-item .review-date{
  color: #cecece;
}
.review-item .review-text{
  font-size: 16px;
  font-weight: normal;
  margin-top: 5px;
  color: #343a40;
}

.review-item .reviewer{
  width: 100px;
  height: 100px;
  border: 1px solid #cecece;
}

/****Rating Stars***/
.raterater-bg-layer {
    color: rgba( 0, 0, 0, 0.25 );
}
.raterater-hover-layer {
    color: rgba( 255, 255, 0, 0.75 );
}
.raterater-hover-layer.rated { /* after the user selects a rating */
    color: rgba( 255, 255, 0, 1 );
}
.raterater-rating-layer {
    color: rgba( 255, 155, 0, 0.75 );
}
.raterater-outline-layer {
    color: rgba( 0, 0, 0, 0.25 );
}

/* don't change these - you might break something.. */
.raterater-wrapper {
    overflow:visible;
}

.software .raterater-wrapper {
    margin-top: 4px;
}

.raterater-layer,
.raterater-layer i {
    display: block;
    position: absolute;
    overflow: visible;
    top: 0px;
    left: 0px;
}
.raterater-hover-layer {
    display: none;
}
.raterater-hover-layer i,
.raterater-rating-layer i {
    width: 0px;
    overflow: hidden;
}


</style>
<div class="reviews">
  <div class="row blockquote review-item">
    <div class="col-md-3 text-center">
      <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
      <div class="caption">
        <small>by <a href="#joe">Joe</a></small>
      </div>

    </div>
    <div class="col-md-9">
      <h4>My awesome review</h4>
      <div class="ratebox text-center" data-id="0" data-rating="5"></div>
      <p class="review-text">My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. </p>

      <small class="review-date">March 26, 2017</small>
    </div>                          
  </div>  
</div>
<script>
/*Ratings*/
!function(t){function a(a,r){t('.raterater-input[data-id="'+a+'"]').data("input").val(r).change()}function r(){g.each(function(){var a=t(this);if(p.mode==u&&("INPUT"==a.prop("tagName")||"SELECT"==a.prop("tagName"))){var r="input-"+y++,e=t('<div class="raterater-input"></div>').attr("data-id",r).attr("data-rating",a.val()).data("input",a);a.attr("data-id",r).attr("data-id",r).attr("data-rating",a.val()).data("input",a).after(e).hide(),l=a=e}l=a;var s=c(a);if(!s)throw"Error: Each raterater element needs a unique data-id attribute.";f[s]={state:"inactive",stars:null},"static"===a.css("position")&&a.css("position","relative"),a.addClass("raterater-wrapper"),a.html(""),t.each(["bg","hover","rating","outline","cover"],function(){a.append(' <div class="raterater-layer raterater-'+this+'-layer"></div>')});for(var n=0;n<p.numStars;n++)a.children(".raterater-bg-layer").first().append('<i class="fa fa-star"></i>'),a.children(".raterater-outline-layer").first().append('<i class="fa fa-star-o"></i>'),a.children(".raterater-hover-layer").first().append('<i class="fa fa-star"></i>'),a.children(".raterater-rating-layer").first().append('<i class="fa fa-star"></i>');p.isStatic||(a.find(".raterater-cover-layer").hover(o,h),a.find(".raterater-cover-layer").mousemove(d),a.find(".raterater-cover-layer").click(i))})}function e(){g.each(function(){var a;a=p.mode==u?t(this).parent().find('.raterater-input[data-id="'+c(this)+'"]'):t(this);var r=(c(a),p.width+"px"),e=Math.floor(p.starWidth/p.starAspect)+"px";a.css("width",r).css("height",e),a.find(".raterater-layer").each(function(){t(this).css("width",r).css("height",e)});for(var i=0;i<p.numStars;i++)t.each(["bg","hover","rating","outline"],function(){a.children(".raterater-"+this+"-layer").first().children("i").eq(i).css("left",i*(p.starWidth+p.spaceWidth)+"px").css("font-size",Math.floor(p.starWidth/p.starAspect)+"px")});var s=parseFloat(a.attr("data-rating")),d=Math.floor(s),o=s-d;n(a.find(".raterater-rating-layer").first(),d,o)})}function i(r){var e=t(r.target).parent(),i=c(e),s=f[i].whole_stars_hover+f[i].partial_star_hover;s=Math.round(100*s)/100,f[i].state="rated",f[i].stars=s,e.find(".raterater-hover-layer").addClass("rated"),"input"!=p.mode&&void 0!==window[p.submitFunction]&&"function"==typeof window[p.submitFunction]?window[p.submitFunction](i,s):a(i,s)}function s(t,a){var r=Math.floor(t/(p.starWidth+p.spaceWidth)),e=t-r*(p.starWidth+p.spaceWidth);if(e>p.starWidth&&(e=p.starWidth),e/=p.starWidth,p.step!==!1){var i=1/p.step;e=Math.round(e*i)/i}f[a].whole_stars_hover=r,f[a].partial_star_hover=e}function n(t,a,r){for(var e=(c(t.parent()),0);a>e;e++)t.find("i").eq(e).css("width",p.starWidth+"px");t.find("i").eq(a).css("width",p.starWidth*r+"px");for(var e=a+1;e<p.numStars;e++)t.find("i").eq(e).css("width","0px")}function d(a){var r=c(t(a.target).parent());if("hover"===f[r].state){var e=a.offsetX;void 0===e&&(e=a.pageX-t(a.target).offset().left),f[r].stars=s(e,r);var i=t(a.target).parent().children(".raterater-hover-layer").first();n(i,f[r].whole_stars_hover,f[r].partial_star_hover)}}function o(a){var r=c(t(a.target).parent());("rated"!==f[r].state||p.allowChange)&&(f[r].state="hover",t(a.target).parent().children(".raterater-rating-layer").first().css("display","none"),t(a.target).parent().children(".raterater-hover-layer").first().css("display","block"))}function h(a){var r=t(a.target).parent(),e=c(r);if(t(a.target).parent().children(".raterater-hover-layer").first().css("display","none"),t(a.target).parent().children(".raterater-rating-layer").first().css("display","block"),"rated"===f[e].state){var i=parseFloat(f[e].stars),s=Math.floor(i),d=i-s;return void n(r.find(".raterater-rating-layer").first(),s,d)}f[e].state="inactive"}function c(a){return t(a).attr("data-id")}var l,f={},p={},u="input",v="callback",g=null,y=0;t.fn.raterater=function(a){if(t.fn.raterater.defaults={submitFunction:"",allowChange:!1,starWidth:20,spaceWidth:5,numStars:5,isStatic:!1,mode:v,step:!1},p=t.extend({},t.fn.raterater.defaults,a),p.width=p.numStars*(p.starWidth+p.spaceWidth),p.starAspect=.9226,p.step!==!1&&(p.step=parseFloat(p.step),p.step<=0||p.step>1))throw"Error: step must be between 0 and 1";return g=this,r(),e(),this}}(jQuery);

$(document).ready(function() {
    $('.ratebox').raterater({ 
    	submitFunction: 'rateAlert',
    	allowChange: false,
    	starWidth: 15,
    	spaceWidth: 2,
    	numStars: 5
    });
    
});


</script>