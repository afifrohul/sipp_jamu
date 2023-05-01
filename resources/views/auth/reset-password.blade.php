{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SIPP JAMU</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css-admin/style.css')}}">
        <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <section class="bg-gray-50 ">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
                    {{-- <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo"> --}}
                    {{-- SIPP JAMU --}}
                    <img src="{{ asset('assets/img-admin/logo.png') }}" alt="logo" class="h-14">
                </a>
                <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                    <div class="py-4 px-6 space-y-4 md:space-y-6">
                        <h1 class="text-lg font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                            Setel ulang password
                        </h1>
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form class="space-y-2 md:space-y-2"method="POST" action="{{ route('password.update') }}" novalidate>
                            @csrf
                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <!-- Email Address -->
                            <div class="">
                                <x-label class="block mb-2 text-sm font-medium text-gray-900" for="email" :value="__('Email')" />

                                <x-input id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5" type="email" name="email" :value="old('email', $request->email)" placeholder="alamatemail@gmail.com" readonly />
                            </div>

                            <!-- Password -->
                            <div class="">
                                <x-label class="block mb-2 text-sm font-medium text-gray-900" for="password" :value="__('Password')" />
                                
                                <x-input id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" placeholder="••••••••" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="">
                                <x-label class="block mb-2 text-sm font-medium text-gray-900" for="password_confirmation" :value="__('Konfirmasi Password')" />

                                <x-input id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-yellow-600 focus:border-yellow-600 block w-full p-2.5"
                                                type="password"
                                                name="password_confirmation" required placeholder="••••••••"/>
                            </div>
                            <br>
                            <button type="submit" class="w-full text-white bg-yellow-600 hover:bg-yellow-700 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Setel ulang password</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script src="{{asset('assets/js-admin/scripts.js')}}"></script>
    </body>
</html>
