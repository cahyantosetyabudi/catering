<?php include"../inc/config.php"; ?>
<?php
	session_start();
	if(!empty($_SESSION['iam_admin'])){
		redir("index.php");
	}
	
	if(!empty($_POST)){
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		// echo "email ".$email." ".$password;
		$q = mysqli_query($konek, "SELECT * FROM user WHERE email='$email' AND password='$password' AND status='admin' LIMIT 1");
		if($q){
			$r = mysqli_fetch_object($q);
			$_SESSION['iam_admin'] = $r->id;
			// echo json_encode($r);
			redir("home.php");
		}else{
			// echo "salah";
			alert("Maaf email dan password anda salah");
		}
	}
?>
<?php
if(!isset($_POST['password'])){
?>	

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    <link rel='stylesheet' href='<?php echo $url; ?>assets/bootstrap/css/bootstrap.min.css'>
	<link rel="stylesheet" href="<?php echo $url; ?>assets/css/style_login.css">

  </head>
  <body>
      <div class="wrapper">
    <form class="form-signin" action="" method="POST">       
      <h2 class="form-signin-heading">Silahkan login</h2>
      <input type="text" class="form-control" name="email" placeholder="Email" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>
    
  </body>
</html>
<?php 
} 
?>