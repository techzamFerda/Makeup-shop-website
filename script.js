// JavaScript Document
 $(document).ready(function(){
	 var click = false; 
		 $('#hamburger-icon').click(function(){
			 if(click == false){
			$(".main-menu").animate({ left:'0px' });
			   $('#hamburger-icon').toggleClass("fa-times");
			  click = true;
	}else{
		 $('#hamburger-icon').toggleClass("fa-times");
			$(".main-menu").animate({ left:'-600px' });
			  click = false;
	 }
		  
	});	
	 
	 
	 
	 	 $(window).scroll(function(){
			 var scrollafstand = $(window).scrollTop();
			 var afstandItem1 = $(".content1").offset().top;
			  var afstandItem2 = $(".content2").offset().top;
			   var afstandItem3 = $(".content3").offset().top;
			
			 if(scrollafstand > (afstandItem1 - $(window).height())){
				  $('.content1').animate({ bottom:'0', opacity:'1'},2000);
			 } 
			 
			  if(scrollafstand > (afstandItem2 - $(window).height())){
				 $('.content2').animate({ bottom:'0',opacity:'1'},2000);
			 }
			 
			  if(scrollafstand > (afstandItem3 - $(window).height())){
				 $('.content3').animate({ bottom:'0',opacity:'1'},2000);
			 }
			 
			
		 });
	
	
	
	$("#btn-aanvaarden").click(function(){
		$(".cookie-message").fadeOut("slow", function(){
   
  });
               });		





	 
	 
	 
	 	
				
			});
			
			
		
	 
	 
		  

	
         

