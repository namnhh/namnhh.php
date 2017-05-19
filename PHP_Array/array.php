<?php
	header('Content-Type: text/html; charset=utf-8');
	/**
 	* exercise array 
 	*
 	* @param array  $firstArr First Array
 	* @param array $secondArr Second Array
 	* @param array $thirdArr Third Array
 	*
 	* @throws LogicException If all @param is not array
 	* @author NamNHH
 	* @return string $result
 	*/ 
	function exerciseArray($firstArr, $secondArr, $thirdArr) 
	{
		//check validate @param
		$result = "";
		if (!is_array($firstArr)) {
			$result = $result." 1 ";
		}
		if (!is_array($secondArr)) {
			$result = $result." 2 ";
		}
		if (!is_array($thirdArr)) {
			$result = $result." 3 ";
		}
		
		if ($result != "") {
			echo "<br>Invalid parameter:".$result."<br>";
		}
		if ($result === "") {
			
			//logic function spec 1
			echo "<br><br>Spec1: Tìm kiếm số 1 trong array thứ 1<br>";
			if (in_array(1,$firstArr)) {
				echo "*Spec1: Found<br>";
			} else {
				echo "*Spec1: Not Found<br>";
			}
			
			/**logic function spec 2
			 * array_merge : new array after merge two array together
			 * array_unique	: new array without duplicate values
			 * implode : returns a string from the elements of an array and put some option between array
			 */
			 
			echo "<br>Spec2: Merge 2 array thứ 2 và 3 lại, xóa bỏ trùng lặp, echo kết quả ra màn hình theo format dạng string (*)<br>";
			$mergeArr =  array_unique(array_merge($secondArr,$thirdArr));
			asort($mergeArr);
			echo "*Spec2: ".implode(", ", $mergeArr)."<br>";
			
			/**logic function spec 3
			 * array_filter — Filters elements of an array using a callback function
			 */
			 
			echo "<br>Spec3: In ra tất cả value của (*) mà tổng các chữ số của nó chia hết cho 2<br>";  
			$filterArr = array_filter($mergeArr, "checkNumber");	
			echo "*Spec3: ".implode(", ", $filterArr)."<br>";		
		
			/**logic function spec 4
			 * array_intersect- returns an array containing all the values of array that are present in another array
			 */
			 
			echo "<br>Spec4: In ra tất cả value (đã sắp xếp tăng dần) của array thứ 1 mà nó tồn tại trong (*)<br>"; 
			$intersectArr = array_intersect($mergeArr, $firstArr);
			asort($intersectArr);
			echo "*Spec4: ".implode(", ",$intersectArr)."<br>";
			
			/**logic function spec 5
			 * array_flip : flip array key=>value to value=>key
			 *array_diff_key: Returns an array containing all the entries from array1 whose keys are not present in another arrays.
			 */
			 
			echo "<br>Spec5: In ra tất cả value (đã sắp xếp giảm dần) của array thứ 1, mà key của nó không có trong (*)<br>";  
		    $result = array_diff_key($firstArr,array_flip($mergeArr));
			arsort($result);
			echo "*Spec5: ".implode(", ",$result)."<br>";
		}
	}
	
	/**
	 * kiem tra tong cac chu so co chia het cho 2 
	 *
	 * @param integer $number
	 * 
 	 * @author NamNHH
 	 * @return boolean 
 	 */ 
	function checkNumber($number) {
		$tong = 0;
		$du;
		while ($number > 0) {
			$du = $number % 10;
			$number = $number / 10;
			$tong = $tong + $du;
 		 }
		if ($tong%2 == 0) {
			return true;
		}
	}
	
	//khai bao cac array va goi ham
	$a = array(2,1,3);
	$b = array(1);
	$c = array(3);
	echo "<br>Mang thu nhat: ";print_r($a);
	echo "<br>Mang thu hai: ";print_r($b);
	echo "<br>Mang thu ba: ";print_r($c);
	exerciseArray($a,$b,$c);
	
 