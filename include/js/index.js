
$(".fa-bars").on("click",function(){	
   $("div").first().removeClass('overlay');
   $("div").first().addClass("toverlay");
   $('.menu_t').removeAttr('id','menu_top');
   $('.menu_t').attr('id','tmenu_top');
})
$('.toverlay').on('click',function(){
   console.log('hi')
})
$('.delete_menu').on('click',function(){
	 $("div").first().removeClass('toverlay');
   $("div").first().addClass("overlay");
})