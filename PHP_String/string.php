<?php
	header('Content-Type: text/html; charset=utf-8');
	/**
 	* checkString 
 	*
 	* @param String  $str
 	*
 	* @throws LogicException If @param is not string
 	* @author NamNHH
 	* @return boolean
 	*/
	function checkString($str)
	{
		return is_string($str);
	}
	
	
	/**
	* bai1: Single quote và double quotes
	* @param none
	* @throws LogicException If @param is not string
 	* @author NamNHH
 	* @return none
	*/
	function bai1() 
	{
		echo '<br>Single Quote: Money  $ &#95;&#95; $  money';
		echo "<br>Double Quote: Money $ &#95;&#95; $ money";		
	}
	
	/**
	* bai2: Tìm kiếm trong string
	* @param $str1
	* @param $str2	
	* @throws LogicException If @param is not string
 	* @author NamNHH
 	* @return boolean
	*/
	function bai2($str1, $str2) 
	{
		$pos = strpos($str1, $str2);
			if ($pos === false) {
				return false;
			} else {
    			return true;
			}		
	}
	
	/**
	* bai3: Multiple bytes string
	* @param $str
	* @throws LogicException If @param is not string
 	* @author NamNHH
 	* @return boolean
	*/
	function bai3($str)
	{
    	return !mb_check_encoding($str, 'ASCII') && mb_check_encoding($str, 'UTF-8');
	}
	
	/**
	* bai4: TRIM
	* @param $str
	* @param $del will be deleted in $str
	* @throws LogicException If @param is not string
 	* @author NamNHH
 	* @return string
	*/
	function bai4($str,$del) {
		return trim($str,$del);
	}
	
	
	//Call function
	//bai 1:Single quote và double quotes
	echo "<br>Bai 1: In ra màn hình đoạn chuỗi, viết bằng 2 cách single quote và double quotes";
	bai1();
	
	//bai2:Tìm kiếm trong string.
	$str1 = "Nguyen Huu Hoai Nam";
	$str2 = "Nam"; 
	echo "<br><br>Bai 2: Viết một function để tìm kiếm một chuỗi con trong một chuỗi mẹ";
	echo "<br>Chuỗi 1: $str1";
	echo "<br>Chuỗi 2: $str2";
	if (!checkString($str1) || !checkString($str2)) {
		echo "<br>Invalid parameter";
	} else {
		if (bai2($str1,$str2)) {
			echo "<br>Tìm thấy chuỗi '$str2' trong '$str1'";
		} else {
			echo "<br>Không tìm thấy chuỗi '$str2' trong '$str1'";
		}
	}
	
	//bai3:Multiple bytes string.
	$str = "Nguyễn Hữu Hoài Nam";
	echo "<br><br>Bai 3: Viết một function để phân biệt multiple bytes hoặc single byte.";
	echo "<br>Chuỗi : $str";
	if (!checkString($str)) {
		echo "<br>Invalid parameter";
	} else {
		if (bai3($str)) {
			echo "<br>Chuỗi '$str' là multiple bytes";
		} else {
			echo "<br>Chuỗi '$str' là single byte";
		}
	} 
	
	//bai4: TRIM
	$trim = "trim";
	echo "<br><br>Bai 4: TRIM";
	echo "<br>1.Hãy xóa chữ 'm' ra khỏi chữ 'trim'.Chỉ được sử dụng 1 trong 3 hàm trim, ltrim hoặc rtrim.";
	echo "<br>Chuỗi trước khi xóa: $trim"; 
	echo "<br>Chuỗi sau khi xóa: ".bai4($trim,"m");;
	echo "<br>2.Tương tự câu 1. Hãy đảo ngược chuỗi lại và sử dụng hàm ltrim.";
	$trim =  strrev($trim); // đảo ngược chuỗi 
	echo "<br>Chuỗi trước khi xóa: $trim";	
	echo "<br>Chuỗi sau khi xóa: ".ltrim($trim,"m");



	
