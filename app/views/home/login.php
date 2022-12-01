<div class="main">
<div class="row">
        <div class="col">
            <?php Flasher::flash();?>
        </div>
</div>
		<!-- Sing in  Form -->
		<section class="sign-in">
			<div class="container">
				<div class="signin-content">
					<div class="signin-image">
						<figure>
							<img src="<?=BASEURL; ?>/img/siswa.jpg" alt="sing up image">
						</figure>
						<a href="<?=BASEURL; ?>/home/register" class="signup-image-link"><u>Buat Akun</u></a>
					</div>

					<div class="signin-form">
						<h2 class="form-title">Login Akun</h2>
						<form method="post" action="<?=BASEURL; ?>/home/loginAccount" class="register-form"
							id="login-form">
							<div class="form-group">
								<label for="username"><i
									class="zmdi zmdi-account material-icons-name"></i></label> <input
									type="text" name="Username" id="Username"
									placeholder="User Name" required/>
							</div>
							<div class="form-group">
								<label for="password"><i class="zmdi zmdi-lock"></i></label> <input
									type="password" name="Password" id="Password"
									placeholder="Password" required/>
							</div>
							<div class="form-group form-button">
								<input type="submit" name="signin" id="signin"
									class="form-submit" value="Log in" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>