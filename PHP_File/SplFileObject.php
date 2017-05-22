<!DOCTYPE html>
<html>
<title>Spl File Object</title>
<head>
<style>
#uploadimage {
	text-align: center;
}
#progress-wrp {
    border: 1px solid #0099CC;
    padding: 1px;
    position: relative;
    border-radius: 3px;
    margin: 10px;
    text-align: left;
    background: #fff;
}
#progress-wrp .progress-bar{
    height: 20px;
    border-radius: 3px;
    background-color: green;
    width: 0;
}
#progress-wrp .status{
    top:3px;
    left:50%;
    position:absolute;
    display:inline-block;
    color: #000000;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(e) {
	var progress_bar_id = '#progress-wrp';
	$("#uploadimage").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
		url: "upFile.php", // Url to which the request is send
		type: "POST",             // Type of request to be send, called as method
		data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
		contentType: false,       // The content type used when sending data to the server.
		cache: false,             // To unable request pages to be cached
		processData:false,        // To send DOMDocument or non processed data file it is set to false
		xhr: function(){
		//upload Progress
			var xhr = $.ajaxSettings.xhr();
			if (xhr.upload) {
				xhr.upload.addEventListener('progress', function(event) {
				var percent = 0;
				var position = event.loaded || event.position;
				var total = event.total;
				if (event.lengthComputable) {
					percent = Math.ceil(position / total * 100);
			}
			//update progressbar
			$(progress_bar_id +" .progress-bar").css("width", + percent +"%");
			$(progress_bar_id + " .status").text(percent +"%");
			}, true);
			}
			return xhr;
		}
		}).done(function(res){ //
			$("#uploadimage")[0].reset(); //reset form
			$("#noi-dung").html(res); //output response from server
			});
	}));
});
</script>
</head>
<?php

?>
<body>
<form enctype="multipart/form-data"  method="POST" id="uploadimage">   
	<input type="file" name="uploadfile" id="uploadfile" multiple required>
	<input type="submit" value="Upload" />
</form>
 <div id="progress-wrp">
  <div class="progress-bar"></div >
  <div class="status">0%</div>
 </div>
 <p id="noi-dung"></p>
</body>
</html>