<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload File</title>
</head>
<?php
$uploaddir = '../PHP_Form-UploadFile/file/';
$uploadfile = $uploaddir . basename(@$_FILES['userfile']['name']);// basename() lấy tên file, loại bỏ các đường dẫn
if(isset($_POST['submit'])) {
	if (move_uploaded_file(@$_FILES['userfile']['tmp_name'], $uploadfile)) {
    	echo "<script>alert('Upload File Success')</script>";
	} else {
		echo "<script>alert('Upload File Fail')</script>";
	}
	echo '$_FILES attribute:';
	echo "<pre>",print_r(@$_FILES),"</pre>";
}
?>
<body>
<form enctype="multipart/form-data"  method="POST">   
    <input name="userfile" type="file" required/>
    <input name="submit" type="submit" value="Upload" />
</form>
</body>
</html>