@extends('farmer.layouts.app')
@section('content')
<div>
    <div class="card mb-8">
        <div class="card-header justify-between">
            <h1 class="h6">Konfirmasi Pesanan</h1>
            <p class="text-xs">Ubah status pesanan untuk mengkonfirmasi pesanan</p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('/back-farmer/transaction/update',$getDetailTransaction->id)}}" enctype="multipart/form-data" novalidate>
                @method('PUT')
                @csrf
                <div>
                    <label class="text-gray-700 ml-1">Nama Pembeli: </label>
                    <input type="text" name="user_id" class="form-input w-full block rounded mt-1 p-3 border-2 @error('user_id') border-red-500 @enderror focus:outline-none focus:border-yellow-500" placeholder="Beras Kencur" value="{{$getDetailTransaction->user->name}}" readonly>
                    @error('user_id')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700 ml-1">Nama Bahan Baku: </label>
                    <textarea type="text" name="material_id" class="form-input w-full block rounded mt-1 p-3 border-2 @error('material_id') border-red-500 @enderror focus:outline-none focus:border-yellow-500" placeholder="Beras kencur merupakan bahan baku untuk pembuatan..." readonly >{{ $getDetailTransaction->material->name }}</textarea>
                    @error('material_id')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700 ml-1">Jumlah: </label>
                    <input type="number" name="qty" class="form-input w-full block rounded mt-1 p-3 border-2 @error('qty') border-red-500 @enderror focus:outline-none focus:border-yellow-500" placeholder="Lorem Ipsum" value="{{$getDetailTransaction->qty}}" readonly>
                    @error('qty')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700 ml-1">Total Harga (Rp): </label>
                    <input type="number" name="total_price" class="form-input w-full block rounded mt-1 p-3 border-2 @error('total_price') border-red-500 @enderror focus:outline-none focus:border-yellow-500" placeholder="Lorem Ipsum" value="{{$getDetailTransaction->total_price}}" readonly>
                    @error('total_price')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700 ml-1">Status Pesanan: </label>
                    <select name="status_accept" class="form-input mt-1 p-3 border-2 @error('tag') border-red-500 @enderror focus:outline-none focus:border-teal-500 form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0">
                        <option value="pending" @if ($getDetailTransaction->status_accept == 'pending') seleccted @endif>Pending</option>
                        <option value="accept"  @if ($getDetailTransaction->status_accept == 'acceot') seleccted @endif>Terima</option>
                        <option value="decline" @if ($getDetailTransaction->status_accept == 'decline') seleccted @endif>Tolak</option>
                        <option value="paid"  @if ($getDetailTransaction->status_accept == 'paid') seleccted @endif>Sudah Bayar</option>
                    </select>
                </div>
                {{-- <div class="mt-3 grid grid-cols-2 gap-6 xl:grid-cols-1 items-center">
                    <div>
                        <label class="text-gray-700 ml-1">Bukti Pembayaran : </label>
                        <div class='flex items-center justify-center w-full mt-2'>
                            <label class='flex flex-col border-4 border-dashed w-full h-auto border-yellow-500 group bg-gray-300'>
                                    <div class='flex flex-col items-center justify-center py-1'>
                                        <img id="preview" src="{{asset('assets/upload/material')}}/{{$getDetailTransaction->image}}" alt="preview" class="object-cover h-32">
                                    </div>
                            </label>
                        </div>
                    </div>
                </div> --}}
                <div class="mt-5 flex gap-4">
                    <button type="submit" onclick="return confirm('Apakah ingin menyimpan perubahan ?')"class="btn-shadow">Selesai</button>
                </div>
            </form>
            <button class="btn-shadow-cancel mt-2"><a href="{{ url('/back-farmer/transaction') }}"> Batal</a></button>
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