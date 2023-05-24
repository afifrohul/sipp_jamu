<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SIPP JAMU</title>
        <link rel="icon" href="{{ asset('assets/img-admin/logo.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css-admin/style.css')}}">
        <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
        <style>
            section {
                background-image: url('https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80');
                /* background-repeat: round */
                background-size: cover;
                background-attachment: fixed
            }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <section class="bg-gray-50 p-12 ">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
                    {{-- <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo"> --}}
                    {{-- SIPP JAMU --}}
                    <img src="{{ asset('assets/img-admin/logo.png') }}" alt="logo" class="h-14">
                </a>
                <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                    <div class="py-4 px-6 space-y-2 md:space-y-2">
                        <h1 class="text-lg font-bold leading-tight tracking-tight text-gray-900 ">
                            Daftar Akun
                        </h1>
                        {{-- <h1 class="text-lg font-bold leading-tight tracking-tight text-gray-900 ">
                            Register your account
                        </h1> --}}
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form class="space-y-2 md:space-y-2" method="POST" action="{{ route('register') }}" novalidate  >
                            @csrf
                            <div>
                                <x-label class="block mb-2 text-sm font-medium text-gray-900" for="full_name" :value="__('Nama Lengkap')" />

                                <x-input id="full_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" type="text" name="full_name" :value="old('full_name')" required autofocus placeholder="Lorem Ipsum"  />
                            </div>
                            
                            <!-- Name -->
                            <div class="">
                                <x-label class="block mb-2 text-sm font-medium text-gray-900" for="name" :value="__('Nama Pengguna')" />

                                <x-input id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" type="text" name="name" :value="old('name')" required autofocus placeholder="Lorem Ipsum" />
                            </div>
                            
                            <!-- No HP -->
                            <div class="">
                                <x-label class="block mb-2 text-sm font-medium text-gray-900" for="no_hp" :value="__('No HP')" />

                                <x-input id="no_hp" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" type="text" name="no_hp" :value="old('no_hp')" required autofocus placeholder="0812......" />
                            </div>
                            
                            <!-- Alamat -->
                            <div class="">
                                <x-label class="block mb-2 text-sm font-medium text-gray-900" for="address" :value="__('Alamat')" />

                                <x-input id="address" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" type="text" name="address" :value="old('address')" required autofocus placeholder="Lorem Ipsum" />
                            </div>

                            <!-- Email Address -->
                            <div class="">
                                <x-label class="block mb-2 text-sm font-medium text-gray-900" for="email" :value="__('Email')" />

                                <x-input id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" type="email" name="email" :value="old('email')" placeholder="name@gmail.com" required />
                            </div>

                            <!-- Password -->
                            <div class="">
                                <x-label class="block mb-2 text-sm font-medium text-gray-900" for="password" :value="__('Password')" />
                                {{-- <x-label class="block mb-2 text-sm font-medium text-gray-900" for="password" :value="__('Password')" /> --}}

                                <x-input id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" placeholder="••••••••" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="">
                                {{-- <x-label class="block mb-2 text-sm font-medium text-gray-900" for="password_confirmation" :value="__('Confirm Password')" /> --}}
                                <x-label class="block mb-2 text-sm font-medium text-gray-900" for="password_confirmation" :value="__('Konfirmasi Password')" />

                                <x-input id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5"
                                                type="password"
                                                name="password_confirmation" required placeholder="••••••••"/>
                            </div>
                            {{-- <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" placeholder="name@gmail.com" required="">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" required="">
                            </div> --}}
                            <br>
                            <button type="submit" class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Daftar</button>
                            <a href="{{ url('/') }}" class="w-full block text-black bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Kembali ke halaman utama</a>
                            <p class="text-sm font-light text-gray-500">
                                Sudah terdaftar? <a href="{{ url('/back-login') }}" class="font-medium text-green-600 hover:underline ">Masuk</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script src="{{asset('assets/js-admin/scripts.js')}}"></script>
    </body>
</html>
