<!DOCTYPE html>
<html>
<head>
	<title>Search element from an array</title>
</head>
<body>
    <?php 
    $search=20;
    $Array = [15, 50, 46, 20, 12, 30];

    for ($i = 0; $i < count($Array); $i++)  {
        if($search==$Array[$i])
        {
        echo "$Array[$i] is at array[$i]";
        }
    }
    ?>
</body>
</html>