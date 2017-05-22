<!DOCTYPE html>
<html>
<title>Tempnam 2</title>
<head>
</head>
<?php
	
	if(isset($_POST['submit'])) {
		//create file
		$dir = '../PHP_File/file/';	
		$tempNam = tempnam($dir,'CSV');
		$name = basename($tempNam);
		$name = str_replace(".tmp",".csv",$name);
		rename($tempNam,$dir.$name);
		$tempNam = str_replace(".tmp",".csv",$tempNam);
		
		//put data into csv
		$list = array (
			array('1', 'Nam'),
			array('2', 'Quang'),
			array('3', 'Luan')
		);
		$f = fopen($dir.$name, 'w');
		foreach ($list as $fields) {
			fputcsv($f, $fields);
		}
		fclose($f);
		
		//download
		header("Cache-Control: public");
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$name");
		header("Content-Type: application/zip");
		header("Content-Transfer-Encoding: binary");

		// read the file from disk
		readfile($dir.$name);
	}
?>
<body>
<form method="POST" id="uploadimage">   
	<input type="submit" value="Create and Download" name="submit"/>
</form>
</body>
</html>