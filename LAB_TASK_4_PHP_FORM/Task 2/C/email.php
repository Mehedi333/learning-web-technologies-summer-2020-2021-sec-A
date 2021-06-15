<?php
	
	$email = "";
	
	if(isset($_REQUEST['submit'])){
		
		$email = $_REQUEST['name'];
		if($email == ""){
			echo "invalid name!";
		}
	}else{
		echo 'invalid request';
	}
?>

<!DOCTYPE html>
<html>

<head>
    <title>C</title>
</head>

<body>
    <fieldset>
        <legend>Email</legend>
        <form method="POST">
            <input type="text" name="email" value="<?php echo $email;?>"/><br>
            <hr style="width:100%;text-align:left;margin-left:0">
            <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>
</body>

</html>