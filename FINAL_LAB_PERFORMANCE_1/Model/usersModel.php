<?php
	require_once('DB_config.php');
	
	function getUserByID($id){

		$conn = getConnection();
		$sql = "select * from products where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;
	}


	function deleteUser($id){

	}


	function updateUser($user, $id){

	}

	function insertUser($user){
		/*$conn = getConnection();
	if(isset($POST['save']))
	{
		if(!empty($_POST['Name'])&&!empty($_POST['Buying Price'])&&!empty($_POST['Selling Price']))
		{
			$Name=$_POST['Name'];
			$Buying_Price=$_POST['Buying Price'];
			$Selling_Price=$_POST['Selling Price'];
			$sql = "insert into form(Name,Buying Price,Selling Price) values('$Name','$Buying_Price','$Selling_Price')";
			$run=mysqli_query($conn,$query) or die(mysqli_error());
			if($run){
				echo "Product added";
			}
			else{
				echo "all fields required";
			}
		}
	}*/
	
	}

?>