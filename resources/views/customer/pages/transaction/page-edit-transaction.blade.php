@extends('customer.layouts.app')
@section('content')
<div>
    <div class="card mb-8">
        <div class="card-header justify-between">
            @if ($getDetailTransaction->status_accept == 'pending')
            <h1 class="h6">Edit Pesanan</h1>
            <p class="text-xs">Pesanan hanya bisa di edit jika belum di konfirmasi oleh seller.</p>
            <p class="text-xs">Ubah status pesanan menjadi cancel untuk membatalkan pesanan.</p>
            @endif
            @if ($getDetailTransaction->status_accept == 'accept')
            <h1 class="h6">Upload Bukti Transaksi Pesanan Pesanan</h1>
            <p class="text-xs">Upload Bukti Transaksi ke 0012910201291021 a/n Afif Rohul.</p>
            @endif
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('/back-customer/transaction/update',$getDetailTransaction->id)}}" enctype="multipart/form-data" novalidate>
                @method('PUT')
                @csrf
                <div>
                    <label class="text-gray-700 ml-1">Nama Produk: </label>
                    <input type="text" name="product_id" class="form-input w-full block rounded mt-1 p-3 border-2 @error('product_id') border-red-500 @enderror focus:outline-none focus:border-yellow-500" placeholder="Lorem Ipsum" value="{{$getDetailTransaction->product->name}}" readonly>
                    @error('product_id')
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
                        @if ($getDetailTransaction->status_accept == 'accept')
                        <option value="accept"  selected >Terima</option>
                        @endif
                        @if ($getDetailTransaction->status_accept == 'pending')
                        <option value="pending" selected >Pending</option>
                        <option value="cancel" >Cancel</option>
                        @endif
                    </select>
                </div>
                @if ($getDetailTransaction->status_accept != 'pending')
                    
                
                <div class="mt-3 grid grid-cols-2 gap-6 xl:grid-cols-1 items-center">
                    <div>
                        <label class="text-gray-700 ml-1">Bukti Pembayaran: </label>
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
                        <label class="text-gray-700 ml-1">Preview: </label>
                        <div class='flex items-center justify-center w-full mt-2'>
                            <label class='flex flex-col border-4 border-dashed w-full h-auto border-yellow-500 group bg-gray-300'>
                                    <div class='flex flex-col items-center justify-center py-1'>
                                        @if ($getDetailTransaction->prove_payment != null)
                                            
                                        <img id="preview" src="{{asset('assets/upload/payment')}}/{{$getDetailTransaction->prove_payment}}" alt="preview" class="object-cover h-32">
                                        @endif
                                        @if ($getDetailTransaction->prove_payment == null)
                                            
                                        <img id="preview" src="{{asset('assets/img-admin/logo.png')}}" alt="preview" class="object-cover h-32">
                                        @endif
                                    </div>
                            </label>
                        </div>
                    </div>
                </div>
                @endif
                <div class="mt-5 flex gap-4">
                    <button type="submit" onclick="return confirm('Apakah ingin menyimpan perubahan ?')"class="btn-shadow">Selesai</button>
                </div>
            </form>
            <button class="btn-shadow-cancel mt-2"><a href="{{ url('/back-customer/transaction') }}"> Batal</a></button>
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