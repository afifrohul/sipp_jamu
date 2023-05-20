@extends('seller.layouts.app')
@section('content')
<div>
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-indigo-700 fad fa-users"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5"> {{ $getCountProduct }} Katalog Produk</h1>
                        <p>Total Katalog Produk</p>
                    </div>            
                </div>
            </div>
            <div class="footer p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-indigo-700 fad fa-users"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5"> {{ $getCountMaterial }} Bahan Baku</h1>
                        <p>Total Bahan Baku</p>
                    </div>            
                </div>
            </div>
            <div class="footer p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-indigo-700 fad fa-users"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5"> {{ $getCountTransaction }} Pesanan</h1>
                        <p>Total Semua Pesanan</p>
                    </div>            
                </div>
            </div>
            <div class="footer p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-indigo-700 fad fa-users"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5"> {{ $getCountTransactionPending }} Pesanan</h1>
                        <p>Total Pesanan Yang Menunggu Konfirmasi</p>
                    </div>            
                </div>
            </div>
            <div class="footer p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
    </div>
</div>
@endsection