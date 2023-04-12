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
        <!-- component -->
        <section class="text-gray-700 body-font overflow-hidden bg-white">
          <div class="container px-5 py-10 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
              <img alt="ecommerce" class="lg:w-1/2 max-h-96 w-full object-cover object-center rounded border border-gray-200" src="https://images.unsplash.com/photo-1593194541866-87bf38376f07?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80x`">
              <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">The Catcher in the Rye</h1>
                
                <p class="leading-relaxed">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.</p>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                  <div class="w-full">
                    <label class="text-gray-700 ml-1">Kuantitas:</label>
                    <input type="number" min="1" name="qty" class="form-input w-full block rounded mt-1 p-3 border-2 @error('qty') border-red-500 @enderror focus:outline-none focus:border-yellow-500" placeholder="Inputkan Jumlah Barang" value="{{old('qty')}}">
                  </div>
                </div>
                <div class="flex">
                  <span class="title-font font-medium text-2xl text-gray-900">Rp5.000</span>
                  <button class="flex ml-auto text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container px-32 py-10 mx-auto">
            <h3 class="text-3xl text-center font-semibold mb-6" >Ulasan Produk</h3>
            <div class="flex w-full backdrop-filter-custom p-8 border drop-shadow-2xl rounded-lg border-gray-900 flex-wrap md:flex-nowrap mt-3"><span class="flex-shrink-0 w-12 h-12 bg-gray-400 rounded-full"></span>
              <div class="flex flex-col flex-grow ml-0 mt-4 md:ml-4 md:mt-0 text-gray-900">
                <div class="flex"><span class="font-semibold">Rocky</span> <span class="ml-auto text-sm">04/27/2022</span>
                </div> 
                <p class="mt-1"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro tempore impedit ut!</p> 
              </div>
            </div>
            <div class="flex w-full backdrop-filter-custom p-8 border drop-shadow-2xl rounded-lg border-gray-900 flex-wrap md:flex-nowrap mt-3"><span class="flex-shrink-0 w-12 h-12 bg-gray-400 rounded-full"></span>
              <div class="flex flex-col flex-grow ml-0 mt-4 md:ml-4 md:mt-0 text-gray-900">
                <div class="flex"><span class="font-semibold">Rocky</span> <span class="ml-auto text-sm">04/27/2022</span>
                </div> 
                <p class="mt-1"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro tempore impedit ut!</p> 
              </div>
            </div>
            <div class="flex w-full backdrop-filter-custom p-8 border drop-shadow-2xl rounded-lg border-gray-900 flex-wrap md:flex-nowrap mt-3"><span class="flex-shrink-0 w-12 h-12 bg-gray-400 rounded-full"></span>
              <div class="flex flex-col flex-grow ml-0 mt-4 md:ml-4 md:mt-0 text-gray-900">
                <div class="flex"><span class="font-semibold">Rocky</span> <span class="ml-auto text-sm">04/27/2022</span>
                </div> 
                <p class="mt-1"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro tempore impedit ut!</p> 
              </div>
            </div>
            <div class="flex w-full backdrop-filter-custom p-8 border drop-shadow-2xl rounded-lg border-gray-900 flex-wrap md:flex-nowrap mt-3"><span class="flex-shrink-0 w-12 h-12 bg-gray-400 rounded-full"></span>
              <div class="flex flex-col flex-grow ml-0 mt-4 md:ml-4 md:mt-0 text-gray-900">
                <div class="flex"><span class="font-semibold">Rocky</span> <span class="ml-auto text-sm">04/27/2022</span>
                </div> 
                <p class="mt-1"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro tempore impedit ut!</p> 
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

