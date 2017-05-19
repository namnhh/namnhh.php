<?php
$uploaddir = '../PHP_Ajax/file/';
$uploadfile = $uploaddir . basename($_FILES['uploadfile']['name']);// basename() lấy tên file, loại bỏ các đường dẫn
	if ($_FILES['uploadfile']['size'] < (1024 * 1024 * 5)) {
		echo "File must more than 5MB";
	}
	else {
		if (move_uploaded_file(@$_FILES['uploadfile']['tmp_name'], $uploadfile)) {
    		echo "Upload File Success";
		} else {
			echo "Upload File Fail";
		}
	}

