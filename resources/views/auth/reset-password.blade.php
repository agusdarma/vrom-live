<x-guest-layout>
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
