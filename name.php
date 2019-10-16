<?php

	$uerror="";
	
	if(isset($_REQUEST['submit'])){

		$uname = $_REQUEST['uname'];

		if($uname == ""){
			$uerror = "null username";
		}else{
			$uerror = $uname;
		}

	}
?>
<html>

<head>
<title> NAME</title>
</head>

<body>

<form method="POST" action="nameHandler.php">
<fieldset>
<legend> <b>NAME</b> </legend>
 <input type="text" name="uname" size="50" placeholder=" " /> 
 <?php echo $uerror; ?> 
 <hr>
 <input type="submit" name="submit" value="Submit"> 
</fieldset>
</form>
</body>
</html>