<x-guest-layout>
        

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">
					
					<div class="mx-auto mb-0 accordion accordion-lg" style="max-width: 550px;">
						<x-validation-errors class="mb-4" />
						<div class="accordion-header">
							<div class="accordion-icon">
								<i class="accordion-closed fa-solid fa-lock"></i>
								<i class="accordion-open bi-unlock"></i>
							</div>
							<div class="accordion-title">
								Login to your Account
							</div>
						</div>
						<div class="accordion-content">
							<form id="login-form" name="login-form" class="mb-0 row" action="{{ route('login') }}" method="post">
								@csrf
								<div class="col-12 form-group">
									<label for="login-form-username">Email:</label>
									<input type="text" id="login-form-username" name="email" value="{{ old('email') }}" class="form-control">
								</div>

								<div class="col-12 form-group">
									<label for="login-form-password">Password:</label>
									<input type="password" id="login-form-password" name="password" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<div class="d-flex justify-content-between">
										<button class="m-0 button button-3d button-black" id="login-form-submit" name="login-form-submit" value="login">Login</button>
										<a href="{{ route('password.request') }}">Forgot Password?</a>
									</div>
								</div>
							</form>
						</div>

						<div class="accordion-header">
							<div class="accordion-icon">
								<i class="accordion-closed bi-person"></i>
								<i class="accordion-open bi-check-circle-fill"></i>
							</div>
							<div class="accordion-title">
								New Signup? Register for an Account
							</div>
						</div>
						<div class="accordion-content">
							<form id="register-form" name="register-form" class="mb-0 row" action="{{ route('register') }}" method="post">
								@csrf
								<div class="col-12 form-group">
									<label for="name">Name:</label>
									<input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control">
								</div>

								<div class="col-12 form-group">
									<label for="email">Email Address:</label>
									<input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control">
								</div>							

								<div class="col-12 form-group">
									<label for="password">Choose Password:</label>
									<input type="password" id="password" name="password" value="{{ old('password') }}" class="form-control">
								</div>

								<div class="col-12 form-group">
									<label for="password_confirmation">Re-enter Password:</label>
									<input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control">
								</div>

								<div class="col-12 form-group">
									<button class="m-0 button button-3d button-black" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
								</div>
							</form>
						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->   
</x-guest-layout>
