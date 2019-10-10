<link rel="stylesheet" href="style.css">
 <link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet" id="bootstrap-css">
 
 <div class="row">
    <div class="col s12 m4">
      <div class="card">
      <div class="card-image card-video">
          <img src="img/food.jpg">
          <span class="card-title">Card Title</span>
          <iframe id="video1" width="400" height ="400" src="//www.youtube.com/embed/FKWwdQu6_ok?enablejsapi=1&html5=1" frameborder="0" allowfullscreen></iframe>

        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image card-video">
        <img src="img/food.jpg">
          <span class="card-title">Card Title</span>
          <iframe id="video2" width="400" height ="400" src="//www.youtube.com/embed/FKWwdQu6_ok?enablejsapi=1&html5=1" frameborder="0" allowfullscreen></iframe>

        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  
    <div class="col s12 m4">
      <div class="card">
      <div class="card-image card-video">
      <img src="img/food.jpg">
          <span class="card-title">Card Title</span>
          <iframe id="video2" width="400" height ="400" src="//www.youtube.com/embed/FKWwdQu6_ok?enablejsapi=1&html5=1" frameborder="0" allowfullscreen></iframe>

        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <!-- <script type="script" src="js/video.js"></script> -->
 /**
 * play video on image or button click using onYouTubeIframeAPI. 
    And stop playing multypel video togather
 */
 <script>
 var tag = document.createElement('script');
    tag.src = "//www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

function onYouTubeIframeAPIReady() {
        var $ = jQuery;
        var players = [];
        
        $('iframe').filter(function(){return this.src.indexOf('http://www.youtube.com/') == 0}).each( function (k, v) {
            if (!this.id) { this.id='embeddedvideoiframe' + k }
            players.push(new YT.Player(this.id, {
                events: {
                 'onReady': function(event) {
                    $(document).on("click", ".card-video", function(){
                           
                           var hm = $(this).find('iframe').css("display","block");   
                            $.each(players, function(k, v) {
                                if (event.target.getIframe().id ) {
                                    this.playVideo();
                                }
                            });
                         });
                    },
                    'onStateChange': function(event) {
                        if (event.data == YT.PlayerState.PLAYING) {
                            $.each(players, function(k, v) {
                                if (this.getIframe().id != event.target.getIframe().id) {
                                    this.pauseVideo();
                                }
                            });
                        }
                    }
                }
            }))
        });
    }
</script>