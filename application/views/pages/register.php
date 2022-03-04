<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/auth/css/bg.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(<?= base_url('assets/auth/') ?>images/bg2.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>

                <?php if ($this->session->flashdata('auth')) : ?>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong><?= $this->session->flashdata('auth') ?></strong>
                    </div>
                <?php endif ?>
                  
		      	<form method="POST" action="<?= base_url('auth/registerAction') ?>" class="signin-form">
		      	<div class="form-group">
		      		<input id="username" type="text" name="username" class="form-control" placeholder="Username" autocomplete="off" required>
		      	</div>
	            <div class="form-group">
	              <input id="password" type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
                <div class="form-group">
	              <input id="fullname" type="text" name="fullname" class="form-control" placeholder="Fullname" autocomplete="off" required>
	            </div>
	            <div class="form-group">
	            	<input type="submit" value="Register" class="form-control btn btn-primary submit px-3">
	            </div>

				<center clsaa="mt-3">
					<a href="<?= base_url('auth') ?>">Login</a>
				</center>

	          </form>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

  <script src="<?= base_url('assets/auth/') ?>js/jquery.min.js"></script>
  <script src="<?= base_url('assets/auth/') ?>js/popper.js"></script>
  <script src="<?= base_url('assets/auth/') ?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/auth/') ?>js/main.js"></script>

	</body>
    <script type="text/javascript">
    window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
    }, 2000);
    </script>
</html>

