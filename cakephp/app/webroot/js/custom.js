$(document).ready(function() {
	$('#viewPosts').dataTable( {
     "sDom": '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>'
    });
    
    
    $('form').on('submit',function(){
	   if($('#pass').val()!=$('#cpass').val()){
	       alert('Passwords do not match');
	       return false;
	   }
	   return true;
	});
	
	
    
});

$('#myCarousel').carousel({  
  interval: 5000 // in milliseconds  
}) 

$(function(){
	$('#user-signup').on("click", function(){
		alert("You have signed up!");
    });
});