$(document).ready(function() {
      $('#bouton').on('click',soumettre);
}


);

function soumettre(){
	
	 if($('#weight').val()=='' || $('#drinks').val()==''){
	$('#ready').html('Please fill all the blanks');

	 }
	else{
	 $poid = $('#weight').val();
	 $consommation = $('#drinks').val();
		
		if($('input[name=sex]:checked', '#form1').val()=='male'){
			$r=0.68;
		}
		else{
			$r=0.55;
			
		}
	
	$formula = (0.8 * 15 * $consommation * 100)/($poid*1000*$r);
	$num = $formula.toFixed(2);
	$('#ready').html($num+'%');
	if($num>0.08){
		
		$('#ready').css('color','red');
		
	}
		if($num<=0.08){
		
		$('#ready').css('color','black');
		
	}
	}
};