<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a href="{{ url('/') }}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-yellow-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg> --}}
      {{-- <span class="md:ml-3 text-xl">SIPP JAMU</span> --}}
      <img src="{{ asset('assets/img-admin/logo.png') }}" alt="logo" class="h-10">
      </a>
      <nav class="md:ml-auto flex gap-1 flex-wrap items-center text-base justify-center">
      </nav>
      @auth
          <x-dropdown align="right" width="48">
              <x-slot name="trigger">
                  <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                      <div class="flex gap-3 align-middle">
                          <img src="{{ asset('assets/upload/user/default.png') }}" alt="profil" class="w-5"> 
                          <p> Halo, {{ Auth::user()->name }}</p>
                      </div>

                      <div class="ml-1">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                      </div>
                  </button>
              </x-slot>

              <x-slot name="content">
                  <!-- Authentication -->
                  <x-dropdown-link href="{{ url('/home') }}">
                      <i class="fad fa-home text-xs mr-1"></i> Halaman Utama
                  </x-dropdown-link>
                  <x-dropdown-link href="{{ url('/product') }}">
                      <i class="fad fa-jug text-xs mr-1"></i> Produk
                  </x-dropdown-link>
                  <x-dropdown-link href="{{ url('/back-dashboard') }}">
                      <i class="fad fa-bars text-xs mr-1"></i>Dashboard
                  </x-dropdown-link>
                  @if ((Auth::user()->roles->pluck('name')[0]) == 'customer')
                  <x-dropdown-link href="{{ url('/back-customer/profile') }}"><i class="fad fa-address-card text-xs mr-1"></i>Kelola Akun</x-dropdown-link>
                  @endif
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      {{-- <x-dropdown-link :href="route('logout')"
                              onclick="event.preventDefault();
                                          this.closest('form').submit(); ">
                          {{ __('Log Out') }}
                      </x-dropdown-link> --}}
                      <button type="submit" class="w-full text-left px-4 py-2 block capitalize text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#" onclick="return confirm('Apakah anda ingin logout?')">
                            <i class="fad fa-user-times text-xs mr-1"></i> 
                            log out
                        </button>
                  </form>
              </x-slot>
          </x-dropdown>
      @endauth
      @guest
          
      {{-- <div class="flex gap-2">
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
          
      </div> --}}
      <div class="flex gap-4">
        <button class="h-10 px-6 font-semibold rounded-md border border-green-200 hover:bg-gray-100 duration-300 text-green-700" type="button">
          <a href="{{ url('/register') }}">Daftar</a>
        </button>
        <button class="h-10 px-6 font-semibold rounded-md bg-green-600 hover:bg-green-800 duration-300 text-white" type="submit">
          <a href="{{ url('/back-login') }}">Masuk</a>
        </button>
        
      </div>
      @endguest
  </div>
</header>