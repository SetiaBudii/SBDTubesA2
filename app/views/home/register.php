<?php
	echo var_dump($data);
?>

<div class="main">
<div class="row">
        <div class="col">
            <?php Flasher::flash();?>
        </div>
</div>
		<!-- Sign up form -->
		<section class="signup">
			<div class="container">
				<div class="signup-content">
					<div class="signup-form">
						<h2 class="form-title">Buat Akun</h2>
						<form method="post" action="<?= BASEURL; ?>/home/registerUser" class="register-form" id="register-form">
						<div class="form-group">
								<input type="hidden" name="Role" id="Role" value="PESERTA"/>
							</div>
							<div class="form-group">
								<label for="Username">
								<i class="zmdi zmdi-account material-icons-name"></i></label>
								<input type="text" name="Username" id="Username" placeholder="Username" required>
							</div>
							<div class="form-group">
								<label for="name">
								<i class="zmdi zmdi-account material-icons-name"></i></label>
								<input type="text" name="Nama" id="Nama" placeholder="Nama Lengkap" required>
							</div>
							<div class="form-group">
								<label for="email">
								<i class="zmdi zmdi-email"></i></label>
								<input type="email" name="Email" id="Email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<label for="pass"><i class="zmdi zmdi-lock"></i></label> <input type="password" name="Password" id="Password" placeholder="Password" required>
							</div>
							<div class="form-group">
								<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="password" name="re_pass" id="re_pass" placeholder="Ketik Ulang Password Anda" required>
							</div>
							<div class="form-group">
								<label for="contact"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="text" name="No" id="No" placeholder="Nomor Kontak" required>
							</div>
							<div class="form-group form-button">
								<input type="submit" name="signup" id="signup" class="form-submit" value="Register">
							</div>
						</form>
					</div>
					<div class="signup-image">
						<figure>
							<img src="<?=BASEURL; ?>/images/REG.png" alt="sing up image">
						</figure>
						<a href="<?=BASEURL; ?>/home/login" class="signup-image-link">Sudah Memiliki Akun?</a>
					</div>
				</div>
			</div>
		</section>


	</div>