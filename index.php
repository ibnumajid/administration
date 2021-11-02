@ -5,7 +5,7 @@
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.png"/>
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
@ -33,8 +33,8 @@
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="login.php" method="post">
					<span class="login100-form-title " class="text-center">
						Selamat Datang !<br> Silahkan masukan username dan pasword
					<span class="login100-form-title p-b-43">
						SIM DTEO
					</span>
					
					
@ -53,16 +53,16 @@
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<!-- <div class="contact100-form-checkbox">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div> -->
						</div>

						<div>
							<a href="#" class="txt1">
								Lupa Password?
								Forgot Password?
							</a>
						</div>
					</div>
@ -73,7 +73,6 @@
							Login
						</button>
					</div>
					
					<div class="text-center">
  						<a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Daftar Akun</a>
					</div>
@ -102,6 +101,10 @@
include './_database/config.php';
if(isset($_POST['input']))
{
	if ($_POST['pass2'] !== $_POST['pass'])
	{ echo '<script> alert ("Perulangan password salah")</script>';}

	else {
  $user = $_POST['nm'];
  $pass = $_POST['pass'];
  $status = $_POST['pos'];
@ -115,7 +118,7 @@ if(isset($_POST['input']))
    else
    {
      echo '<script> alert ("Akun sudah terdaftar")</script>';
    }
    }}

}
	?>	
@ -131,6 +134,11 @@ if(isset($_POST['input']))
		<input name = "pass" type="password" id="orangeForm-pass" class="form-control validate">
        </div>

		<div class="md-form mb-4">
		<label data-error="wrong" data-success="right" for="orangeForm-pass">Ulangi Password</label>  
		<input name = "pass2" type="password" id="orangeForm-pass" class="form-control validate">
        </div>

        <div class="md-form mb-5">
		<label data-error="wrong" data-success="right" for="orangeForm-email">Silahkan Pilih Status anda</label>
		<div><input name = "pos" type = "radio" value = "2"> Dosen</div>
@ -147,23 +155,23 @@ if(isset($_POST['input']))
    </div>
  </div>
</div>




					
					
					
				</form>

				<!-- <div style="width: calc(100% - 560px)" class="min-vh-100" > -->
					<div style="width: calc(100% - 560px)" class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
						<img src="assets/images/dteologo.png" >
						<p class="text-center">SISTEM ADMINISTRASI <br>
						 DEPARTEMEN TEKNIK ELEKTRO OTOMASI <br> INSTITUT TEKNOLOGI SEPULUH NOPEMBER SURABAYA
						</p>
					</div>
				<!-- </div> -->
				

				<div class="login100-more" style="background-image: url('assets/images/dteobaru.jpeg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
