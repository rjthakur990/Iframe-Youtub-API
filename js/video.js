/**
 *  insert iframe in a div. Getting video url and id form the div data attribute   
 */
jQuery(document).ready(function(){
    
    jQuery(".play").click(function(){
    frameUrl = jQuery(this).closest(".youtube-player").attr('data-url');
   frameId =  jQuery(this).attr('data-vid');
   iframeHtml = '<iframe src="'+frameUrl+'" class="yt_players frameborder="0" allowfullscreen="1" allow="autoplay" id="'+frameId+'"></iframe>'
   jQuery(this).closest(".youtube-player").append(iframeHtml);
   
   setTimeout(
    function() {
        
     
        $('#'+frameId)[0].contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
    
    },
    2000);


});

})