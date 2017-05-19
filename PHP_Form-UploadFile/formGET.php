<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FORM</title>
</head>
<?php
    if(isset($_GET['txtTen'])) {
		$ten = $_GET['txtTen'];
		echo '<script> alert("Xin chao '.$ten.'")</script>';
	}
?>
<body>
<form action="" method="get">
  <label for="txtTen"></label>
  <input type="text" name="txtTen" id="txtTen" required>
  <input type="submit" name="btnSubmit" id="btnSubmit" value="Gửi">  
</form>
</body>
</html>
