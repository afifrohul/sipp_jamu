@extends('customer.layouts.app')
@section('extraCSS')
<link href="{{ asset('assets/vendor-admin/summernote/summernote.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div>
    <div class="card mb-8">
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Kelola Akun</h1>
            <form action="{{url('/back-customer/profile/edit',$getDetailUser[0]->id)}}" method="GET" class="inline">
                @csrf
                <button type="submit" class="bg-green-500 h-10 w-10 rounded hover:bg-green-600"><i class="fa fa-pencil text-white"></i></button>
            </form>
        </div>
        <div class="card-body">
          <p class="text-gray-700 ml-1 mt-2 font-semibold ">Nama Pengguna:</p>
          <p class="ml-1">{{ $getDetailUser[0]->name }}</p>
          <p class="text-gray-700 ml-1 mt-2 font-semibold ">Nama Lengkap:</p>
          <p class="ml-1">{{ $getDetailUser[0]->full_name }}</p>
          <p class="text-gray-700 ml-1 mt-2 font-semibold ">No HP:</p>
          <p class="ml-1">{{ $getDetailUser[0]->no_hp }}</p>
          <p class="text-gray-700 ml-1 mt-2 font-semibold ">Alamat:</p>
          <p class="ml-1">{{ $getDetailUser[0]->address }}</p>
          <p class="text-gray-700 ml-1 mt-2 font-semibold ">Deskripsi:</p>
          <p class="ml-1">{{ $getDetailUser[0]->description }}</p>
          <div class="mt-3 grid grid-cols-2 gap-6 xl:grid-cols-1 items-center"> 
            <div>
                <label class="text-gray-700 ml-1">Avatar : </label>
                <div class='flex items-center justify-center w-1/2 mt-2'>
                    <label class='flex flex-col border-4 border-dashed w-full h-auto border-yellow-500 group bg-gray-300'>
                            <div class='flex flex-col items-center justify-center py-1'>
                                <img id="preview" src="{{asset('assets/upload/user')}}/{{$getDetailUser[0]->image}}" alt="preview" class="object-cover h-32">
                            </div>
                    </label>
                </div>
            </div>
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