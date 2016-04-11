require('../node_modules/jquery/dist/jquery.min.js');





$.ajax({
  type: 'GET',
  url: 'loadtext.php',
  dataType: 'text',
  success: function(data){

  	$('#getdata').html(data);
 
  }
});