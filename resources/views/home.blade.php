@extends('layouts.app')
@section('content')
<main>
    <section class="px-5">
        @auth
            
        @if (\Auth::user()->roles->pluck('name')[0] == 'farmer')
            @if ($getNewTransactionFarmer > 0)
            <div class="alert alert-default mb-5 flex justify-between">
                <div class="flex gap-2 items-center">
                        <i class="fad fa-bell-on text-lg"></i>
                        <p class="text-base"><strong>Halo, {{ Auth::user()->name }}.</strong> Terdapat {{ $getNewTransactionFarmer }} pesanan menunggu konfirmasi. <a class="font-bold hover:opacity-75 transition-all duration-300" href="{{ url('/back-farmer/transaction') }}">Klik disini untuk melihat data.</a> </p>
                    </div>
                    <button class="alert-btn-close">
                        <i class="fad fa-times text-lg"></i>
                    </button>
            </div>
            @endif
        @endif
            
        @if (\Auth::user()->roles->pluck('name')[0] == 'seller')
            @if ($getNewTransactionSeller > 0)
            <div class="alert alert-default mb-5 flex justify-between">
                <div class="flex gap-2 items-center">
                    <i class="fad fa-bell-on text-lg"></i>
                    <p class="text-base"><strong>Halo, {{ Auth::user()->name }}.</strong> Terdapat {{ $getNewTransactionSeller }} pesanan menunggu konfirmasi. <a class="font-bold hover:opacity-75 transition-all duration-300" href="{{ url('/back-seller/transaction') }}">Klik disini untuk melihat.</a> </p>
                </div>
                <button class="alert-btn-close">
                    <i class="fad fa-times text-lg"></i>
                </button>
            </div>
            @endif
        @endif
        @endauth
    
        <div class="relative grid w-full rounded-xl bg-gradient-to-t from-yellow-100 to-gray-100 h-96 lg:h-[32rem] place-items-center">
            <div class="flex flex-col items-center mx-auto text-center px-6">
                <h1 class="text-lg md:text-4xl max-w-3xl font-bold text-gray-900 font-sans">Temukan Beragam Pilihan <span class="text-yellow-500"> Jamu Herbal </span> Terbaik untuk Menjaga Kesehatanmu di <span class="text-yellow-500">Sini!</span> </h1>

                <p class="mt-6 text-sm md:text-lg leading-5 text-gray-900">Klik tombol dibawah untuk mengeksplor!</p>

                <a href="#about" class="mt-8 cursor-pointer animate-bounce">
                    <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="27" cy="26" r="18" stroke="black" stroke-width="2" />
                        <path
                            d="M22.41 23.2875L27 27.8675L31.59 23.2875L33 24.6975L27 30.6975L21 24.6975L22.41 23.2875Z"
                            fill="black" />
                    </svg>
                </a>
            </div>
        </div>

        <svg class="" viewBox="0 0 1440 57" fill="#fef9c3" xmlns="http://www.w3.org/2000/svg">
            <path d="M1440 0H0V57C720 0 1440 57 1440 57V0Z" />
        </svg>
    </section>

    <section class="container px-6 py-8 mx-auto lg:py-16 " id="about">
        <div class="lg:flex lg:items-center lg:-mx-4">
            <div class="lg:w-1/2 lg:px-4">
                <h3 class="text-xl font-medium text-gray-800 md:text-2xl lg:text-3xl">Kami menyediakan berbagai pilihan jamu yang berkhasiat. Tentunya terbuat dari bahan berkuliatas dan 100% alami.</h3>

                <p class="mt-6 text-gray-500 ">Jamu tidak hanya berfungsi sebagai obat, tetapi juga untuk menjaga kebugaran tubuh dan mencegah dari penyakit. Jamu juga biasa digunakan untuk membantu meningkatkan nafsu makan bagi anak-anak. Jamu dapat disebut obat rumahan karena biasanya dibuat sendiri di rumah dari bahan-bahan yang ada di sekitar, yaitu kunyit, kencur, jahe, lengkuas, dan jenis rimpang atau tanaman lainnya. Jamu di Indonesia bukan sekadar ramuan tradisional yang berkhasiat. Akan tetapi, orang-orang terdahulu memiliki upaya untuk tetap menjaga kelestarian alam. Jamu yang memanfaatkan bahan-bahan alam akan mendorong upaya menanam kembali tanaman-tanaman yang digunakan sebagai bahan.</p>
            </div>

            <div class="mt-8 lg:w-1/2 lg:px-4 lg:mt-0">
                <img class="object-cover w-full rounded-xl h-96"
                    src="https://images.unsplash.com/photo-1593194541866-87bf38376f07?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80"
                    alt="thumbnail">
            </div>
        </div>
    </section>


    <section class="container px-6 py-8 mx-auto lg:py-16">
        <div class="grid grid-cols-1 gap-8 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
            <div class="p-8 space-y-3 border-2 border-yellow-400 rounded-xl">
                <span class="inline-block text-yellow-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                </span>

                <h1 class="text-2xl font-semibold text-gray-700 capitalize">Fresh</h1>

                <p class="text-gray-500">
                    Jamu kami dibuat dengan bahan baku yang masih segar.
                </p>
            </div>

            <div class="p-8 space-y-3 border-2 border-yellow-400 rounded-xl">
                <span class="inline-block text-yellow-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                </span>

                <h1 class="text-2xl font-semibold text-gray-700 capitalize">Natural</h1>

                <p class="text-gray-500">
                    Jamu kami terbuat dari 100% bahan baku alami.
                </p>
            </div>

            <div class="p-8 space-y-3 border-2 border-yellow-400 rounded-xl">
                <span class="inline-block text-yellow-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                </span>

                <h1 class="text-2xl font-semibold text-gray-700 capitalize">Healthy</h1>

                <p class="text-gray-500">
                    Jamu yang diproduksi sangat berkhasiat bagi tubuh.
                </p>
            </div>
        </div>
    </section>

    <section class="container px-6 py-8 mx-auto lg:py-16">
    <h3 class="text-xl font-medium text-gray-800 md:text-2xl lg:text-3xl text-center">Produk unggulan kami</h3>
    <div class="grid grid-cols-3 gap-4 mt-6">
        @foreach ($getAllProduct as $item)
            <form action="{{url('/product-detail',$item->id)}}" method="GET" class="inline">
            @csrf
                <button type="submit" class="">
                    <div class="border-2 rounded-md hover:scale-105 transition-all duration-300 shadow-sm hover:shadow-md ease-linear overflow-hidden">
                        <img class="object-cover w-full h-72" src="{{ asset('assets/upload/product/'.$item->image) }}" alt="thumbnail">
                        <div class="px-2 py-4">
                            <div class="font-bold text-sm lg:text-base mb-2">{{ $item->name }}</div>
                            <p class="text-gray-700 text-xs lg:text-sm">
                                {{Str::limit($item->description, 100)}}
                            </p>
                        </div>
                    </div>
                </button>
            </form>
        @endforeach
    </div>
    <h3 class="mt-6 text-end">
        <a href="{{ url('/product') }}" class="inline-block font-semibold mr-10 text-lg text-gray-400 hover:translate-x-7 hover:italic duration-300">Lihat Semua Produk <svg xmlns="http://www.w3.org/2000/svg" class="w-4 inline" fill="#9ca3af" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M429.6 92.1c4.9-11.9 2.1-25.6-7-34.7s-22.8-11.9-34.7-7l-352 144c-14.2 5.8-22.2 20.8-19.3 35.8s16.1 25.8 31.4 25.8H224V432c0 15.3 10.8 28.4 25.8 31.4s30-5.1 35.8-19.3l144-352z"/></svg></a>
    </h3>
</section>
    
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <h3 class="text-xl font-medium text-gray-800 md:text-2xl lg:text-3xl text-center">Ulasan dan Rating</h3>
        <div class="flex flex-wrap mt-10 ">
            @foreach ($getAllReview as $item)
                
            <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                <div class="h-full text-center">
                    <img alt="testimonial" class="w-20 h-20 mb-8 object-contain object-center rounded-full inline-block border-2 border-gray-200 " src="{{ asset('assets/upload/user/'.$item->customer->image) }}">
                    <p class="leading-relaxed">{{ $item->comment }}</p>
                    <span class="inline-block h-1 w-10 rounded bg-yellow-500 mt-6 mb-4"></span>
                    <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">{{ $item->customer->name }} ({{ $item->product->name }} {{ $item->rating }}/5)</h2>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
</main>
      
@endsection