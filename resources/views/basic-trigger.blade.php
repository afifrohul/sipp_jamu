@extends('layouts.app')
@section('content')
<main class="">
  {{-- HERO --}}
  <div class='py-36 md:pt-[72px] px-16 bg-gradient-to-t from-green-300 to-gray-100'>
    <div id='hero' class='text-left md:text-center lg:text-left'>
      <div class='container'>
      <div class='grid lg:grid-cols-2 gap-8 '>
        <div class=' lg:py-8'>
            <h1 class='font-extrabold text-5xl lg:text-6xl'>Selangkah Lebih Dekat dengan</h1>
            <h1 class='font-extrabold text-5xl lg:text-6xl text-[rgb(16,185,129)]'>SIPP JAMU</h1>
            <p class='py-8 md:text-lg  lg:text-xl'>Selamat datang di Sipp Jamu, teman setia Anda untuk menjaga kesehatan alami! Kami akan memberikan informasi bermanfaat tentang jamu tradisional yang mudah diakses beserta produk unggulan kami.</p>
        </div>
        <div class='hidden md:block my-auto '>
            <img class='h-[30rem] lg:h-auto mx-auto' src="{{ asset('assets/img-admin/logo.png') }}" alt="" />
        </div>
      </div>
      </div>
    </div>
  </div>

  {{-- Feature --}}
  <div class='container px-16 pt-12 bg-[url("https://images.unsplash.com/photo-1616319708901-52d9b189d74c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1332&q=80")] bg-cover'>
        <div class='font-bold text-gray-100 text-3xl md:text-4xl'>
            Keuggulan <br /> Jamu Secara Umum
        </div>
        <div>
            <span class='inline-block mr-2 w-40 h-1 rounded-full bg-[rgb(16,185,129)]'></span>
            <span class='inline-block mr-2 w-3 h-1 rounded-full bg-[rgb(16,185,129)]'></span>
            <span class='inline-block mr-2 w-1 h-1 rounded-full bg-[rgb(16,185,129)]'></span>
        </div>
        <div class='grid grid-cols-1 pt-10 pb-20 md:grid-cols-2 xl:grid-cols-4 gap-8'>
            <div class='border-[2px] rounded-xl border-green-400 dark:border-green-300 bg-gray-100'>
                <div class='p-10'>
                    {{-- <RiFilePaper2Line class='h-12 w-12 text-[rgb(16,185,129)]'/> --}}
                    <h3 class='pt-5 pb-2 font-bold text-2xl text-gray-700'>Sumber bahan alami</h3>
                    <p class=' text-gray-500'>Jamu terbuat dari campuran bahan alami seperti rempah-rempah, tumbuhan obat, akar, dan kulit kayu. Bahan-bahan ini diolah secara tradisional dan telah digunakan selama bertahun-tahun untuk tujuan pengobatan.</p>
                    {{-- <div class='mt-4 h-9 w-9 rounded-full bg-[rgb(16,185,129)] flex justify-center items-center'>
                        <MdNavigateNext class='h-8 w-8'/>
                    </div> --}}
                </div>
            </div>
            <div class='border-[2px] rounded-xl border-green-400 dark:border-green-300 bg-gray-100'>
                <div class='p-10'>
                    {{-- <RiNewspaperLine class='h-12 w-12 text-[rgb(16,185,129)]'/> --}}
                    <h3 class='pt-5 pb-2 font-bold text-2xl text-gray-700'>Tradisi yang kuat</h3>
                    <p class=' text-gray-500'>Jamu memiliki warisan budaya yang kuat di Indonesia. Praktik pengobatan tradisional ini telah diturunkan dari generasi ke generasi, dan masih dianggap sebagai bagian penting dari kehidupan sehari-hari masyarakat.</p>
                    {{-- <div class='mt-4 h-9 w-9 rounded-full bg-[rgb(16,185,129)] flex justify-center items-center'>
                        <MdNavigateNext class='h-8 w-8'/>
                    </div> --}}
                </div>
            </div>
            <div class='border-[2px] rounded-xl border-green-400 dark:border-green-300 bg-gray-100'>
                <div class='p-10'>
                    {{-- <TbPuzzle class='h-12 w-12 text-[rgb(16,185,129)]'/> --}}
                    <h3 class='pt-5 pb-2 font-bold text-2xl text-gray-700'>Pendekatan holistik</h3>
                    <p class=' text-gray-500'>Salah satu keunggulan jamu adalah pendekatan holistiknya terhadap kesehatan. Jamu tidak hanya menyembuhkan gejala penyakit, tetapi juga bertujuan untuk memperbaiki keseimbangan dan kesehatan keseluruhan tubuh.</p>
                    {{-- <div class='mt-4 h-9 w-9 rounded-full bg-[rgb(16,185,129)] flex justify-center items-center'>
                        <MdNavigateNext class='h-8 w-8'/>
                    </div> --}}
                </div>
            </div>
            <div class='border-[2px] rounded-xl border-green-400 dark:border-green-300 bg-gray-100'>
                <div class='p-10'>
                    {{-- <TbCertificate class='h-12 w-12 text-[rgb(16,185,129)]'/> --}}
                    <h3 class='pt-5 pb-2 font-bold text-2xl text-gray-700'>Tersedia dalam berbagai bentuk</h3>
                    <p class=' text-gray-500'>Jamu tidak hanya tersedia dalam bentuk minuman, tetapi juga dalam bentuk pil, tablet, serbuk, atau salep.</p>
                    {{-- <div class='mt-4 h-9 w-9 rounded-full bg-[rgb(16,185,129)] flex justify-center items-center'>
                        <MdNavigateNext class='h-8 w-8'/>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- BLOG --}}
    <div class='bg-gray-100 '>
      <div class='max-w-6xl px-4 mx-auto py-20 overflow-hidden'>
        <div class='flex flex-wrap items-center'>
          <div class='md:w-1/2 px-20 md:pt-20'>
            <p class='text-3xl font-bold pb-4 text-gray-700'>SIPP JAMU</p>
            <p class='lg:text-lg text-gray-500'>Mari Lestarikan budaya minum jamu tradisional!</p>
          </div>
          <div class='relative md:left-16 md:w-1/2 mt-40 md:-mt-20'>
              <img data-aos="fade-up-left"
              data-aos-duration="1000"
              class='max-w-[210px] shadow-xl rounded-lg absolute -top-16 left-64' src="https://images.unsplash.com/photo-1626906722170-13ec7bb0b7f3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="" />
              <img data-aos="zoom-in"
              data-aos-duration="1000"
              class='max-w-[180px] shadow-xl rounded-lg absolute -top-24 left-12' src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" alt="" />
              <img data-aos="fade-up-right"
              data-aos-duration="1000"
              class='max-w-[200px] shadow-xl rounded-lg absolute top-36 -left-5 right-0' src="https://images.unsplash.com/photo-1589923188900-85dae523342b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="" />
         </div>
        </div>

        <div class='flex flex-wrap items-center mt-80 md:mt-56 pt-10 md:pt-0'>
          <div class='w-full mx-10 md:mx-0 md:w-1/2 flex flex-col lg:flex-row justify-center items-center lg:gap-4'>
              <div class='w-full md:w-auto'>
                <div data-aos="fade-up"
                data-aos-duration="1000"
                class='flex flex-col gap-2 py-4 items-center justify-center my-4 px-4 md:h-40 md:w-60 shadow-lg bg-[url("https://images.unsplash.com/photo-1484836443634-3d3fd80edccf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80")] bg-cover rounded-lg text-center'>
                </div>
                <div data-aos="fade-up"
                data-aos-duration="1000"
                class='flex flex-col gap-2 py-4 items-center justify-center my-4 px-4 md:h-40 md:w-60 shadow-lg bg-[url("https://plus.unsplash.com/premium_photo-1679075287374-8ae9570265ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80")] bg-cover rounded-lg text-center'>
                </div>
                <div data-aos="fade-up"
                data-aos-duration="1000"
                class='flex flex-col gap-2 py-4 items-center justify-center my-4 px-4 md:h-40 md:w-60 shadow-lg bg-[url("https://images.unsplash.com/photo-1617191880520-c6a69e04fa75?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80")] bg-cover rounded-lg text-center'>
                </div>
              </div>
              <div class='w-full md:w-auto'>
                <div data-aos="fade-up"
                data-aos-duration="1000"
                class='flex flex-col gap-2 py-4 items-center justify-center my-0 lg:my-4 px-4 md:h-40 md:w-60 shadow-lg bg-[url("https://plus.unsplash.com/premium_photo-1661416234636-c76620928342?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80")] bg-cover rounded-lg text-center'>
                </div>
                <div data-aos="fade-up"
                data-aos-duration="1000"
                class='flex flex-col gap-2 py-4 items-center justify-center my-4 px-4 md:h-40 md:w-60 shadow-lg bg-[url("https://images.unsplash.com/photo-1648455321715-e8ed86188c0e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80")] bg-cover rounded-lg text-center'>
                </div>
              </div>
          </div>
          <div class='md:w-1/2 py-10 px-20'>
            <p class='text-3xl font-bold pb-4 text-gray-700 '>Produk</p>
            <p class='lg:text-lg text-gray-500 '>Kami juga menyidiakan berbagai jenis jamu yang siap membantu menjaga kesehatan Anda!</p>
          </div>
        </div>
      </div>
    </div>

    {{-- <div class='container px-16'> --}}
    <div class='container px-16 bg-[url("https://images.unsplash.com/photo-1616225273962-05c320ca73d2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1228&q=80")] bg-cover'>
        <div class='py-10'>
            <div class='text-center max-w-lg mx-auto'>
                <h1 class='text-3xl font-bold pb-4 text-gray-100'>Khasiat Jamu</h1>
                <p class='text-gray-100 font-semibold'>Cari tahu berbagai informasi tentang manfaat berbagai jenis jamu.</p>
            </div>
            <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 py-10'>
                <div class=' mx-auto rounded-lg p-4 hover:scale-105 duration-500 shadow-lg hover:shadow-2xl bg-gray-100'>
                    {{-- <img class='w-full rounded-lg' src="https://th.bing.com/th/id/OIP.UX9k4Dcx7kKXy5hmhqryCQHaDt?w=292&h=174&c=7&r=0&o=5&pid=1.7" alt="" /> --}}
                    <h1 class='text-xl font-bold pt-4 pb-2 text-gray-700'>SINOM</h1>
                    <p class='text-gray-500 pb-4'>Sinom adalah Jamu tradisional khas jawa yang terbuat dari campuran air, asam Jawa, daun asam muda alias sinom, gula asli dan juga kunyit. Sinom memiliki banyak manfaat bagi kesehatan, yaitu bisa digunakan untuk melancarkan peredaran darah, meredakan rasa sakit, mengurangi radang dan nyeri persendian, meredakan batuk dan demam, hingga bisa digunakan untuk melangsingkan tubuh.</p>  
                </div>
                <div class=' mx-auto rounded-lg p-4 hover:scale-105 duration-500 shadow-lg hover:shadow-2xl bg-gray-100'>
                    {{-- <img class='w-full rounded-lg' src="https://th.bing.com/th/id/OIP.UX9k4Dcx7kKXy5hmhqryCQHaDt?w=292&h=174&c=7&r=0&o=5&pid=1.7" alt="" /> --}}
                    <h1 class='text-xl font-bold pt-4 pb-2 text-gray-700'>BERAS KENCUR</h1>
                    <p class='text-gray-500 pb-4'>Beras kencur adalah Jamu tradisional khas jawa yang terbuat dari beras, kencur, jahe, gula jawa, gula pasir, garam, daun pandan, dan air. Beras kencur dapat membantu meredakan gangguan pencernaan seperti perut kembung, mual, dan muntah-muntah. Kencur memiliki sifat antiperut yang membantu mengurangi ketidaknyamanan dan membantu proses pencernaan.</p>  
                </div>
                <div class=' mx-auto rounded-lg p-4 hover:scale-105 duration-500 shadow-lg hover:shadow-2xl bg-gray-100'>
                    {{-- <img class='w-full rounded-lg' src="https://th.bing.com/th/id/OIP.UX9k4Dcx7kKXy5hmhqryCQHaDt?w=292&h=174&c=7&r=0&o=5&pid=1.7" alt="" /> --}}
                    <h1 class='text-xl font-bold pt-4 pb-2 text-gray-700'>TEMULAWAK</h1>
                    <p class='text-gray-500 pb-4'>Temulawak mengandung senyawa kurkuminoid yang memiliki sifat antiinflamasi dan antioksidan. Senyawa ini membantu mengurangi peradangan dalam tubuh dan melindungi sel-sel dari kerusakan oksidatif. Konsumsi jamu temulawak secara teratur dapat membantu mengurangi risiko penyakit inflamasi dan meningkatkan kesehatan secara keseluruhan.</p>  
                </div>
            </div>
        </div>
    </div>

    <div class='bg-gray-100'>
    <div class='px-6 py-20 max-w-xl xl:max-w-7xl mx-auto flex flex-col xl:flex-row gap-10 justify-center items-center'>
      <div class='xl:w-3/5'>
        <h1 class='text-3xl md:text-4xl font-bold text-gray-700'>Hey, Tertarik bergabung dengan kami?</h1>
        <p class='py-10 text-gray-400 md:text-xl'>Kami tunggu kedatangan Anda!</p>
      </div>
      <div class='bg-white p-8 rounded-lg shadow-2xl w-full xl:w-2/5'>
        <form action="">
          <p class='py-2 font-semibold text-black'>Nama</p>
          <input
          class='w-full border border-gray-500 rounded-md px-4 py-2'
          type="text" placeholder='Afif'/>
          <p class='py-2 font-semibold text-black'>Email</p>
          <input 
          class='w-full border border-gray-500 rounded-md px-4 py-2'
          type="email" placeholder='email@example.org'/>
          <h1 class='text-center text-gray-100 bg-green-600 hover:bg-green-700 rounded-md py-2 text-lg mt-4 shadow-base'>Kirim</h1>
        </form>
      </div>
    </div>
    </div>

</main>
@endsection