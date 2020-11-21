<?php
	session_start();
	if(isset($_POST['username'])&&isset($_POST['password'])){
		if($_POST['username']!=""&&$_POST['password']!=""){
			$username=$_POST['username'];
			$password=$_POST['password'];
			if(isset($_POST['remenber'])&&$_POST['remenber']==1){
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
			}
			if($username=="admin"&&$password=="123456"){
				header('location:admin_page.php');
			}else{
				echo  'Login fail!';
			}
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the login page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
</head>
<body style="background:#286ad6;">
	<form method="POST" style="margin-top: 45px;background: #ffffff;margin-top: 10%;margin-left: 35%;margin-right: 35%; padding:10px;">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control" value="<?php
				if(isset($_SESSION['username'])){
					echo $_SESSION['username'];
				}else{
					echo "";
				}
			?>">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" value="<?php
				if(isset($_SESSION['password'])){
					echo $_SESSION['password'];
				}else{
					echo "";
				}
			?>">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success" style="width: 100px;">Login</button>
			<label style="padding-left: 20px;"><input type="checkbox" name="remenber" value="1">Remenber password</label>
		</div>
	</form>
</body>
</html>