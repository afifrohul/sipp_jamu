@extends('farmer.layouts.app')
@section('content')
<div class="content">
    <div class="card mb-8">
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Edit Katalog Produk</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('/back-farmer/material/update',$getDetailMaterial->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label class="text-gray-700 ml-1">Nama Katalog Produk: </label>
                    <input type="text" name="name" class="form-input w-full block rounded mt-1 p-3 border-2 @error('name') border-red-500 @enderror focus:outline-none focus:border-yellow-500" placeholder="Beras Kencur" value="{{old('name', $getDetailMaterial->name)}}">
                    @error('name')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700 ml-1">Deskripsi Katalog Produk: </label>
                    <textarea type="text" name="description" class="form-input w-full block rounded mt-1 p-3 border-2 @error('description') border-red-500 @enderror focus:outline-none focus:border-yellow-500" placeholder="Beras kencur merupakan bahan baku untuk pembuatan..." >{{ old('description',$getDetailMaterial->description)  }}</textarea>
                    @error('description')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700 ml-1">Harga(Rp): </label>
                    <input type="number" name="price" class="form-input w-full block rounded mt-1 p-3 border-2 @error('price') border-red-500 @enderror focus:outline-none focus:border-yellow-500" placeholder="5000" value="{{old('price', $getDetailMaterial->price)}}">
                    @error('price')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700 ml-1">Stok (gram): </label>
                    <input type="number" name="stock" class="form-input w-full block rounded mt-1 p-3 border-2 @error('stock') border-red-500 @enderror focus:outline-none focus:border-yellow-500" placeholder="5000" value="{{old('stock', $getDetailMaterial->stock)}}">
                    @error('stock')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mt-3 grid grid-cols-2 gap-6 xl:grid-cols-1 items-center">
                    <div>
                        <label class="text-gray-700 ml-1">Foto : </label>
                        <div class='flex items-center justify-center w-full mt-2'>
                            <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-yellow-500 group'>
                                <div class='flex flex-col items-center justify-center pt-7 text-center'>
                                    <svg class="w-10 h-10 mt-8 text-yellow-500 group-hover:text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <p class='text-sm text-gray-400 group-hover:text-yellow-600 pt-1 tracking-wider' id="fileName">Pilih Gambar</p>
                                </div>
                            <input type='file' class="hidden" name="image" id="images" />
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="text-gray-700 ml-1">Preview : </label>
                        <div class='flex items-center justify-center w-full mt-2'>
                            <label class='flex flex-col border-4 border-dashed w-full h-auto border-yellow-500 group bg-gray-300'>
                                    <div class='flex flex-col items-center justify-center py-1'>
                                        <img id="preview" src="{{asset('assets/upload/material')}}/{{$getDetailMaterial->image}}" alt="preview" class="object-cover h-32 opacity-50">
                                    </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-5 flex gap-4">
                    <button type="submit" onclick="return confirm('Apakah ingin menyimpan perubahan ?')"class="btn-shadow">Selesai</button>
                </div>
            </form>
            <button class="btn-shadow-cancel mt-2"><a href="{{ url('/back-farmer/material') }}"> Batal</a></button>
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