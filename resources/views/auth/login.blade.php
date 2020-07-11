@extends('layouts.auth')

@section('content')
    <div class="mx-8 my-8">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('E-Mail Address') }}</label>


                    <input id="email" type="email" class="shadow-sm appearance-none border-l border-blue-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="small text-red-400" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Password') }}</label>
                    <input id="password" type="password" class="shadow-sm appearance-none border-l border-blue-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="small text-red-400" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

            </div>


                    <div class="custom-radio">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>



                <div class="mt-5">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 inline-block text-white font-bold py-2 px-4 mr-2 rounded focus:outline-none focus:shadow-outline">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="bg-blue-400 hover:bg-blue-700 inline-block text-white font-bold py-2 px-4 mr-2 rounded focus:outline-none focus:shadow-outline" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                        <a class="bg-orange-400 hover:bg-orange-700 inline-block text-white font-bold py-2 px-4 mr-2 rounded focus:outline-none focus:shadow-outline" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>

                </div>
        </form>
    </div>
</div>
@endsection
