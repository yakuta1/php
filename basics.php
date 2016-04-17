<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</object>
	<title>PHP</title>
</head>
<body>
<?php
$x =6;
$double_number = 2.5;
$str = "Anton";
$b = true;
$arr_1 = array(0=>"First", 1=>"Two", "Name"=>"Three");
$arr_2 = array();
$arr_2[0] = "One";
$arr_2[1] = "Two";
$n = null;
define("PI", "3.141546");

echo "Number ".$x."<br>";
echo "Double number $double_number <br>";
echo "String $str<br>";
echo "Boolean $b <br>";
echo '$b'."<br>";
echo "Array: $arr_1[Name] <br>";
echo "Array 2: $arr_2[1] <br>";

echo PI."<br>";
echo defined("PI")."<br>";
echo "<hr>";

echo isset($str)."<br>";
unset($arr_1[0]);

echo is_string($str)."<br>";
echo gettype($b)."<br>";


$str_number = "192.45";
echo gettype($str_number)."<br>";
$double = (double) $str_number;
echo gettype($double)."<br>";

echo "<hr>";
print_r($arr_1);
echo "<br>";
var_dump($arr_1);
echo "<br>";
var_export($arr_1);

echo "<hr>";
echo "<h1>Array</h1><br>";

$ar = array(111,112,113);

for($i=0; $i < count($ar); $i++){echo $ar[$i]."<br>";}

echo "<hr>";
echo "<h1>For Each</h1><br>";

$ar2 = array("one" =>111, "two"=>112, "test"=>113);

foreach($ar2 as $k=>$v){
    echo $k."=>".$v."<br>";
    }

echo "<hr>";
echo "<h2>Array Merge</h2>";
$ar3 = array_merge($ar, $ar2);
var_dump($ar3);

echo "<hr>";
echo "<h2>Explode Implode</h2>";
$st = "Anton,Yakuta,Molodec";
$ts = explode(",", $st);
var_dump($ts);

$st2 = implode("- -", $ts);
echo "<br>$st2";


?>	
</body>
</html>