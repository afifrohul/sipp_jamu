@extends('admin.layouts.app')
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
                        <h1 class="h5"> Orang Pengurus</h1>
                        <p>Total Kepengurusan Periode 2022-2023</p>
                    </div>            
                </div>
            </div>
            <div class="footer {{-- @if ($getCountFeedbackUnread != 0) bg-teal-500 @else bg-white @endif --}} p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
    </div>
</div>
@endsection