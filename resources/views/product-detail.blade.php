@extends('layouts.app')
@section('content')


<main>
  <div class="px-5">

    @if (session('status'))
    <div class="alert alert-default mb-5 flex justify-between">
      <div class="flex gap-2 items-center">
        <i class="fad fa-bell-on text-lg"></i>
        {{-- <p class="text-base">{{ session('status') }} </p> --}}
        <p class="text-base">{!! session('status') !!} </p>
      </div>
      <button class="alert-btn-close">
          <i class="fad fa-times text-lg"></i>
      </button>
    </div>
    @elseif(session('error'))
    <div class="alert alert-error mb-5 flex justify-between">
      <div class="flex gap-2 items-center">
        <i class="fad fa-bell-on text-lg"></i>
        <p class="text-base">{{ session('error') }} </p>
      </div>
      <button class="alert-btn-close">
        <i class="fad fa-times text-lg"></i>
      </button>
    </div>
    @endif
  </div>
  <!-- component -->
  <section class="text-gray-700 body-font overflow-hidden bg-white">
    <div class="container px-5 py-10 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img alt="ecommerce" class="lg:w-1/2 max-h-96 w-full object-cover object-center rounded border border-gray-200" src="{{ asset('assets/upload/product/'.$getDetailProduct->image) }}">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:pb-6 mt-6 lg:mt-0">
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $getDetailProduct->name }}</h1>
          
          <p class="leading-relaxed">{{ $getDetailProduct->description }}</p>
          <form method="POST" action="{{ url('/back-customer/transaction/new/'.$getDetailProduct->id) }}">
            @csrf
            <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
              <div class="w-full">
                <label class="text-gray-700 ml-1">Kuantitas:</label>
                <input type="number" id="qty" name="qty" class="form-input w-full block rounded mt-1 p-3 border-2 @error('qty') border-red-500 @enderror focus:outline-none focus:border-green-500" placeholder="Inputkan Jumlah Barang" value="{{old('qty')}}">
                @error('qty')
                <span class="pl-1 text-xs text-red-600 text-bold">
                    {{$message}}
                </span>
                @enderror
              </div>
            </div>
            {{-- Hidden Input --}}
            <input type="number" id="total_price" name="total_price" class="hidden">
            <div class="flex justify-between">
              <div>
                <p>Total (Rp):</p>
                <p class="title-font font-medium text-2xl text-gray-900" id="price">{{ $getDetailProduct->price }}</p>
              </div>
              <button type="submit" class=" text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded">Beli Sekarang</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container px-32 py-10 mx-auto">
      <h3 class="text-3xl text-center font-semibold mb-6" >Ulasan Produk</h3>
      

        <form method="POST" action="{{ url('/back-customer/review/new/'. $getDetailProduct->id) }}" novalidate>
          @csrf
          <div class="flex gap-4">
            <textarea type="text" name="comment" class="form-input w-full block rounded mt-1 p-3 border-2 @error('comment') border-red-500 @enderror focus:outline-none focus:border-teal-500" placeholder="Tambah Ulasan Produk" value="{{old('comment')}}"></textarea>
            @error('comment')
            <span class="pl-1 text-xs text-red-600 text-bold">
                {{$message}}
            </span>
            @enderror
          </div>
          <div class="w-full">
            {{-- <label class="text-gray-700 ml-1">Rating:</label> --}}
            <input type="number" step="0.1" min="1" max="5" name="rating" class="form-input w-full block rounded mt-1 p-3 border-2 @error('rating') border-red-500 @enderror focus:outline-none focus:border-green-500" placeholder="Rating Produk (1-5)" value="{{old('rating')}}" >
          </div>
          <div class="flex mt-3 justify-end">
            <button type="submit" onclick="return confirm('Tambahkan ulasan baru ?')" class="text-white bg-green-500 border-0 py-2 px-4 focus:outline-none hover:bg-green-600 rounded"><p class="text-base">Tambah</p></button>
          </div>
        </form>

        <div class="h-[2px] opacity-50 rounded-md bg-gray-400 my-8"></div>
      @foreach ($getDetailReview as $item)
          
      <div class="flex w-full backdrop-filter-custom p-8 border drop-shadow-2xl rounded-lg border-gray-900 flex-wrap md:flex-nowrap mt-3">
        
        <span class="flex-shrink-0 w-12 h-12 rounded-full"><img alt="testimonial" class="" src="{{ asset('assets/upload/user/'.$item->customer->image) }}"></span>
        <div class="flex flex-col flex-grow ml-0 mt-4 md:ml-4 md:mt-0 text-gray-900">
          <div class="flex"><span class="font-semibold">{{ $item->customer->name }}</span> <span class="ml-auto text-sm">{{ $item->created_at }}</span>
          </div> 
          <p class="mt-1">Rating: {{ $item->rating }}/5</p> 
          <p class="mt-1"> {{ $item->comment }}</p> 
        </div>
      </div>
      @endforeach
    </div>
    
  </section>
</main>

@endsection

@section('extraJS')
<script>
  var qty = document.getElementById("qty");
  var price = document.getElementById("price");
  var priceProduct = price.innerHTML;
  var defaultPrice = {{ $getDetailProductPrice }}
  var total_price = document.getElementById("total_price")
    
    qty.addEventListener("keyup", function () {
      if (parseInt(qty.value) != 0) {
        
        price.innerHTML = parseInt(qty.value) * parseInt(priceProduct);
        total_price.value = parseInt(qty.value) * parseInt(priceProduct);
      }
      if (qty.value == '' || parseInt(qty.value) == 0) {
        price.innerHTML = defaultPrice;
        total_price.value = defaultPrice;
      }
      
    });

</script>
@endsection