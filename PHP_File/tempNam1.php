<!DOCTYPE html>
<html>
<title>Tempnam 1</title>
<head>
</head>
<?php
	if(isset($_POST['submit'])) {
		$dir = '../PHP_File/file/';	
		$tempNam = tempnam($dir,'TXT');
		$name = basename($tempNam);
		$name = str_replace(".tmp",".txt",$name);
		rename($tempNam,$dir.$name);
		$tempNam = str_replace(".tmp",".txt",$tempNam);
	}
?>
<body>
<form method="POST" id="uploadimage">   
	<input type="submit" value="Create" name="submit"/>
</form>
<?php if(isset($_POST['submit'])) {
?>
<p id="noi-dung">File txt được tạo ở <?php echo $tempNam?></p>
<?php 
}
?>
</body>
</html>