<?php
$data = array("name"=>$_POST['name'], "email"=>$_POST['email'], "status"=>$_POST['status']);
$string = http_build_query($data);

$ch = curl_init("http://www.vickarts.com/curling-php/vendors/vendor1/email-pref.php");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);
curl_close($ch);

$ch2 = curl_init("http://www.vickarts.com/curling-php/vendors/vendor2/email-pref.php");
curl_setopt($ch2, CURLOPT_POST, true);
curl_setopt($ch2, CURLOPT_POSTFIELDS, $string);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch2);
curl_close($ch2);

if($_POST['status'] == "1") { 
    header("Location: success.html");
} else {
    header("location: sadness.html");
}