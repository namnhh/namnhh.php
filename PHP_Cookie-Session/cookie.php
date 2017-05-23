<?php
$cookieName = "user";
$cookieValue = "Nam";
setcookie($cookieName, $cookieValue, time() + (60 * 60 * 42 * 30), "/"); 
if(!isset($_COOKIE[$cookieName])) {
    echo "Cookie named '" . $cookieName . "' is not set!";
} else {
    echo "Cookie '" . $cookieName . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookieName];
}


//remove cookie
//setcookie($cookieName, $cookieValue, time() - (60 * 60 * 42 * 30), "/"); 
