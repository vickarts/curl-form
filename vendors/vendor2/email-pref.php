<?php
$myfile = fopen("vendor2-records.txt", "w") or die("Unable to open file!");
$txt = "Name: " . $_POST['name'] . "\n";
$txt .= "Email Address: " . $_POST['email'] . "\n";
$txt .= "Status: " . $_POST['status'] . "\n";
fwrite($myfile, $txt);
fclose($myfile);