<x-guest-layout>
    <x-authentication-card>
        {{-- <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> --}}

        {{-- <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div> --}}

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        {{-- <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form> --}}
        <section id="content">
			<div class="content-wrap">
				<div id="sini" class="container">

					<div class="mx-auto mb-0 accordion accordion-lg" style="max-width: 550px;">

						<div class="accordion-header">
                              <h6 class="font-body text-uppercase ls-3">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h6>                  
						</div>
						<div class="accordion-content">
							<form id="forget-form" name="forget-form" class="mb-0 row" action="{{ route('password.email') }}" method="post">
								@csrf
								<div class="col-12 form-group">
									<label for="email">Email:</label>
									<input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control">
								</div>								

								<div class="col-12 form-group">
									<div class="d-flex justify-content-between">
										<button class="m-0 button button-3d button-black" id="forget-form-submit" name="forget-form-submit" value="login">Email Password Reset Link</button>										
									</div>
								</div>
							</form>
						</div>
						

					</div>

				{{-- </div> --}}
			</div>
		</section><!-- #content end -->
    </x-authentication-card>
</x-guest-layout>
