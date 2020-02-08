<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
<?php

$string1 = "netherland";
	echo "Input= $string1 <br>"; 
	echo "Output = Ada <strong>".preg_match_all('/[aeiou]/i',$string1,$matches)." huruf vokal</strong> di dalam kata <strong>".$string1."</strong> <br> <br>";

$string2 = "australia";
	echo "Input = $string2 <br>";
	echo "Output = Ada <strong>".strlen($string2)." huruf didalam kata"." $string2";
?>

</body>
</html>
