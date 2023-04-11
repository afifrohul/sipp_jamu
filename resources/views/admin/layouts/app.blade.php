<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <link rel="icon" href="{{ asset('assets/logos/Logo HMIF Compress.png') }}" type="image/x-icon">
  <title>My Dashboard</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css-admin/style.css')}}">
  <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
  @yield('extraCSS')
</head>
<body class="bg-gray-100">
    @include('admin.components.navbar')
    <div class="h-screen flex flex-row flex-wrap">
        @include('admin.components.sidebar')
        <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 
            <div>
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
            </div>
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{asset('assets/js-admin/scripts.js')}}"></script>
    @yield('extraJS')
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable(
                {
                    "columnDefs": [
                        {
                            targets: "_all",
                            className: 'dt-center'
                        }
                    ],
                }
            );
        });
    </script>
</body>
</html>
