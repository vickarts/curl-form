<?php
$data = array("name"=>$_POST['name'], "email"=>$_POST['email'], "status"=>$_POST['status']);
$string = http_build_query($data);

// THE URL BELOW SHOULD BE RELPLACED WITH A URL PROVIDED BY YOUR VENDOR. THE EMAIL-PREF FILE HAS BEEN PROVIDED FOR TESTING PURPOSES. 
$ch = curl_init("http://url-to-test-file.com/email-pref.php");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);
curl_close($ch);

// THE URL BELOW SHOULD BE RELPLACED WITH A URL PROVIDED BY YOUR VENDOR. THE EMAIL-PREF FILE HAS BEEN PROVIDED FOR TESTING PURPOSES.
$ch2 = curl_init("http://url-to-test-file.com/email-pref.php");
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