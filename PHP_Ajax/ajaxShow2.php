<!DOCTYPE html>
<html>
<title>Bai AJAX 2</title>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	var arr = [1,4,5,6,10];
	$("#arr").text(arr);
    $("button").click(function(){
        $.ajax({
        url: "ajaxCheck2.php",
        type: "POST",
        data: {result:JSON.stringify(arr)},
        success: function(result){
			result = JSON.parse(result);
			$("#tong").text(result[0]);
			$("#tich").text(result[1]);
		}
       });
    });
});
</script>
</head>
<body>
<h2>Các phân tử trong mảng:</h2>
<p id="arr"></p>
<p id="kq"></p>
<p>
   <h4>Tổng các phần tử trong mảng:</h4>
   <h4 id="tong"></h4>
</p>
<p>
    <h4>Tích các phần tử trong mảng:</h4>
    <h4 id="tich"></h4>
</p>

<p><button>Tính</button></p>
</body>
</html>