$(".fa-bars").on("click",function(){	
   $("div").first().removeClass('overlay');
   $("div").first().addClass("toverlay");
   
})
$('.toverlay').on('click',function(){
   console.log('hi')
})
$('.delete_menu').on('click',function(){
	 $("div").first().removeClass('toverlay');
   $("div").first().addClass("overlay");
})

var menu_i=document.querySelectorAll('.menu-catg li');
var temp=[];

for(var i=0;i<$('.menu-catg li').length;i++){
      
     // menu_i[i].addEventListener('mouseover',function(){
     // 	temp[i]=this.innerHTML;
     // 	this.innerHTML='<i class="fas fa-chevron-right"></i>'+temp[i];
     // },10000)

     // menu_i[i].addEventListener('mouseout',function(){
     // 	this.innerHTML=temp[i];
     	
     // },10000)
     menu_i[i].addEventListener('click',function(){
     	 document.querySelector('#part_of_menu').style.animation='pa_of_me_ani 0.40s';
     	document.querySelector('#part_of_menu').style.display='block';
     	// document.querySelector('#ov-menu').style.width='200px';
     })
}
document.querySelector('.menu_catg_ul .fa-chevron-left').addEventListener('click',function() {
	document.querySelector('#ov-menu').style.display='block';   
    document.querySelector('#part_of_menu').style.animation='nai 0.7s';
    timeOut()
     // document.querySelector('#part_of_menu').style.display='none';
 
})

document.querySelector('.overlay').addEventListener('click',function(){
	this.style.display='none';
})

function timeOut(){
	setTimeout(function(){
      document.querySelector('#part_of_menu').style.display='none';
	}, 700);
}