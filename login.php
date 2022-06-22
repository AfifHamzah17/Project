<?php  
    session_start();
    include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Struktur Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css-form-login.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Contoh Penerapan Rekayasa Ide <br> "Form login struktur data" </br></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
                <form method= "post">  
		      	<form action="#" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" name="fusername" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" name="fpassword" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="fmasuk">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>

              <?php 
                if (isset($_POST['fmasuk'])) {
                    $username = $_POST['fusername'];
                    $password = $_POST['fpassword'];
                    $qry = mysqli_query($koneksi,"SELECT * FROM `tab _login` WHERE username = '$username' AND password = md5('$password')");
                    $cek = mysqli_num_rows($qry); 
                    if ($cek==1) {
                        $_SESSION['userweb']=$username;
                        header ("location:admin.php");
                        exit;
                    }
                    else{
                        echo "The account name or password that you have entered is incorrect";
                    }
                }
              ?>
	          <p class="w-100 text-center">&mdash; My Social Media &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="https://www.facebook.com/afifhamzah17" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="https://www.instagram.com/afifhamzah17/" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Instagram</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

