<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SiPeCut</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <section class="h-full w-full gradient-form bg-gray-200 md:h-screen">
            <div class="container py-12 px-6 h-full" style="margin: 0 auto !important;">
                <div class="flex border justify-center items-center flex-wrap h-full g-6 text-gray-800">
                    <div class="xl:w-10/12">
                        <div class="block bg-white shadow-lg rounded-lg">
                            <div class="lg:flex lg:flex-wrap g-0">
                                <div class="lg:w-6/12 px-4 md:px-0">
                                    <div class="md:p-12 md:mx-6">
                                        <div class="text-center">
                                            <img
                                            class="mx-auto w-60"
                                            src="{{asset('image/logo/dinas-kehutanan.png')}}"
                                            alt="logo"
                                            />
                                            <h4 class="text-xl font-semibold mt-6 mb-6 pb-1">Selamat Datang di Sistem Informasi Pengajuan Cuti (SiPeCut)</h4>
                                        </div>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <p class="mb-4">Silahkan Login Sistem Informasi Pengajuan Cuti</p>
                                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                            <div class="mb-4">
                                                <input
                                                    type="email"
                                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                    id="email"
                                                    placeholder="nip@sigap.com"
                                                    name="email"
                                                    value="{{old('email')}}"
                                                    required
                                                />
                                            </div>
                                            <div class="mb-4">
                                                <input
                                                    type="password"
                                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                    id="password"
                                                    placeholder="Password"
                                                    name="password"
                                                    required
                                                />
                                            </div>
                                            <div class="text-center pt-1 mb-12 pb-1">
                                                <button
                                                    class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                                                    type="submit"
                                                    data-mdb-ripple="true"
                                                    data-mdb-ripple-color="light"
                                                    style="
                                                    background: linear-gradient(
                                                        to right,
                                                        #75CE9F,
                                                        #01A66F
                                                    );
                                                    "
                                                >
                                                    Log in
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div
                                    class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none"
                                    style="
                                    background: linear-gradient(to right, #01A66F, #75CE9F);
                                    "
                                >
                                    <div class="text-white px-4 py-6 md:p-12 md:mx-6">
                                        <h4 class="text-xl font-semibold">Sistem Informasi Pengajuan Cuti</h4>
                                        <p class="text-sm my-6">
                                            Kolaborasi dari Dinas Kehutanan, UNAIR dan Vokasi Sigap dalam pembangunan Sistem Informasi Pengajuan Cuti.
                                        </p>
                                        <div class="grid grid-cols-3 gap-3 content-center">
                                            <div>
                                                <img
                                                    class="mx-auto mt-14"
                                                    src="{{asset('image/logo/dinas-kehutanan.png')}}"
                                                    alt="logo"
                                                />
                                            </div>
                                            <div class="p-5">
                                                <img
                                                    class="mx-auto"
                                                    src="{{asset('image/logo/Logo UNAIR.png')}}"
                                                    alt="logo"
                                                />
                                            </div>
                                            <div class="p-2">
                                                <img
                                                    class="mx-auto mt-8"
                                                    src="{{asset('image/logo/Logo VOKASI.png')}}"
                                                    alt="logo"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html> --}}