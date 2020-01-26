var header = document.querySelector(".nav");
var sticky = header.offsetTop;

// ------------------1.for overlaying ---------------

$(".fa-bars").on("click",function(){	
   $("div").first().removeClass('overlay');
   $("div").first().addClass("toverlay");
   // window.onscroll = function () { window.scrollTo(0, 0); };
   $('body').css({"overflow":"hidden"});
   header.classList.remove("sticky");
   
})
// $('.toverlay').on('click',function(){
//    console.log('hi')
// })
$('.delete_menu').on('click',function(){
	 $("div").first().removeClass('toverlay');
   $("div").first().addClass("overlay");
   // window.onscroll = function () { window.scrollTo(); };
    $('body').css({"overflow":"visible"});
    header.classList.add("sticky");

})
// -----------------------1.end--------------------

// --------------------------2.li on 1st side bar-------------------
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
// ------------------------------2.end-------------------------------

// ----------------------3.moving 2nd sider bar from right to left--------------------
document.querySelector('.menu_catg_ul .fa-chevron-left').addEventListener('click',function() {
	document.querySelector('#ov-menu').style.display='block';   
    document.querySelector('#part_of_menu').style.animation='nai 0.7s';
    timeOut()
     // document.querySelector('#part_of_menu').style.display='none';
 
})


function timeOut(){
	setTimeout(function(){
      document.querySelector('#part_of_menu').style.display='none';
	}, 700);
}
// ---------------------------3.End-------------------------------


// ---------------------------------4.for making Header fixed-----------------------
// && document.querySelector("div").classList.contains('toverlay')=='false'
function making_header_fixed(){

window.onscroll = function() {myFunction()};
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
}
// --------------------4.End----------------------


// ------------------------------5removing side-bar by clicking anywhere in the body else side bar------------------------------
$('.overlay').click(function(evt){    
    
       if($(evt.target).closest('#ov-menu').length)
          return; 
        else if($(evt.target).closest('#part_of_menu').length)
          return 
       else
       {   
          setTimeout(function(){
            $("div").first().removeClass('toverlay');
          $("div").first().addClass("overlay");
          $('#part_of_menu').css('display','none');
          $('body').css({"overflow":"visible"});
          header.classList.add("sticky");

        },100)        
          
        }
});

// -------------------5.END----------------------