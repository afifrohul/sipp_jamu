@extends('farmer.layouts.app')
@section('extraCSS')
<link href="{{ asset('assets/vendor-admin/summernote/summernote.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div>
    <div class="card">
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">List Produk Seller</h1>
        </div>
        <div class="card-body">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg p-3">
                <table class="min-w-full divide-y divide-gray-200" id="dataTable">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nama Seller
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nama Produk
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Deskripsi Produk
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Stok Tersedia
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Foto
                            </th>
                            {{-- <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Opsi
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($getAllProduct as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">{{$loop->iteration}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">Afif</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">{{$item->name}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">{!! Str::limit($item->description, 40)!!}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">{{$item->price}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">{{$item->stock}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">
                                    <img class="h-16 object-cover m-auto" src="{{asset('assets/upload/product')}}/{{$item->image}}">
                                </div>
                            </td>
                            
                            {{-- <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                                <form action="{{url('/back-farmer/product/edit',$item->id)}}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="bg-teal-500 h-10 w-10 rounded hover:bg-teal-600"><i class="fa fa-pencil text-white"></i></button>
                                </form>
                                <form action="{{url('/back-farmer/product/destroy',$item->id)}}" method="POST" class="inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="bg-red-600 h-10 w-10 rounded hover:bg-red-700" onclick="return confirm('Hapus Data ?')"><i class="fa fa-trash text-white"></i></button>
                                </form>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    <script>
      ClassicEditor.create(document.querySelector('#editor')).catch((error) => {
        console.error(error);
      });
    </script>
@endsection