
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Validation </title>
</head>
<body>
<?php 

    if(isset($_GET['password'])){

    	$username = $_GET['username'];
    	$password = $_GET['password'];

    	$f = fopen("text.txt", "r");
    	$data = fread($f, filesize("text.txt"));
    	$data_filter = explode("\n", $data);
    	


    	for($i = 0 ; $i<count($data_filter);$i++){

    		$_SESSION['UserName'] = $username;
    	  $_SESSION['Password'] = $password ;

    	  echo "Session User name:". $_SESSION['UserName'];
    	  
    	  echo "<br>";
    	}

    	 
    };

?>
<form action="Logout.php "   method="Post">
<button type="button" name="button"> LOg Out</button>
</form>

</body>
</html>
