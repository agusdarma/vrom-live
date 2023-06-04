<x-guest-layout>
    {{-- <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card> --}}

    
    <section id="content">
        <div id="sini" class="content-wrap">
            <div class="container">
                
                <div class="mx-auto mb-0 accordion accordion-lg" style="max-width: 550px;">
                    <x-validation-errors class="mb-4" />
                    @if (session('status'))
                        <div class="mb-4 text-sm font-medium text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="accordion-header">
                          <h4 class="ls-3">Please enter your new password</h4>                  
                    </div>
                    <div class="accordion-content">
                        <form class="mb-0 row" action="{{ route('password.update') }}" method="post">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div class="col-12 form-group">
                                <label for="email">Email:</label>
                                <input type="text" id="email" name="email" value="old('email', $request->email)" class="form-control">
                            </div>		
                            <div class="col-12 form-group">
                                <label for="email">New Password:</label>
                                <input type="password" id="password" name="password" value="" required autocomplete="new-password" class="form-control">
                            </div>		
                            <div class="col-12 form-group">
                                <label for="email">Confirm New Password:</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" value="" class="form-control">
                            </div>								

                            <div class="col-12 form-group">
                                <div class="d-flex justify-content-between">
                                    <button class="m-0 button button-3d button-black" id="forget-form-submit" name="forget-form-submit" value="login">{{ __('Reset Password') }}</button>										
                                </div>
                            </div>
                        </form>
                    </div>
                    

                </div>

            {{-- </div> --}}
        </div>
    </section><!-- #content end -->

</x-guest-layout>
