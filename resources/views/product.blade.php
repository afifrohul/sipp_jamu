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

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>SIPP JAMU</title>
</head>
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
            <a href="{{ url('/product') }}" class="md:mr-5 hover:text-gray-900 font-semibold">Product</a>
            </nav>
            <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"><a href="{{ url('/back-login') }}">LOGIN</a>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
            </button>
        </div>
    </header>
      
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

