@extends('layouts.app')
@section('content')
<main class="">
  {{-- HERO --}}
  <div class='pt-16 md:pt-[72px] px-16'>
    <div id='hero' class='text-left md:text-center lg:text-left'>
      <div class='container'>
      <div class='grid lg:grid-cols-2 gap-8 '>
        <div class=' lg:py-8'>
            <h1 class='font-extrabold text-5xl lg:text-6xl'>Selangkah Lebih Dekat dengan</h1>
            <h1 class='font-extrabold text-5xl lg:text-6xl text-[rgb(16,185,129)]'>HMIF UNEJ</h1>
            <p class='py-8 md:text-lg  lg:text-xl'>Himpunan Mahasiswa Informatika (HMIF) Universitas Jember merupakan organisasi dibawah naungan Fakultas Ilmu komputer yang bertujuan untuk menampung aspirasi serta meningkatkan kualitas mahasiswa di dalam lingkungan program studi Informatika Universitas Jember.</p>
          <div class='text-center flex flex-col md:flex-row md:justify-center lg:justify-start gap-2'>
              <NavLink to='/tentang' class='bg-[rgb(16,185,129)] rounded-[4px] text-lg py-2 font-bold md:px-6'>Tentang</NavLink>
              <a href='https://card.hmifunej.id/' target='_blank' rel="noreferrer" class='rounded-[4px] border-[2px] border-[rgb(16,185,129)] text-lg py-2 font-bold md:px-6'>Card</a>
          </div>
        </div>
        <div class='hidden md:block my-auto '>
            <img class='h-[30rem] lg:h-auto mx-auto' src="https://hmifunej.id/images/HMIF-LOGO-BESAR.png" alt="" />
        </div>
      </div>
      </div>
    </div>
  </div>

  {{-- Feature --}}
  <div class='container px-16'>
        <div class='font-bold text-gray-800 text-3xl md:text-4xl'>
            Jelajahi <br /> Semua Fitur yang Tersedia
        </div>
        <div>
            <span class='inline-block mr-2 w-40 h-1 rounded-full bg-[rgb(16,185,129)]'></span>
            <span class='inline-block mr-2 w-3 h-1 rounded-full bg-[rgb(16,185,129)]'></span>
            <span class='inline-block mr-2 w-1 h-1 rounded-full bg-[rgb(16,185,129)]'></span>
        </div>
        <div class='grid grid-cols-1 pt-10 pb-20 md:grid-cols-2 xl:grid-cols-4 gap-8'>
            <div class='border-[2px] rounded-xl border-green-400 dark:border-green-300'>
                <div class='p-10'>
                    {{-- <RiFilePaper2Line class='h-12 w-12 text-[rgb(16,185,129)]'/> --}}
                    <h3 class='pt-5 pb-2 font-bold text-2xl text-gray-700'>Artikel</h3>
                    <p class='h-[150px] text-gray-500'>Kumpulan informasi, tips dan trik seputar teknologi yang sudah kami rangkum untuk dapat kalian baca kapanpun dan dimanapun.</p>
                    {{-- <div class='mt-4 h-9 w-9 rounded-full bg-[rgb(16,185,129)] flex justify-center items-center'>
                        <MdNavigateNext class='h-8 w-8'/>
                    </div> --}}
                </div>
            </div>
            <div class='border-[2px] rounded-xl border-green-400 dark:border-green-300'>
                <div class='p-10'>
                    {{-- <RiNewspaperLine class='h-12 w-12 text-[rgb(16,185,129)]'/> --}}
                    <h3 class='pt-5 pb-2 font-bold text-2xl text-gray-700'>Berita</h3>
                    <p class='h-[150px] text-gray-500'>Berbagai informasi yang up to date yang bikin kalian tahu apa aja yang terjadi di dunia perkuliahan maupun teknologi.</p>
                    {{-- <div class='mt-4 h-9 w-9 rounded-full bg-[rgb(16,185,129)] flex justify-center items-center'>
                        <MdNavigateNext class='h-8 w-8'/>
                    </div> --}}
                </div>
            </div>
            <div class='border-[2px] rounded-xl border-green-400 dark:border-green-300'>
                <div class='p-10'>
                    {{-- <TbPuzzle class='h-12 w-12 text-[rgb(16,185,129)]'/> --}}
                    <h3 class='pt-5 pb-2 font-bold text-2xl text-gray-700'>Portfolio</h3>
                    <p class='h-[150px] text-gray-500'>Segala dokumentasi portofolio mahasiswa informatika yang memiliki prestasi baik di dunia perkuliahan maupun luar perkuliahan.</p>
                    {{-- <div class='mt-4 h-9 w-9 rounded-full bg-[rgb(16,185,129)] flex justify-center items-center'>
                        <MdNavigateNext class='h-8 w-8'/>
                    </div> --}}
                </div>
            </div>
            <div class='border-[2px] rounded-xl border-green-400 dark:border-green-300'>
                <div class='p-10'>
                    {{-- <TbCertificate class='h-12 w-12 text-[rgb(16,185,129)]'/> --}}
                    <h3 class='pt-5 pb-2 font-bold text-2xl text-gray-700'>E-Certificate</h3>
                    <p class='h-[150px] text-gray-500'>Tempat mengunduh e-sertifikat yang telah kalian dapat dari berbagai event yang diselenggarakan oleh Himpuanan Mahasiswa Informatika.</p>
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
            <p class='text-3xl font-bold pb-4 text-gray-700'>Blog</p>
            <p class='lg:text-lg text-gray-500'>Cari tahu berbagai informasi, tips dan trik menarik seputar teknologi yang sudah kami rangkum untuk dapat kalian baca kapanpun dan dimanapun.</p>
            <p class='text-gray-300 hover:text-gray-500 pt-2'><button>Selengkapnya</button></p>
          </div>
          <div class='relative md:left-16 md:w-1/2 mt-40 md:-mt-20'>
              <img data-aos="fade-up-left"
              data-aos-duration="1000"
              class='max-w-[210px] shadow-xl rounded-lg absolute -top-16 left-64' src="https://hmifunej.id/images/beranda/component-article-1.jpg" alt="" />
              <img data-aos="zoom-in"
              data-aos-duration="1000"
              class='max-w-[180px] shadow-xl rounded-lg absolute -top-24 left-12' src="https://hmifunej.id/images/beranda/component-article-2.jpg" alt="" />
              <img data-aos="fade-up-right"
              data-aos-duration="1000"
              class='max-w-[200px] shadow-xl rounded-lg absolute top-36 -left-5 right-0' src="https://hmifunej.id/images/beranda/component-article-3.jpg" alt="" />
         </div>
        </div>

        <div class='flex flex-wrap items-center mt-80 md:mt-56 pt-10 md:pt-0'>
          <div class='w-full mx-10 md:mx-0 md:w-1/2 flex flex-col lg:flex-row justify-center items-center lg:gap-4'>
              <div class='w-full md:w-auto'>
                <div data-aos="fade-up"
                data-aos-duration="1000"
                class='flex flex-col gap-2 py-4 items-center justify-center my-4 px-4 md:h-40 md:w-60 shadow-lg bg-green-800 rounded-lg text-center'>
                    <div class='rounded-full bg-white text-black mx-auto w-14 h-14 md:w-20 md:h-20 flex items-center'>
                      <MdSearch class='mx-auto w-12 h-12 md:w-20 md:h-20 p-1'/>
                    </div>
                    <p>LITBANG</p>
                </div>
                <div data-aos="fade-up"
                data-aos-duration="1000"
                class='flex flex-col gap-2 py-4 items-center justify-center my-4 px-4 md:h-40 md:w-60 shadow-lg bg-green-600 rounded-lg text-center'>
                    <div class='rounded-full bg-white text-black mx-auto w-14 h-14 md:w-20 md:h-20 flex items-center'>
                      <FaRegHandshake class='mx-auto w-12 h-12 md:w-20 md:h-20 p-1'/>
                    </div>
                    <p>HUMAS</p>
                </div>
                <div data-aos="fade-up"
                data-aos-duration="1000"
                class='flex flex-col gap-2 py-4 items-center justify-center my-4 px-4 md:h-40 md:w-60 shadow-lg bg-green-400 rounded-lg text-center'>
                    <div class='rounded-full bg-white text-black mx-auto w-14 h-14 md:w-20 md:h-20 flex items-center'>
                      <BiBody class='mx-auto w-12 h-12 md:w-20 md:h-20 p-1'/>
                    </div>
                    <p>PSDM</p>
                </div>
              </div>
              <div class='w-full md:w-auto'>
                <div data-aos="fade-up"
                data-aos-duration="1000"
                class='flex flex-col gap-2 py-4 items-center justify-center my-0 lg:my-4 px-4 md:h-40 md:w-60 shadow-lg bg-green-700 rounded-lg text-center'>
                    <div class='rounded-full bg-white text-black mx-auto w-14 h-14 md:w-20 md:h-20 flex items-center'>
                      <FaMoneyBillWave class='mx-auto w-12 h-12 md:w-20 md:h-20 p-2'/>
                    </div>
                    <p>KWU</p>
                </div>
                <div data-aos="fade-up"
                data-aos-duration="1000"
                class='flex flex-col gap-2 py-4 items-center justify-center my-4 px-4 md:h-40 md:w-60 shadow-lg bg-green-500 rounded-lg text-center'>
                    <div class='rounded-full bg-white text-black mx-auto w-14 h-14 md:w-20 md:h-20 flex items-center'>
                      <BiPen class='mx-auto w-12 h-12 md:w-20 md:h-20 p-1'/>
                    </div>
                    <p>MEDIATEK</p>
                </div>
              </div>
          </div>
          <div class='md:w-1/2 py-10 px-20'>
            <p class='text-3xl font-bold pb-4 text-gray-700 '>Divisi</p>
            <p class='lg:text-lg text-gray-500 '>Terdapat lima divisi yang kami miliki dan tiap divisi menjalankan tugasnya masing-masing. Cari tahu lebih lanjut mengenai tugas dan tanggung jawab masing-masing divisi.</p>
            <p class='text-gray-300 hover:text-gray-500   pt-2'><button>Selengkapnya</button></p>
          </div>
        </div>
      </div>
    </div>

    <div class='container px-16'>
        <div class='py-10'>
            <div class='text-center max-w-lg mx-auto'>
                <h1 class='text-3xl font-bold pb-4 text-gray-700'>Blog</h1>
                <p class='text-gray-500 dark:text-gray-300'>Cari tahu berbagai informasi, tips dan trik menarik seputar teknologi yang sudah kami rangkum untuk dapat kalian baca kapanpun dan dimanapun.</p>
            </div>
            <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 py-10'>
                <div class=' mx-auto rounded-lg p-4 hover:scale-105 duration-500 shadow-lg hover:shadow-2xl'>
                    <img class='w-full rounded-lg' src="https://th.bing.com/th/id/OIP.UX9k4Dcx7kKXy5hmhqryCQHaDt?w=292&h=174&c=7&r=0&o=5&pid=1.7" alt="" />
                    <h1 class='text-xl font-bold pt-4 pb-2 text-gray-700'>Tips dan Trik Kuliah di Jurusan Informatika</h1>
                    <p class='text-gray-500 dark:text-gray-300 pb-4'>Halo Infortination! Siapa yang belum tau jurusan Informatika nih? Yap… Jurusan yang berbau-bau dunia IT dan Teknologi ini mempelajari ilmu komputer da..</p>
                    <span class='inline-block my-2 rounded-full py-px px-2 bg-gray-400 font-semibold text-gray-700'>#Informatics</span>
                </div>
                <div class=' mx-auto rounded-lg p-4 hover:scale-105 duration-500 shadow-lg hover:shadow-2xl'>
                    <img class='w-full rounded-lg' src="https://th.bing.com/th/id/OIP.UX9k4Dcx7kKXy5hmhqryCQHaDt?w=292&h=174&c=7&r=0&o=5&pid=1.7" alt="" />
                    <h1 class='text-xl font-bold pt-4 pb-2 text-gray-700'>Tips dan Trik Kuliah di Jurusan Informatika</h1>
                    <p class='text-gray-500 dark:text-gray-300 pb-4'>Halo Infortination! Siapa yang belum tau jurusan Informatika nih? Yap… Jurusan yang berbau-bau dunia IT dan Teknologi ini mempelajari ilmu komputer da..</p>
                    <span class='inline-block my-2 rounded-full py-px px-2 bg-gray-400 font-semibold text-gray-700'>#Informatics</span>
                </div>
                <div class=' mx-auto rounded-lg p-4 hover:scale-105 duration-500 shadow-lg hover:shadow-2xl'>
                    <img class='w-full rounded-lg' src="https://th.bing.com/th/id/OIP.UX9k4Dcx7kKXy5hmhqryCQHaDt?w=292&h=174&c=7&r=0&o=5&pid=1.7" alt="" />
                    <h1 class='text-xl font-bold pt-4 pb-2 text-gray-700'>Tips dan Trik Kuliah di Jurusan Informatika</h1>
                    <p class='text-gray-500 dark:text-gray-300 pb-4'>Halo Infortination! Siapa yang belum tau jurusan Informatika nih? Yap… Jurusan yang berbau-bau dunia IT dan Teknologi ini mempelajari ilmu komputer da..</p>
                    <span class='inline-block my-2 rounded-full py-px px-2 bg-gray-400 font-semibold text-gray-700'>#Informatics</span>
                </div>
            </div>
        </div>
    </div>

    <div class='bg-gray-100'>
    <div class='px-6 py-20 max-w-xl xl:max-w-7xl mx-auto flex flex-col xl:flex-row gap-10 justify-center items-center'>
      <div class='xl:w-3/5'>
        <h1 class='text-3xl md:text-4xl font-bold text-gray-700'>Hey, Ada masukan untuk kami?</h1>
        <p class='py-10 text-gray-400 md:text-xl'>Kami tunggu saran dan masukan anda</p>
      </div>
      <div class='bg-white p-8 rounded-lg shadow-2xl w-full xl:w-2/5'>
        <form action="">
          <h1 class='text-xl font-semibold pb-4 text-black'>Kritik atau Saran</h1>
          <p class='py-2 font-semibold text-black'>Nama</p>
          <input
          class='w-full border border-gray-500 rounded-md px-4 py-2'
          type="text" placeholder='HMIF'/>
          <p class='py-2 font-semibold text-black'>Email</p>
          <input 
          class='w-full border border-gray-500 rounded-md px-4 py-2'
          type="email" placeholder='hmif.unej@example.org'/>
          <p class='py-2 font-semibold text-black'>Masukan</p>
          <textarea class='w-full border border-gray-500 rounded-md px-4 py-2' 
          name="" id="" cols="30" rows="10"></textarea>
          <h1 class='text-center bg-green-600 hover:bg-green-700 rounded-md py-1 text-sm mt-4 shadow-lg'>KIRIM MASUKAN</h1>
        </form>
      </div>
    </div>
    </div>

</main>
@endsection