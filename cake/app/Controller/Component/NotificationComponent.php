<?php 

class NotificationComponent extends Component{
	
	public function send($text,$layout,$type,$timeOut) {
		
		return "<script> noty({text: '<strong>".$text
		       ."</strong>',layout:'".$layout
			   ."',type:'".$type
			   ."',timeout:".$timeout."}); 
		       </script>";

	   }//fecha function
	}//fim da classe



?>