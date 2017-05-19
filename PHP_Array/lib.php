<?php
    $arr = array(2,3);
    array_unshift($arr,1);
    print_r($arr);
	
	$arr = array(1,2);
    array_push($arr,3);
    print_r($arr);
	

    $arr = array(1,2,3,4,5);
    for ($i=0;$i<count($arr);$i++) {
	    echo $arr[$i]."<br>";
	}
	
	$arr = array(1,2,3,4,5);
    foreach ($arr as $val) {
        echo $val."<br>";
    } 

	
	$arr = array('1'=>5,'2'=>4,'3'=>3);
    foreach ($arr as $val=>$value) {
	    echo "[".$val."] => ".$value."<br>";
	}
	
	
	$arr=array(1,2,3,4,5);
	asort($arr);
	print_r($arr)."<br>";
	rsort($arr);
	print_r($arr)."<br>";
	
	$arr = array('2'=>7,'4'=>5,'3'=>8,'1'=>6,);
	krsort($arr);
	print_r($arr)."<br>";
	ksort($arr);
	print_r($arr)."<br>";
	
	$arr = array("a" => "green", "red", "b" => "green", "blue", "red");
	$result = array_unique($arr);
	print_r($result);
	
	
	$arr = array("oranges", "apples", "pears");
	$flipped = array_flip($arr);
	print_r($flipped);
	
	$arr= array("hello","nguyen","huu","hoai","nam");
	echo "<br>".implode(" ",$arr);
	
	$str = "Hello Nguyen Huu Hoai Nam";
    print_r(explode(" ",$str));
	
	$array = array(0 => 100, "color" => "red");
    print_r(array_keys($array));
	
	$array = array(0 => 100, "color" => "red");
    print_r(array_values($array));

	$arr= array(1,2,3,4,5,6,7,8);
    if (in_array(1,$arr)) {
       echo "Found";
	   
	$search_array = array('first' => 1, 'second' => 4);
	if (array_key_exists('first', $search_array)) {
    	echo "Key 'first' is exists in array ";
    }
	
	$arr = array("orange", "banana", "apple", "raspberry");
	array_shift($arr);
	print_r($arr);

	$arr = array("orange", "banana");
	array_unshift($arr, "apple");
	print_r($arr);
	
	$arr = array("orange", "banana", "apple", "raspberry");
	$delete = array_pop($arr);
	print_r($arr);
	echo $delete;
	
	$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
	$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
	print_r(array_diff_key($array1, $array2));
		
    $a = array("a" => "apple", "b" => "banana");
    $b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");
	print_r($a + $b);
	print_r(array_merge($a, $b));
	print_r(array_merge_recursive($a, $b)); 
	
	$arr = array(11,12,13,14,15,16,17);
	function sochan($n) 
	{
		return ($n%2==0);
	}
	echo "<br>",print_r(array_filter($arr,"sochan"));
	
	function binhPhuong($n) 
	{
		return $n*$n;
	}
	echo "map<br>",print_r(array_map("binhPhuong",$arr));
	
	function binhPhuong1($value,$key) 
	{
      echo"<br>$key=>".$value*$value." ";
	}
	$arr = array("1"=>2,"2"=>3,"3"=>4);
	array_walk($arr,"binhPhuong1");

}




