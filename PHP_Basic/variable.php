<?php
	$name = 'Nguyen Huu Hoai Nam';
	list($age, $sex, $job) = array('22', 'male', 'developer');
	define('COMPANY', 'GMO-Z.com RUNSYSTEM');
	echo "Name: $name<br>".
		 "Age: $age<br>".
		 "Sex: $sex<br>".
		 "Job: $job<br>".
		 "Company: ".COMPANY."<br>";  

?>		 

<?php
$var = 0;

if (empty($var)) {
    echo "$var is either 0, empty, or not set at all<br>";
}
//Trả về true do $var có giá trị bằng 0.

if (isset($var)) {
    echo "$var is exist<br>";
}
//Trả về true vì biến $var đã tồn tại.

$var1 = 1;

if (!empty($var1)) {
    echo "$var1 is exist<br>";
}
//Trả về false vì biến $var1 tồn tại và khác những giá trị ở (*)

if(!isset($var2)) {
    echo "var2 is not exist<br>";
}
//Trả về false vì biến $var2 chưa tồn tại
?>		 
		 

<?php
$a = 2;
$b = 4;	

echo $mess = ($a > $b) ? "$a lớn hơn  $b<br>" :( $a < $b ? "$a nhỏ hơn  $b<br>" : "$a bằng $b<br>");

if($a > $b) {
    echo "$a lớn hơn $b<br>"; 
} elseif($a < $b) {
   echo "$a nhỏ hơn $b<br>";
} else {
    echo "$a bằng $b<br>";
}

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>

<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    echo "<br>".$value." ";
}
for ($i = 0; $i < count($arr); $i++) {
	 echo "<br>".$arr[$i]."/";
}

$i = 0;
while ($i < count($arr)) {
	 echo "<br>".$arr[$i]."*";
	 $i++;
}