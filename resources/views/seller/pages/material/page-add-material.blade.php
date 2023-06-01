@extends('seller.layouts.app')
@section('extraCSS')
<link href="{{ asset('assets/vendor-admin/summernote/summernote.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div>
    <div class="card mb-8">
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Tambah Pesanan Bahan Baku</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('/back-seller/material/order')}}" enctype="multipart/form-data" novalidate>
                @csrf
                <div>
                    <label class="text-gray-700 ml-1">Nama Bahan Baku: </label>
                    <select name="material_id" id="material" class="form-input mt-1 p-3 border-2 @error('tag') border-red-500 @enderror focus:outline-none focus:border-teal-500 form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0">
                        @foreach ($getAllMaterial as $item)
                            
                        <option value="{{ $item->id }}" >{{ $item->name }} | Rp {{ $item->price }}</option>
                        @endforeach
                    </select>
                    @error('material_id')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700 ml-1">Kuantitas (gram):</label>
                    <input type="number" id="qty" name="qty" class="form-input w-full block rounded mt-1 p-3 border-2 @error('qty') border-red-500 @enderror focus:outline-none focus:border-yellow-500" placeholder="5000">
                    @error('qty')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="flex">
                    <h1 class="text-lg mt-2">Total: Rp </h1>
                    <h1 class="text-lg mt-2" id="total"> </h1>
                </div>
                <div class="mt-5">
                    <button type="submit" onclick="return confirm('Apakah ingin menambahkan data ini ?')" class="btn-shadow">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    images.onchange = evt => {
        const [file] = images.files;
        if (file) {
            preview.src = URL.createObjectURL(file);
            fileName.innerHTML = document.getElementById("images").value.split("\\").pop();
        }
    }
</script>
@endsection
@section('extraJS')
<script>
  var materialSelect = document.getElementById("material");
  var qtyInput = document.getElementById("qty");
  var totalHarga = document.getElementById("total");

  materialSelect.addEventListener("change", hitungTotal);

  qtyInput.addEventListener("input", hitungTotal);

  function hitungTotal() {
    var text = material.options[material.selectedIndex].innerHTML.split(' ');
    var qty = qtyInput.value;

    var harga = parseInt( text[text.length - 1]);

    var total = harga * qty/1000;

    totalHarga.innerHTML = total;
  }
</script>
@endsection