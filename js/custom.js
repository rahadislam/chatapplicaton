(function($){
	jQuery(document).ready(function(){

     jQuery('.registertion').click(function(){

       $.ajax({
         
         'url' :'register.php',
         'type':'POST',
         'data':{
         	'reg' :'ace'
         },
         'success':function(output){
         	jQuery('.link').html(output);
         }

       })

       return false;





     });



	});
}(jQuery))