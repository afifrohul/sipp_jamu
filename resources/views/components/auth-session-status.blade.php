@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{-- {{ $status }} --}}
        <div class="alert alert-default mb-5 flex justify-between">
            <div class="flex gap-2 items-center">
                <i class="fad fa-check-circle"></i>
                <p>{{ $status }}</p>
            </div>
            <button class="alert-btn-close">
                <i class="fad fa-times"></i>
            </button>
        </div>
    </div>
@endif

{{-- <div class="alert alert-default mb-5 flex justify-between">
    <div class="flex gap-2 items-center">
        <i class="fad fa-check-circle"></i>
        <p>Kami telah mengirimkan tautan setel ulang password ke email Anda!</p>
    </div>
    <button class="alert-btn-close">
        <i class="fad fa-times"></i>
    </button>
</div> --}}