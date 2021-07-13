<?php
	session_start();

	if(isset($_POST['save'])){

		$Name= $_POST['Name'];
		$Buying_Price= $_POST['Buying Price'];
		$Selling_Price= $_POST['Selling Price'];

		if($Name != '' && $Buying_Price != '' && $Selling_Price != ''){
			require_once('../model/usersModel.php');
			$users = insertUser($user);
	}else{
		echo "invalid request...";
	}
	}
?>