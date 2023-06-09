<div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    <div class="flex flex-col">
        <div class="text-right hidden md:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>

        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">Dashboard</p>
        <a href="{{url('back-customer/dashboard')}}" class="mb-3 @if (Request::segment(2) == 'dashboard') text-yellow-600 @endif capitalize font-medium text-sm hover:text-yellow-600 transition ease-in-out duration-500">
            <i class="fad fa-chart-pie text-xs mr-2"></i>                
            Dashboard
        </a>

        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Master Data</p>
        <a href="{{url('back-customer/transaction')}}" class="mb-3 @if (Request::segment(2) == 'transaction') text-yellow-600 @endif capitalize font-medium text-sm hover:text-yellow-600 transition ease-in-out duration-500">
            <i class="fad fa-bullseye-arrow text-xs mr-2"></i>
            &nbsp;Transaksi
        </a>
        <a href="{{ url('back-customer/history-transaction') }}" class="mb-3 @if (Request::segment(2) == 'history-transaction') text-yellow-600 @endif capitalize font-medium text-sm hover:text-yellow-600 transition ease-in-out duration-500">
            <i class="fad fa-bullseye-arrow text-xs mr-2"></i>
            &nbsp;Riwayat Transaksi
        </a>
        <a href="{{ url('back-customer/review') }}" class="mb-3 @if (Request::segment(2) == 'review') text-yellow-600 @endif capitalize font-medium text-sm hover:text-yellow-600 transition ease-in-out duration-500">
            <i class="fad fa-bullseye-arrow text-xs mr-2"></i>
            &nbsp;Ulasan
        </a>
    </div>
</div>