<?php
require "dbi.php";



$uname=$_POST["name"];
$e_mail=$_POST["e_mail"];
$dob=$_POST["dob"];
$about_self=$_POST["about_self"];


$query="insert into personal_form(uname,e_mail,dob,about_self)values('$uname','$e_mail','$dob','$about_self')";

mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_affected_rows($con) > 0)
{
echo "<center><div class='well text-center'><h2 style='color:blue'>Form Send Successfully</h2>";
	
}

?>