$(document).ready(function(){
  $("#slider2").sliderResponsive({
    fadeSpeed: 300,
    autoPlay: "on",
    showArrows: "on",
    hideDots: "on"
  });
});
var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


  $(document).ready(function(){
    var pre = $('#dot-pre');
    var next = $('#dot-next');
    var b1 = $('#slide-box1');
    var b2 = $('#slide-box2');
      pre.click(function(){
        b1.hide();
        b2.slideDown(1500);
        next.removeClass('selected');
        pre.addClass('selected');
    });
    next.click(function(){
      b2.hide();
      b1.slideDown(1500);
      next.addClass('selected');
      pre.removeClass('selected');
    });
  });


  
$(document).ready(function(){
   $("#closevideo").vimeo("play");  
});



$(document).ready(function(){
  var url = $("#closevideo").attr('src');
  $("#myModal").on('hide.bs.modal', function(){
        $("#closevideo").attr('src', '');
    });
   $("#myModal").on('show.bs.modal', function(){
        $("#closevideo").attr('src', url);
    });
});

