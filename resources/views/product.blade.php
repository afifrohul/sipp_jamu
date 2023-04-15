@extends('layouts.app')
@section('content')
<main>
    <section section class="px-5" >
        <div class="relative grid w-full rounded-xl bg-gradient-to-t from-yellow-100 to-gray-100 h-96 lg:h-[32rem] place-items-center">
            <div class="flex flex-col items-center mx-auto text-center px-6">
                {{-- <h1 class="text-lg md:text-4xl max-w-3xl font-bold text-gray-900 font-sans">Temukan Beragam Pilihan <span class="text-yellow-500"> Jamu Herbal </span> Terbaik untuk Menjaga Kesehatanmu di <span class="text-yellow-500">Sini!</span> </h1> --}}
                <h1 class="text-lg md:text-4xl max-w-xl font-bold text-gray-900 font-sans">Temukan <span class="text-yellow-500">Produk Berkualitas</span> Terbaik di Toko Kami </h1>

                <p class="mt-6 text-sm md:text-lg leading-5 text-gray-900">Klik tombol dibawah untuk mengeksplor!</p>

                <a href="#product" class="mt-8 cursor-pointer animate-bounce">
                    <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="27" cy="26" r="18" stroke="black" stroke-width="2" />
                        <path
                            d="M22.41 23.2875L27 27.8675L31.59 23.2875L33 24.6975L27 30.6975L21 24.6975L22.41 23.2875Z"
                            fill="black" />
                    </svg>
                </a>
            </div>
        </div>

        {{-- <svg class="" viewBox="0 0 1440 57" fill="#fef9c3" xmlns="http://www.w3.org/2000/svg">
            <path d="M1440 0H0V57C720 0 1440 57 1440 57V0Z" />
        </svg> --}}
    </section>

    <section class="container px-6 py-8 mx-auto lg:py-16" id="product">
        {{-- <h3 class="text-xl font-medium text-gray-800 md:text-2xl lg:text-3xl text-center">Produk unggulan kami</h3> --}}
        <div class="grid grid-cols-4 gap-4 mt-6">
            <a href="{{ url('/product-detail') }}">
            <div class="border-2 rounded-md hover:scale-105 transition-all duration-300 shadow-sm hover:shadow-md ease-linear overflow-hidden">
                <img class="object-cover w-full h-72" src="https://images.unsplash.com/photo-1593194541866-87bf38376f07?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="thumbnail">
                <div class="px-2 py-4">
                <div class="font-bold text-sm lg:text-base mb-2">Lorem, ipsum dolor.</div>
                <p class="text-gray-700 text-xs lg:text-sm">
                    Lorem ipsum dolor sit amet. Lorem ipsum dolor sit.
                </p>
                </div>
            </div>
            </a> 
            <a href="{{ url('/product-detail') }}">
                <div class="border-2 rounded-md hover:scale-105 transition-all duration-300 shadow-sm hover:shadow-md ease-linear overflow-hidden">
                    <img class="object-cover w-full h-72" src="https://images.unsplash.com/photo-1593194541866-87bf38376f07?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="thumbnail">
                    <div class="px-2 py-4">
                        <div class="font-bold text-sm lg:text-base mb-2">Lorem, ipsum dolor.</div>
                        <p class="text-gray-700 text-xs lg:text-sm">
                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit.
                        </p>
                    </div>
                </div>
            </a>
            <a href="{{ url('/product-detail') }}">
                <div class="border-2 rounded-md hover:scale-105 transition-all duration-300 shadow-sm hover:shadow-md ease-linear overflow-hidden">
                    <img class="object-cover w-full h-72" src="https://images.unsplash.com/photo-1593194541866-87bf38376f07?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="thumbnail">
                    <div class="px-2 py-4">
                        <div class="font-bold text-sm lg:text-base mb-2">Lorem, ipsum dolor.</div>
                        <p class="text-gray-700 text-xs lg:text-sm">
                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit.
                        </p>
                    </div>
                </div>
            </a>
            <a href="{{ url('/product-detail') }}">
                <div class="border-2 rounded-md hover:scale-105 transition-all duration-300 shadow-sm hover:shadow-md ease-linear overflow-hidden">
                    <img class="object-cover w-full h-72" src="https://images.unsplash.com/photo-1593194541866-87bf38376f07?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="thumbnail">
                    <div class="px-2 py-4">
                        <div class="font-bold text-sm lg:text-base mb-2">Lorem, ipsum dolor.</div>
                        <p class="text-gray-700 text-xs lg:text-sm">
                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit.
                        </p>
                    </div>
                </div>
            </a>
    </div>
</section>
</main>

@endsection