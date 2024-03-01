<?php 

session_start();
if(isset($_session["login"])) {
header("location: dashboard.php");
exit;

}

require 'function.php';


if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysql_query($conn, "SELECT * FROM user WHERE  username ='$username'");

	//cek username 
	if (mysql_num_rows($result) === 1) {
		//cek password
		$row = mysql_fetch_assoc($result);

		if (password_verify($password, $row["password"])) {
			$SESSION["login"] = true;
			header("Location; dashboard.php");
			exit;
			
		}
	}
	$error = true;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>Login</title>
    <style>

    .container{
    	width: 350px;
    	margin-top: 9%;
    	box-shadow: 0 3px 20px rgba(0,0,0,.3);
    	padding: 5px;
    }
    .btn{
    	width: 100px;
    	border-radius: 10px;

    }
   .form-control{
   	width: 300px;
   }
   .avatar{
   	font-size: 30px;
   	background: #E59866;
   	width: 50px;
   	height: 50px;
   	line-height: 50px;
   	position: fixed;
   	left: 50%;
   	transform: translate(-50%, -50%);
   	border-radius: 50%;
   	text-align: center;

   }
</style>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>SMK PUTRA GUNUNGHALU</b></a>
         <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark text-white bg-dark my-2 my-sm-0" type="submit">Search</button>
         </form>
        <div class="icon mr-4">
          <h5> 
            <i class="fas fa-envelope ml-3" data-togle="tooltip" title="Surat Masuk"></i>
            <i class="fas fa-bell ml-3" data-togle="tooltip" title="Notifikasi"></i>
            <i class="fas fa-sign-out-alt ml-3" data-togle="tooltip" title="Sign Out"></i>
          </h5>
        </div>
      </nav>

      <div class="container">
      	<div class="avatar">
      		<i class="fas fa-user"></i>
      	</div>
      	<br>
      	<h2 class="text-center">Halaman Login</h2>
      	<br>

      	<?php 
      	if (isset($error) ) :?>
      		<p style="color : red; font-style: italic;">Username/password salah</p>
      	 	
      	  <?php endif; ?>

      	  <form action=""method="post">
      	  	<label for="username">username :</label>
      	  	<div class="input-group mb-2 mr-sm-2">
      	  		<div class="input-group-prepend">
      	  			<div class="input-group-text"><i class="fas fa-user"></i></div>
      	  			<input type="text" class="form-control" name="username" id="username" placeholder="masukan username">
      	  		</div>
      	  	</div>

      	  	<label for="username">password :</label>
      	  	<div class="input-group mb-2 mr-sm-2">
      	  		<div class="input-group-prepend">
      	  			<div class="input-group-text"><i class="fas fa-lock"></i></div>
      	  			<input type="text" class="form-control" name="password" id="password" placeholder="masukan password anda">
      	  		</div>
      	  	</div>

      	  	<div class="text-right mt-2">
      	  		<button type="submit" name="login" class="btn btn-info">Login</button>
      	  	</div>

      	  </form>
      </div>
      <ul class="text-center">
      	<br>
      	<p>belum punya akun? <a href="registrasi.php">Registrasi Disini</a></p>
      </ul>
  </body>
  </html>