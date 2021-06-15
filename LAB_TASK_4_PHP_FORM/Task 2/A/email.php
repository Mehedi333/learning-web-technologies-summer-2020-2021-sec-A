<?php
	
	if(isset($_REQUEST['submit'])){
		
		$email = $_REQUEST['email'];

		if($email == ""){
			echo "invalid Email!";
		}else{
			echo $email;
		}

	}else{
		echo 'invalid request';
	}
?>