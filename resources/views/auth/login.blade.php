<x-guest-layout>
    <x-authentication-card>
        {{-- <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> --}}

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        {{-- <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form> --}}
        <!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="mx-auto mb-0 accordion accordion-lg" style="max-width: 550px;">

						<div class="accordion-header">
							<div class="accordion-icon">
								<i class="accordion-closed fa-solid fa-lock"></i>
								<i class="accordion-open bi-unlock"></i>
							</div>
							<div id="sini" class="accordion-title">
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

								{{-- <div class="col-12 form-group">
									<label for="register-form-username">Choose a Username:</label>
									<input type="text" id="register-form-username" name="register-form-username" value="" class="form-control">
								</div>

								<div class="col-12 form-group">
									<label for="register-form-phone">Phone:</label>
									<input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control">
								</div> --}}

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
    </x-authentication-card>
</x-guest-layout>
