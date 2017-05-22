<?php
$uploaddir = '../PHP_File/file/';
$uploadfile = $uploaddir . basename($_FILES['uploadfile']['name']);
		if (move_uploaded_file(@$_FILES['uploadfile']['tmp_name'], $uploadfile)) {
			$f = new SplFileObject($uploadfile,"r");
			while (!$file->eof()) {
				echo $file->fgets()."<br>";
			}
		} else {
			echo "Upload File Fail";
		}


