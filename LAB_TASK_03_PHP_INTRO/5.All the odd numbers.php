<!DOCTYPE html>
<html>
<head>
	<title>all the odd numbers between 10 to 100</title>
</head>
<body>
    <?php 
    for ($i=10; $i<=100; $i++)
    {   
    if($i%2!=0)    
    {       
        echo "$i <br>";
    }
    }
    ?>
</body>
</html>