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
      
                      {{-- <button class="flex items-center mt-8 -mx-2 text-yellow-500">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mx-1" fill="none" viewBox="0 0 24 24"
                              stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                              <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                          <p class="mx-1 font-semibold">PLAY VIDEO</p>
                      </button> --}}
                  </div>
      
                  <div class="mt-8 lg:w-1/2 lg:px-4 lg:mt-0">
                      <img class="object-cover w-full rounded-xl h-96"
                          {{-- src="https://images.unsplash.com/photo-1516131206008-dd041a9764fd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" --}}
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
              <h3 class="text-xl font-medium text-gray-800 md:text-2xl lg:text-3xl ">Produk unggulan kami</h3>
      
              {{-- <div class="flex items-center py-6 mt-4 -mx-2 overflow-x-auto whitespace-nowrap">
                  <button
                      class=" inline-flex px-4 mx-2 focus:outline-none  items-center py-0.5 text-white bg-yellow-500 hover:bg-yellow-400 duration-300 transition-colors rounded-2xl">All</button>
                  <button
                      class=" inline-flex px-4 mx-2 duration-300 transition-colors hover:bg-yellow-500/70 hover:text-white text-gray-500 focus:outline-none py-0.5 cursor-pointer rounded-2xl">Web
                      Design</button>
                  <button
                      class=" inline-flex px-4 mx-2 duration-300 transition-colors hover:bg-yellow-500/70 hover:text-white text-gray-500 focus:outline-none py-0.5 cursor-pointer rounded-2xl">Development</button>
                  <button
                      class=" inline-flex px-4 mx-2 duration-300 transition-colors hover:bg-yellow-500/70 hover:text-white text-gray-500 focus:outline-none py-0.5 cursor-pointer rounded-2xl">Research</button>
              </div> --}}
      
              <div class="grid grid-cols-1 gap-10 mt-10 md:grid-cols-2 lg:grid-cols-3 ">
                  <div  class="transition-all duration-500 lg:col-span-2 hover:scale-105">
                      <img class="object-cover hover:cursor-pointer object-top w-full rounded-lg shadow-md shadow-gray-200 h-80 xl:h-96"
                          src="https://cdn.dribbble.com/users/1644453/screenshots/17056773/media/00509f74e765da294440886db976943a.png?compress=1&resize=1000x750&vertical=top"
                          alt="">
                  </div>

                  <div  class="transition-all duration-500 hover:scale-105">
                      <img class="object-cover hover:cursor-pointer object-top w-full rounded-lg shadow-md shadow-gray-200 h-80 xl:h-96 "
                          src="https://cdn.dribbble.com/userupload/3233220/file/original-e80767b5947df65a0f1ab4dab4964679.png?compress=1&resize=1024x768"
                          alt="">
                  </div>

                  <div  class="transition-all duration-500 hover:scale-105">
                      <img class="object-cover hover:cursor-pointer object-top w-full rounded-lg shadow-md shadow-gray-200 h-80 xl:h-96"
                          src="https://cdn.dribbble.com/users/1644453/screenshots/14748860/media/25f53296059b741ac1c083be9f41745b.png?compress=1&resize=1000x750&vertical=top"
                          alt="">
                  </div>

                  <div  class="transition-all duration-500 lg:col-span-2 hover:scale-105">
                      <img class="object-cover hover:cursor-pointer object-top w-full rounded-lg shadow-md shadow-gray-200 h-80 xl:h-96"
                          src="https://cdn.dribbble.com/users/878428/screenshots/17307425/media/01782a518148ce7ef2e790473c888b1f.png?compress=1&resize=1000x750&vertical=top"
                          alt="">
                  </div>

                  <div  class="transition-all duration-500 lg:col-span-2 hover:scale-105">
                      <img class="object-cover hover:cursor-pointer object-top w-full rounded-lg shadow-md shadow-gray-200 h-80 xl:h-96"
                          src="https://cdn.dribbble.com/users/1930709/screenshots/11466872/media/e50b0f02160a77397eb4a76782d23966.png?compress=1&resize=1000x750&vertical=top"
                          alt="">
                  </div>

                  <div  class="transition-all duration-500 hover:scale-105">
                      <img class="object-cover hover:cursor-pointer object-top w-full rounded-lg shadow-md shadow-gray-200 h-80 xl:h-96"
                          src="https://cdn.dribbble.com/users/1644453/screenshots/14403641/media/21e305eb9c8255b6e3367f0ca52c6668.png?compress=1&resize=1000x750&vertical=top"
                          alt="">
                  </div>
              </div>
          </section>
      
          <section class="container px-6 py-8 mx-auto lg:py-16">
              <h3 class="text-xl font-medium text-gray-800 md:text-2xl lg:text-3xl ">Testimonial</h3>
      
              <div class="grid grid-cols-1 gap-8 mt-8 md:mt-10 md:grid-cols-2 xl:grid-cols-3">
                  <div>
                      <div class="relative">
                          <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
                              src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                              alt="">
      
                          <div class="absolute bottom-0 flex p-3 bg-white ">
                              <img class="object-cover object-center w-10 h-10 rounded-full"
                                  src="https://cdn.dribbble.com/users/1436669/screenshots/15006128/media/5f91264b3b56cc452cb2bba2535bccdd.png?compress=1&resize=1000x750&vertical=top"
                                  alt="">
      
                              {{-- <div class="mx-4">
                                  <h1 class="text-sm text-gray-700">Tom Hank</h1>
                                  <p class="text-sm text-gray-500">Creative Director</p>
                              </div> --}}
                          </div>
                      </div>
      
                      {{-- <h1 class="mt-6 text-xl font-semibold text-gray-800">What do you want to know about UI
                      </h1> --}}
      
                      <hr class="w-32 my-6 text-yellow-500">
      
                      <p class="text-sm text-gray-500">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet dolores
                          praesentium, alias nam? Tempore
                      </p>
      
                      {{-- <a href="#" class="inline-block mt-4 text-yellow-500 underline hover:text-yellow-400">Read more</a> --}}
                  </div>
      
                  <div>
                      <div class="relative">
                          <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
                              src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                              alt="">
      
                          <div class="absolute bottom-0 flex p-3 bg-white ">
                              <img class="object-cover object-center w-10 h-10 rounded-full"
                                  src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                  alt="">
      
                              {{-- <div class="mx-4">
                                  <h1 class="text-sm text-gray-700">arthur melo</h1>
                                  <p class="text-sm text-gray-500">Creative Director</p>
                              </div> --}}
                          </div>
                      </div>
      
                      {{-- <h1 class="mt-6 text-xl font-semibold text-gray-800">All the features you want to know
                      </h1> --}}
      
                      <hr class="w-32 my-6 text-yellow-500">
      
                      <p class="text-sm text-gray-500">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet dolores
                          praesentium, alias nam? Tempore
                      </p>
      
                      {{-- <a href="#" class="inline-block mt-4 text-yellow-500 underline hover:text-yellow-400">Read more</a> --}}
                  </div>
      
                  <div>
                      <div class="relative">
                          <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
                              src="https://images.unsplash.com/photo-1597534458220-9fb4969f2df5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80"
                              alt="">
      
                          <div class="absolute bottom-0 flex p-3 bg-white ">
                              <img class="object-cover object-center w-10 h-10 rounded-full"
                                  src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                  alt="">
      
                              {{-- <div class="mx-4">
                                  <h1 class="text-sm text-gray-700">Amelia. Anderson</h1>
                                  <p class="text-sm text-gray-500">Lead Developer</p>
                              </div> --}}
                          </div>
                      </div>
      
                      {{-- <h1 class="mt-6 text-xl font-semibold text-gray-800">Which services you get from Meraki UI</h1> --}}
      
                      <hr class="w-32 my-6 text-yellow-500">
      
                      <p class="text-sm text-gray-500">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet dolores
                          praesentium, alias nam? Tempore
                      </p>
      
                      {{-- <a href="#" class="inline-block mt-4 text-yellow-500 underline hover:text-yellow-400">Read more</a> --}}
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

