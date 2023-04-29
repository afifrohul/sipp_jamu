@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        {{-- <div class="font-medium text-red-600">
            {{ __('Ups! Ada yang salah.') }}
        </div> --}}

        {{-- <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul> --}}
        
        <div class="alert alert-error mb-5 flex justify-between">
            <div>
                @foreach ($errors->all() as $error)
                {{-- <li>{{ $error }}</li> --}}
                <div class="flex gap-2 items-center">
                    <i class="fad fa-times-circle"></i><p>{{ $error }}</p>
                </div>
                @endforeach
            </div>
            <button class="alert-btn-close">
                <i class="fad fa-times"></i>
            </button>
        </div>
    </div>
@endif

{{-- <div>
@if (session('status'))
    <div class="alert alert-default alert-close mb-5">
        <button class="alert-btn-close">
            <i class="fad fa-times"></i>
        </button>
        <span>{{session('status')}}</span>
    </div>
@elseif (session('error'))
    <div class="alert alert-error alert-close mb-5">
        <button class="alert-btn-close">
            <i class="fad fa-times"></i>
        </button>
        <span>{{session('error')}}!</span>
    </div>
@endif
</div> --}}