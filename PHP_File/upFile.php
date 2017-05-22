<?php
$uploaddir = '../PHP_File/file/';
$uploadfile = $uploaddir . basename($_FILES['uploadfile']['name']);
		if (move_uploaded_file(@$_FILES['uploadfile']['tmp_name'], $uploadfile)) {
			$f = fopen($uploadfile,"r");
			while(!feof($f)) {				
				echo fgets($f)."<br>";
			}
			fclose($f);
		} else {
			echo "Upload File Fail";
		}


