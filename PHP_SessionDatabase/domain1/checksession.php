<!DOCTYPE html>
<?php
	require("session.php");
	if(isset($_POST['btnSubmit'])) {
		$idSession = $_POST['txtId'];
		$valueSession = $_POST['txtValue'];
		$session = new session();
		$session->start_session($idSession, false);
		$_SESSION[$idSession] = $valueSession;
		echo "<script>alert('Thêm session thành công')</script>";
	}
?>
<html>
<head>
<title>Domain 1</title>
</head>

<body>
<form name="form1" method="post" action="">
  <table width="300" border="1" align="center" cellpadding="2px">
    <tr>
      <td width="100">ID Session</td>
      <td width="180"><label for="txtId"></label>
      <input name="txtId" type="text" id="txtId" size="30" required></td>
    </tr>
    <tr>
      <td>Value Session</td>
      <td><label for="txtValue"></label>
      <input name="txtValue" type="text" id="txtValue" size="30" required></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnSubmit" id="btnSubmit" value="Create session"></td>
    </tr>
  </table>
</form>
</body>
</html>
