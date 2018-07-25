<?php
	// function url(){
	//   return sprintf(
	//     "%s://%s%s",
	//     isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
	//     $_SERVER['SERVER_NAME'],
	//     $_SERVER['REQUEST_URI']
	//   );
	// }
	$uri = '127.0.0.1';
	$konek = mysqli_connect($uri, "root", "", "catering");
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  	// echo "success";
  }

	// settings
	$url = "http://".$uri."/catering/";
	$title = "SUSUNDAAN KITCHEN";
	$no = 1;

	function alert($command){
		echo "<script>alert('".$command."');</script>";
	}

	function redir($command){
		echo "<script>document.location='".$command."';</script>";
	}

	function validate_admin_not_login($command){
		if(empty($_SESSION['iam_admin'])){
			redir($command);
		}
	}
?>
