<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css-admin/style.css')}}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>SIPP JAMU</title>
</head>
{{-- <body>
  <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-yellow-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Tailblocks</span>
      </a>
      <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-yellow-600 transition-all duration-300 hover:cursor-pointer">First Link</a>
        <a class="mr-5 hover:text-yellow-600 transition-all duration-300 hover:cursor-pointer">Second Link</a>
        <a class="mr-5 hover:text-yellow-600 transition-all duration-300 hover:cursor-pointer">Third Link</a>
        <a class="mr-5 hover:text-yellow-600 transition-all duration-300 hover:cursor-pointer">Fourth Link</a>
      </nav>
      <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Button
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>
  </header>
</body> --}}
<body>
  <div>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-yellow-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg> --}}
            <span class="md:ml-3 text-xl">SIPP JAMU</span>
            </a>
            <nav class="md:ml-auto flex gap-1 flex-wrap items-center text-base justify-center">
            <a href="{{ url('/') }}" class="md:mr-5 hover:text-gray-900 font-semibold">Home</a>
            <a href="{{ url('/product') }}" class="md:mr-5 hover:text-gray-900 font-semibold">Produk</a>
            </nav>
            @auth
                {{-- <div class="flex flex-row-reverse items-center">
                    <div class="dropdown relative md:static">
                        <button class="menu-btn focus:outline-none flex flex-wrap items-center">
                            <div class="w-8 h-8 overflow-hidden rounded-full">
                                <img class="w-full h-full object-cover" src="{{asset('assets/img-admin/avatar-log.jpg')}}" >
                            </div> 

                            <div class="ml-2 capitalize flex ">
                                <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">Halo, {{Auth::user()->name;}}</h1>
                                <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                            </div>                        
                        </button>
                        <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>
                        <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">
                            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                                <i class="fad fa-user-edit text-xs mr-1"></i> 
                                edit my profile
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                                    <i class="fad fa-user-times text-xs mr-1"></i> 
                                    log out
                                </button>
                            </form>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="flex gap-2">
                    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"><a href="{{ url('/back-dashboard') }}">DASHBOARD</a>
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </button>
                </div> --}}
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <x-dropdown-link href="{{ url('/back-dashboard') }}">
                            Dashboard
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            @endauth
            @guest
                
            <div class="flex gap-2">
                <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"><a href="{{ url('/back-login') }}">MASUK</a>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                </button>
                <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"><a href="{{ url('/register') }}">DAFTAR</a>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                </button>
            </div>
            @endguest
        </div>
    </header>
      
      <main>
          <section class="px-5">
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
      
                      <p class="mt-6 text-gray-500 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic laboriosam
                          provident voluptatum id magni iste nobis corrupti, delectus quis repellat, debitis error quod
                          explicabo molestiae rerum totam ab sunt excepturi?</p>
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
            <h3 class="mt-6 text-end">
                <a href="{{ url('/product') }}" class="inline-block font-semibold mr-10 text-lg text-gray-400 hover:translate-x-7 hover:italic duration-300">Lihat Semua Produk <svg xmlns="http://www.w3.org/2000/svg" class="w-4 inline" fill="#9ca3af" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M429.6 92.1c4.9-11.9 2.1-25.6-7-34.7s-22.8-11.9-34.7-7l-352 144c-14.2 5.8-22.2 20.8-19.3 35.8s16.1 25.8 31.4 25.8H224V432c0 15.3 10.8 28.4 25.8 31.4s30-5.1 35.8-19.3l144-352z"/></svg></a>
            </h3>
        </section>
          
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <h3 class="text-xl font-medium text-gray-800 md:text-2xl lg:text-3xl text-center">Testimonial</h3>
                <div class="flex flex-wrap mt-10 ">
                    <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                        <div class="h-full text-center">
                        <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/302x302">
                        <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                        <span class="inline-block h-1 w-10 rounded bg-yellow-500 mt-6 mb-4"></span>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
                        <p class="text-gray-500">Lorem, ipsum dolor.</p>
                        </div>
                    </div>
                    <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                        <div class="h-full text-center">
                        <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/300x300">
                        <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                        <span class="inline-block h-1 w-10 rounded bg-yellow-500 mt-6 mb-4"></span>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">ALPER KAMU</h2>
                        <p class="text-gray-500">Lorem, ipsum.</p>
                        </div>
                    </div>
                    <div class="lg:w-1/3 lg:mb-0 p-4">
                        <div class="h-full text-center">
                        <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/305x305">
                        <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                        <span class="inline-block h-1 w-10 rounded bg-yellow-500 mt-6 mb-4"></span>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HENRY LETHAM</h2>
                        <p class="text-gray-500">Lorem, ipsum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      </main>
      
      <footer class="flex flex-col items-center py-20 text-white bg-gray-900">
          <p class="text-center">Copyright © 2023, SIPP JAMU Startup.</p>
      
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mt-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                  d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
          </svg>
      </footer>
  </div>
</body>
</html>

