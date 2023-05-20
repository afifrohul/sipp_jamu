@extends('layouts.app')
@section('content')

<main>
  <!-- component -->
  <section class="text-gray-700 body-font overflow-hidden bg-white">
    <div class="container px-5 py-10 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img alt="ecommerce" class="lg:w-1/2 max-h-96 w-full object-cover object-center rounded border border-gray-200" src="{{ asset('assets/upload/product/'.$getDetailProduct->image) }}">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:pb-6 mt-6 lg:mt-0">
          {{-- <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2> --}}
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $getDetailProduct->name }}</h1>
          
          <p class="leading-relaxed">{{ $getDetailProduct->description }}</p>
          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
            <div class="w-full">
              <label class="text-gray-700 ml-1">Kuantitas:</label>
              <input type="number" min="1" name="qty" class="form-input w-full block rounded mt-1 p-3 border-2 @error('qty') border-red-500 @enderror focus:outline-none focus:border-yellow-500" placeholder="Inputkan Jumlah Barang" value="{{old('qty')}}">
            </div>
          </div>
          <div class="flex">
            <span class="title-font font-medium text-2xl text-gray-900">Rp{{ $getDetailProduct->price }}</span>
            <button class="flex ml-auto text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded">Beli Sekarang</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container px-32 py-10 mx-auto">
      <h3 class="text-3xl text-center font-semibold mb-6" >Ulasan Produk</h3>
      @foreach ($getDetailReview as $item)
          
      <div class="flex w-full backdrop-filter-custom p-8 border drop-shadow-2xl rounded-lg border-gray-900 flex-wrap md:flex-nowrap mt-3">
        
        <span class="flex-shrink-0 w-12 h-12 rounded-full"><img alt="testimonial" class="" src="{{ asset('assets/upload/user/'.$item->customer->image) }}"></span>
        <div class="flex flex-col flex-grow ml-0 mt-4 md:ml-4 md:mt-0 text-gray-900">
          <div class="flex"><span class="font-semibold">{{ $item->customer->name }}</span> <span class="ml-auto text-sm">{{ $item->created_at }}</span>
          </div> 
          <p class="mt-1"> {{ $item->comment }}</p> 
        </div>
      </div>
      @endforeach
    </div>
    
  </section>
</main>

@endsection