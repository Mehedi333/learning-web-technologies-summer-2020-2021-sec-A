<!DOCTYPE html>
<html>
<head>
	<title>Vat</title>
</head>
<body>
    <?php 
    $amount = 150;  
    echo "VAT = 15% of $amount= " . ((($amount * 115)/100)-$amount) . "<br>";
    ?>
</body>
</html>