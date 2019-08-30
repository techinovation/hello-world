<?php
$email = $_POST['email'];
echo"<h3> Hello $email </h3>"."<br>";
$psw = $_POST['psw'];
echo"<h3> Your age is $psw </h3>"."<br>";
$psw1= $_POST['psw1'];
echo"<h3> You are  $psw1 </h3>"."<br>";


$myfile = fopen("abcde.txt","a") or die("File Not Found");
echo fwrite($myfile,"$email")."<br>";
echo fwrite($myfile,"$psw")."<br>";
echo fwrite($myfile,"$psw1")."<br>";
	fclose($myfile);