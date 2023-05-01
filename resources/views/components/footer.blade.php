{{-- <footer class="flex flex-col items-center py-20 text-white bg-gray-900">
  <p class="text-center">Copyright © 2023, SIPP JAMU Startup.</p>

  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mt-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
      stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round"
          d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
  </svg>
</footer> --}}
<footer class="text-gray-600 body-font">
  {{-- <div class="container px-5 py-24 mx-auto flex gap-6 md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col bg-gray-100"> --}}
  <div class=" px-5 py-24 mx-auto grid grid-cols-3 gap-6 bg-gray-100">
    <div class="px-4">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-yellow-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg> --}}
        <span class=" text-xl">SIPP JAMU</span>
      </a>
      <p class="mt-2 text-sm text-gray-500">merupkan sebuah startup rintisan yang fokus pada pengembangan dan pemasaran produk jamu secara modern.</p>
    </div>
    <div class="px-4">
      <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">LOKASI</h2>
      <p class="mt-2 text-sm text-gray-500">Jl. Kalimantan No. 37, Sumbersari, Kecamatan Sumbersari, Jember, Jawa Timur, 68121. </p>
    </div>
    <div class="px-4 flex">
      
      <div class="px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">MENU</h2>
        <nav class="list-none mb-10">
          <li>
            <a href="{{ url('/') }}" class="text-gray-600 hover:text-gray-800">Halaman Utama</a>
          </li>
          <li>
            <a href="{{ url('/product') }}" class="text-gray-600 hover:text-gray-800">Produk</a>
          </li>
          <li>
            <a href="{{ url('/back-dashboard') }}" class="text-gray-600 hover:text-gray-800">Dashboard</a>
          </li>
        </nav>
      </div>
      <div class="px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">MEDIA SOSIAL</h2>
        <nav class="list-none mb-10">
          <li>
            <a href="https://www.instagram.com/" class="text-gray-600 hover:text-gray-800">Instagram</a>
          </li>
          <li>
            <a href="https://www.facebook.com/" class="text-gray-600 hover:text-gray-800">Facebook</a>
          </li>
          <li>
            <a href="https://twitter.com/" class="text-gray-600 hover:text-gray-800">Twitter</a>
          </li>
        </nav>
      </div>
      <div class="px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">AKSES</h2>
        <nav class="list-none mb-10">
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800">Masuk ke akun Anda</a>
          </li>
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800">Daftarkan akun Anda </a>
          </li>
        </nav>
      </div>
    </div>
  </div>
  <div class="bg-gray-300">
    <div class="container mx-auto py-4 px-5">
      <p class="text-gray-500 text-sm text-center">Copyright © 2023, SIPP JAMU Startup.
      </p>
    </div>
  </div>
</footer>