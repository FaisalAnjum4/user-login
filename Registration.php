

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Validation </title>
</head>
<body>

	<h1>Registration Form Validation</h1>

	<?php 

		$firstName = $_POST['fname'];
		$lastName = $_POST['lastname'];
		$Gender = $_POST['gender'];
		$Email = $_POST['email'];
		$UserName = $_POST['username'];
		$Password = $_POST['pass'];
		$REmail = $_POST['remail'];

       
	
        $f = fopen("text.txt","a");
        

         fwrite($f, $UserName. "," .$Password."," .$firstName."," .$lastName."," .$Gender."," .$Email."\n");
        
        fclose($f);

       
        header('Location: Signin.html');
        exit;
	?>



</body>
</html>