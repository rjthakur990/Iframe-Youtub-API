<style>
#video{ 
  display:none;
  overflow: hidden;

  }
  img{display: block;
  overflow: hidden}
</style>

<h1>Pause / Play Buttons for YouTube Videos</h1>
<img src="http://localhost/testing/img/food.jpg">
<!-- Make sure ?enablejsapi=1 is on URL -->
<iframe id="video" src="//www.youtube.com/embed/FKWwdQu6_ok?enablejsapi=1&html5=1" frameborder="0" allowfullscreen></iframe>
<iframe id="video" src="//www.youtube.com/embed/FKWwdQu6_ok?enablejsapi=1&html5=1" frameborder="0" allowfullscreen></iframe>
<iframe id="video" src="//www.youtube.com/embed/FKWwdQu6_ok?enablejsapi=1&html5=1" frameborder="0" allowfullscreen></iframe>

<?php 
$file = "www.youtube.com/embed/FKWwdQu6_ok?enablejsapi=1&html5=1";
function isvideo($filename){
  if(preg_match('/^.*\.(mp4|mov|ogg|flv|wmv|webm)$/i', $filename)){
   
    return true;
} else{
  return false;
}
}
$video = isvideo($file);
if($video !=false){
  echo $file;
}else{
  echo "fail";
}
?>
<!-- 
SVG ==
http://thenounproject.com/term/play/23255/ 
https://css-tricks.com/svg-tabs-using-svg-shape-template/
-->
<svg class="defs">
  <defs>
    <path id="pause-button-shape"  d="M24,0C10.745,0,0,10.745,0,24s10.745,24,24,24s24-10.745,24-24S37.255,0,24,0z M21,33.064c0,2.201-1.688,4-3.75,4
    s-3.75-1.799-3.75-4V14.934c0-2.199,1.688-4,3.75-4s3.75,1.801,3.75,4V33.064z M34.5,33.064c0,2.201-1.688,4-3.75,4
    s-3.75-1.799-3.75-4V14.934c0-2.199,1.688-4,3.75-4s3.75,1.801,3.75,4V33.064z"/>
    <path id="play-button-shape"  d="M24,0C10.745,0,0,10.745,0,24s10.745,24,24,24s24-10.745,24-24S37.255,0,24,0z M31.672,26.828l-9.344,9.344
    C20.771,37.729,19.5,37.2,19.5,35V13c0-2.2,1.271-2.729,2.828-1.172l9.344,9.344C33.229,22.729,33.229,25.271,31.672,26.828z"/>
  </defs>
</svg>

<div class="play-button">
  <!-- if we needed to change height/width we could use viewBox here -->
  <svg class="button" id="play-button"> 
  <use xlink:href="#play-button-shape"></svg>
  <svg class="button" id="pause-button">
    <use xlink:href="#pause-button-shape">
  </svg>
</div>

<script>


var player;

// this function gets called when API is ready to use
function onYouTubePlayerAPIReady() {
  // create the global player from the specific iframe (#video)
  player = new YT.Player('video', {
    events: {
      // call this function when player is ready to use
      'onReady': onofPlayerReady
    }
  });
}

function onofPlayerReady(event) {
  
  // bind events
  var playButton = document.getElementById("play-button");
  playButton.addEventListener("click", function() {
     document.getElementById("video").style.display = "block"; 
    player.playVideo();
    alert(player);
  });
  
  var pauseButton = document.getElementById("pause-button");
  pauseButton.addEventListener("click", function() {
    player.pauseVideo();
  });
  
}

// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "//www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

</script>