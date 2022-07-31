<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Abdulmalk Supermarket</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
<center>
	<form class="login-form"  method="post">
		<h2 class="form-title" style="font-style:verdana;">Abdulmalik Adigun Supermarket</h2>
 <?php
 if(isset($_POST['register_btn'])){
    $username= $_POST['username'];
    $password =$_POST['password'];
    
    if($username == "malik"  && $password == "adigun") {
       $_SESSION['allow']="true";
        echo"<script>location.href='welcome.php'</script>";
    }else
  { 
echo" your username or password is invalid";
}
    
 }
 
 
  ?>
		<!-- form validation messages -->
		<div class="form-group">
			<label style="font-style:elephant;">Username </label>
			<input type="text" name="username"style="font-style:elephant;" required>
            <img src="image/images (5).jpeg">
		</div>
		<div class="form-group">
			<label style="font-style:elephant;">Password</label>
			<input type="password" name="password" style="font-style:elephant;"required>
		</div>
		<div class="form-group">
<input type="submit" style="font-style:elephant;" style="width: 70px;" name="register_btn" value="login" required>


		</div>
	<!---	<a href="passwordcollect.php.php">forget password</a></br>
        	<a href="register.php">Create New Account</a>-->
	</form>
    </center>
</body>
</html>
