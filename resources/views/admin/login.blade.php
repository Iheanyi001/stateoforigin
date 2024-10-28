<x-guest-layout>
    <x-authentication-card pageTitle="Login">

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <div class="form-group">
                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email"/>
            </div>

            <div class="form-group">
                <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password"/>
            </div>

            <div class="block mt-3 mb-3">
                @if (Route::has('password.request'))
                <a href="{{route('password.request')}}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
                @endif
            </div>

            <button class="btn btn-info btn-block">
                {{ __('Sign in') }}
            </button>

            <div class="mg-t-60 tx-center">Not yet a member? <a href="{{route('register')}}" class="tx-info">Sign Up</a></div>

        </form>
    </x-authentication-card>
</x-guest-layout>
