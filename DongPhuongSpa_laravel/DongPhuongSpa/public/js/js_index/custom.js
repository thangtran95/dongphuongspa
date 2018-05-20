$("#slider3").sliderResponsive({
    hoverZoom: "off",
    hideDots: "on"
  });



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


  
// $(document).ready(function(){
//    $("#closevideo").youtube("play");  
// });



$(document).ready(function(){
  var url = $("#closevideo").attr('src');
  $("#myModal").on('hide.bs.modal', function(){
        $("#closevideo").attr('src', '');
        // alert('quan');
    });
   $("#myModal").on('show.bs.modal', function(){
        $("#closevideo").attr('src', url);
    });
});


$(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=175588756336328&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));