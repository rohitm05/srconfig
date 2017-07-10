// JavaScript Document
$(document).ready(function(){
    $(".menu_icon").click(function(){
        $(".menu").slideToggle();
    });
	$(window).resize(function () {
		var w=$(window).width();
		if(w>=820)
		{
		  $(".menu").show();
		}
		if(w<820)
		{
		  $(".menu").hide();
		}
	});
});
  
  function show(i){
		document.getElementById('i').src=i.src;

	}
