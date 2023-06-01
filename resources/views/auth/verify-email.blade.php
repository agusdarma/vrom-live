<x-guest-layout>   
    <div class="container ">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                    <div class="mt-4 heading-block">
                      <h2 class="text-black fw-bold">{{ __('messages.verifyEmailText1') }}</h2>
                      <span>{{ __('messages.verifyEmailText2') }}</span>
                    </div>   
                    <form id="sendEmailForm" method="POST" action="{{ route('verification.send') }}">
                    @csrf                                 
                        {{-- <a id="sendEmailButton" class="text-black button button-3d button-large bg-hijau-stabilo">
                            {{ __('messages.verifyEmailText3') }}</a> --}}
                        <button type="submit" id="checkoutButton" class="btn btn-primary w-100 btn-lg">{{ __('messages.verifyEmailText3') }}</button>
                    </form>
            </div>
        </div>
      </div>
    


        {{-- <div class="mb-4 text-sm text-gray-600">
            {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
            </div>
        @endif --}}

        {{-- <div class="flex items-center justify-between mt-4">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <div>
                <a
                    href="{{ route('profile.show') }}"
                    class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    {{ __('Edit Profile') }}</a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="ml-2 text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div> 
        </div>           --}}
</x-guest-layout>
