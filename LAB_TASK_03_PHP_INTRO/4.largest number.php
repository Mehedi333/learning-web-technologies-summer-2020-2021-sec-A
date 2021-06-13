<!DOCTYPE html>
<html>
<head>
	<title>largest number</title>
</head>
<body>
    <?php 
    $num1=5;
    $num2=7;
    $num3=1;
    if($num1>$num2 && $num1>$num3){
      echo "$num1 is the largest number";
    }
    else{
      if($num2>$num1 && $num2>$num3){
        echo "$num2 is the largest number";
      }
      else
        echo "$num3 is the largest number";
    }
    ?>
</body>
</html>