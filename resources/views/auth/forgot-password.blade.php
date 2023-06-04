<x-guest-layout>    
        {{-- <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> --}}

        {{-- <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div> --}}

        

        

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
				<div class="container">
                    
					<div class="mx-auto mb-0 accordion accordion-lg" style="max-width: 550px;">
                        <x-validation-errors class="mb-4" />
                        @if (session('status'))
                            <div class="mb-4 text-sm font-medium text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
						<div class="accordion-header">
                              <h4 class="ls-3">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h4>                  
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
</x-guest-layout>
