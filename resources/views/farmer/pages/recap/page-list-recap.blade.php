@extends('farmer.layouts.app')

@section('content')
<div id="chartStock" class="bg-white">
  {{-- <h3 class="text-center font-semibold text-xl pt-2">Stok Produk Seller</h3> --}}
</div>

<div id="chartIncome" class="bg-white mt-4">
  {{-- <h3 class="text-center font-semibold text-xl pt-2">Pendapatan Seller per Bulan</h3> --}}
</div>

<div class="grid grid-cols-2 gap-4 " >
  <div id="chartProduct" class="bg-white mt-4">
    {{-- <h3 class="text-center font-semibold text-xl pt-2">Rekapan Penjualan Produk Seller</h3> --}}
  </div>
  <div id="chartProductThisMonth" class="bg-white mt-4">
    {{-- <h3 class="text-center font-semibold text-xl pt-2">Rekapan Penjualan Produk Seller Bulan Ini</h3> --}}
  </div>

</div>

@endsection

@section('extraJS')
<script>

var getProductName = @php echo json_encode($getProductName) @endphp;
var getProductStock = {{ $getProductStock }};


var optionsStock = {
    series: [{
      name: "Stok",
      data: getProductStock
  }],
    colors: ['#00E396'],
    chart: {
      fontFamily:'Ubuntu',
      type: 'bar',
      height: 200
  },
  plotOptions: {
    bar: {
      borderRadius: 4,
      horizontal: true,
    }
  },
  dataLabels: {
    enabled: false
  },
  title: {
    text : "Stok Produk Seller",
    align: 'center'
  },
  xaxis: {
    categories: getProductName
  }
  };

  var chartStock = new ApexCharts(document.querySelector("#chartStock"), optionsStock);
  chartStock.render();

  var optionsIncome = {
    series: [{
      name: "Pendapatan (Rp)",
      data: [{{ $getTransactionJan }}, {{ $getTransactionFeb }}, {{ $getTransactionMar }}, {{ $getTransactionApr }}, {{ $getTransactionMei }}, {{ $getTransactionJun }}, {{ $getTransactionJul }}, {{ $getTransactionAug }}, {{ $getTransactionSep }}, {{ $getTransactionOkt }}, {{ $getTransactionNov }}, {{ $getTransactionDes }}]
    }],
    colors: ['#00E396'],
    chart: {
    fontFamily:'Ubuntu',
    height: 250,
    type: 'area',
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'smooth'
  },
  grid: {
    row: {
      colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
      opacity: 0.5
    },
  },
  markers: {
    size: 4
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'],
    title: {
      text: "Bulan"
    }
  },
  title: {
    text : "Pendapatan Seller per Bulan",
    align: 'center'
  },
  yaxis: {
    title: {
      text: "Pendapatan (Rp)"
    }
  }
  };

  var chartIncome = new ApexCharts(document.querySelector("#chartIncome"), optionsIncome);
  chartIncome.render();

  var totalQtyByProduct = @php echo json_encode($totalQtyByProduct) @endphp;

  var optionsProduct = {
    series: totalQtyByProduct,
    chart: {
    fontFamily:'Ubuntu',
    // width: 380,
    type: 'pie',
  },
  title: {
    text : "Rekapan Penjualan Produk Seller",
    align: 'center'
  },
  labels: getProductName,
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        // width: 200
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var chartProduct = new ApexCharts(document.querySelector("#chartProduct"), optionsProduct);
  chartProduct.render();
  
  var totalQtyByProductThisMonth = @php echo json_encode($totalQtyByProductThisMonth) @endphp;

  var optionsProductThisMonth = {
    series: totalQtyByProductThisMonth,
    chart: {
    fontFamily:'Ubuntu',
    // width: 380,
    type: 'pie',
  },
  title: {
    text : "Rekapan Penjualan Produk Seller Bulan Ini",
    align: 'center'
  },
  labels: getProductName,
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        // width: 200
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var chartProductThisMonth = new ApexCharts(document.querySelector("#chartProductThisMonth"), optionsProductThisMonth);
  chartProductThisMonth.render();

</script>
@endsection