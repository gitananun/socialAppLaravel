@extends('layouts.auth')

@section('content')
    <div class="mx-8 my-8">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Name') }}</label>
                             <input id="name" type="text" class="shadow-sm appearance-none border-l border-blue-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="small text-red-400" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="shadow-sm appearance-none border-l border-blue-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="small text-red-400" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Password') }}</label>

                                <input id="password" type="password" class="shadow-sm appearance-none border-l border-blue-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="small text-red-400" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="shadow-sm appearance-none border-l border-blue-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('repeat_password') border-red-500 @enderror" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 inline-block text-white font-bold py-2 px-4 mr-2 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Register') }}
                            </button>

                            <a class="bg-green-400 hover:bg-green-700 inline-block text-white font-bold py-2 px-4 mr-2 rounded focus:outline-none focus:shadow-outline" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>

                        </div>
                    </form>

@endsection
