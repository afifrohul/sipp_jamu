<div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    <div class="flex flex-col">
        <div class="text-right hidden md:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>

        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">Dashboard</p>
        <a href="{{url('back-dashboard')}}" class="mb-3 @if (Request::segment(1) == 'back-dashboard') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-chart-pie text-xs mr-2"></i>                
            Dashboard
        </a>

        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Master Data</p>
        <a href="{{url('vision')}}" class="mb-3 @if (Request::segment(1) == 'vision') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-bullseye-arrow text-xs mr-2"></i>
            &nbsp;Visi
        </a>
        <a href="{{url('mission')}}" class="mb-3 @if (Request::segment(1) == 'mission') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-bullseye-pointer text-xs mr-2"></i>
            &nbsp;Misi
        </a>
        <a href="{{url('staff')}}" class="mb-3 @if (Request::segment(1) == 'staff') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-users text-xs mr-2"></i>
            &nbsp;Staff
        </a>
        <a href="{{url('division-role')}}" class="mb-3 @if (Request::segment(1) == 'division-role') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user text-xs mr-2"></i>
            &nbsp;Division Role
        </a>
        <a href="{{url('period')}}" class="mb-3 @if (Request::segment(1) == 'period') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-calendar text-xs mr-2"></i>
            &nbsp;Period
        </a>
        <a href="{{url('proker')}}" class="mb-3 @if (Request::segment(1) == 'proker') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-cog text-xs mr-2"></i>
            &nbsp;Proker
        </a>
        <a href="{{url('proker-timeline')}}" class="mb-3 @if (Request::segment(1) == 'proker-timeline') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-clock text-xs mr-2"></i>
            Proker Timeline
        </a>
        <a href="{{url('post')}}" class="mb-3 @if (Request::segment(1) == 'post') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-newspaper text-xs mr-2"></i>
            Post
        </a>
        <a href="{{url('portfolio')}}" class="mb-3 @if (Request::segment(1) == 'portfolio') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-scroll text-xs mr-2"></i>
            Portfolio
        </a>
        <a href="{{url('tag')}}" class="mb-3 @if (Request::segment(1) == 'tag') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-hashtag text-xs mr-2"></i>
            Tag
        </a>
        <a href="{{url('sosmed')}}" class="mb-3 @if (Request::segment(1) == 'sosmed') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-comments text-xs mr-2"></i>
            Sosial Media
        </a>

        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Galeri</p>
        <a href="{{url('proker-gallery')}}" class="mb-3 @if (Request::segment(1) == 'proker-gallery') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-boxes text-xs mr-2"></i>
            Galeri Proker
        </a>
        <a href="{{url('post-gallery')}}" class="mb-3 @if (Request::segment(1) == 'post-gallery') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-boxes text-xs mr-2"></i>
            Galeri Post
        </a>
        <a href="{{url('portfolio-gallery')}}" class="mb-3 @if (Request::segment(1) == 'portfolio-gallery') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-boxes text-xs mr-2"></i>
            Galeri Portfolio
        </a>

        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Dokumentasi</p>
        <a href="{{url('documentation-api')}}" class="mb-3 @if (Request::segment(1) == 'documentation-api') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-atom text-xs mr-2"></i>
            Dokumentasi API
        </a>
    </div>
</div>