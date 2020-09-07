    <!-- Outer Row -->
    <!-- <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0"> -->
                    <!-- Nested Row within Card Body -->
                    <!-- <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div> -->

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?= base_url('auth'); ?>">
					<span class="login100-form-title p-b-43">
						Member Login
					</span>
                    
                    <?= $this->session->flashdata('message'); ?>
                    
					<div class="wrap-input100 validate-input" data-validate = "Masukan Email dengan benar: contoh@gmail.com">
						<input class="input100" type="text" id="email" name="email">
						<span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Masukan Password dengan benar">
						<input class="input100" type="password" id="password" name="password">
						<span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
							<a href="<?= base_url('auth/forgotpassword'); ?>" class="txt1">
								Lupa Password?
							</a>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
						<div class="txt2">
							Belum memiliki akun ?<a href="<?= base_url('auth/registration'); ?>">Daftar</a>
						</div>
				</form>

				<div class="login100-more" style="background-image: url('assets/img/hero-01.png');">
				</div>
			</div>
        </div>