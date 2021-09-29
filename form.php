<?php

?>
<style>
body{

	 background-size: cover;
}

</style>

<script>
var i = 180;
(function timer(){
    if (--i < 0) return;
    setTimeout(function(){
		
        document.getElementsByTagName('h1')[0].innerHTML = i + ' secs';
		
        timer();
		
    }, 1000);
	if (timer==0){
	alert("Sorry Time Out");}

	})();
	
</script>
<h3>You Can Fill form with in 3 mins</h3>
<h2>Time Left</h2><h1>180 secs</h1>


<script type="text/javascript">
    function blockSpecialChar(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }
    </script>

<body style="background-color:powderblue;">
<div class="panel panel-primary" style="max-width:300px;margin:auto">

		<div class="panel-body panel-center">
	<form class="form" action="act_per_form.php" method="post">		


<div class="form-group">
<label for="nameField">Name</label>
<input type="text" class="form-control input-sm" name="uname"   onkeypress="return blockSpecialChar(event)" required placeholder="Name" />

</div>

<br>
<div class="form-group">
<label for="emailField">Email</label>
<input type="email" class="form-control" name="e_mail" required placeholder="Enter Email here" required>
</div>

<br>

<div class="form-group">
		<label for="dob">Date of Birth</label>
		<input type="date" class="form-control" name="dob" value="<?php echo $dob;?>" required><br><br>
											
<div class="form-row">
	About Yourself:<br><br>
<textarea rows = "7" cols = "50" name = "about_self" style="text-align:left-side;">
</textarea>
											







<?php
//echo(rand(0,10));
//echo "";
$n1=(rand(0,9));
$n2=(rand(0,9));
echo "<h2><b><i>Captcha</i></b><h2>";
echo "<h4>$n1 + $n2";

$n3=$n1+$n2;

//echo "<br><br>Result is $n3";
?>

<a href='ass2.php' class='btn btn-primary' style="background-color:#696969">Refresh</a>

</h4>
<input type="text" class="form-control" name="captcha" required placeholder="Enter Result of Captcha" />
<input type="hidden"  value="<?php echo $n3;?>" name="n3" />
<br><br>

	
<input type="submit" class="btn btn-primary btn-block" value="Submit" /> 
</form>
		</div>
		
		
	</div>

</body>

