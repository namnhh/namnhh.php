<!DOCTYPE html>
<html>
<title>Bai AJAX 1</title>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.ajax({ type: "POST", url: "ajaxCheck1.php", success: function(result){
            alert(result);
        }});
    });
});
</script>
</head>
<body>
<button>Click me!!!</button>
</body>
</html>