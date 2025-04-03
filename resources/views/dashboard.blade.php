<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>

  {{--
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> --}}
</head>

<body>
  @extends('adminlte::page')

  @section('title', 'Dashboard')

  @section('content_header')
  <h1>Dashboard</h1>
  @stop

  @section('content')

  @isset($stats)
    <div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <x-adminlte-info-box title="CPU Traffic" text="{{ $stats->cpu }}" icon="fas fa-lg fa-server" icon-theme="blue" />
    </div>
    <div class="col-12 col-sm-6 col-md-3">
      <x-adminlte-info-box title="Likes" text="{{ $stats->total_likes }}" icon="fas fa-lg fa-thumbs-up"
      icon-theme="red" />
    </div>
    <div class="col-12 col-sm-6 col-md-3">
      <x-adminlte-info-box title="Sales" text="{{ $stats->total_sales }}" icon="fas fa-lg fa-cart-plus"
      icon-theme="green" />
    </div>
    <div class="col-12 col-sm-6 col-md-3">
      <x-adminlte-info-box title="New Members" text="{{ $stats->new_members }}" icon="fas fa-lg fa-users"
      icon-theme="yellow" />
    </div>
    </div>
  @endisset

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title">Monthly Recap Report</h5>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
              <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
              <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
            </button>
            <div class="btn-group">
              <button type="button" class="btn btn-tool dropdown-toggle" data-bs-toggle="dropdown">
                <i class="bi bi-wrench"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" role="menu">
                <a href="#" class="dropdown-item">Action</a>
                <a href="#" class="dropdown-item">Another action</a>
                <a href="#" class="dropdown-item"> Something else here </a>
                <a class="dropdown-divider"></a>
                <a href="#" class="dropdown-item">Separated link</a>
              </div>
            </div>
            <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
              <i class="bi bi-x-lg"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-8">
              <p class="text-center">
                <strong>Sales: 1 Jan, 2024 - 30 Jul, 2024</strong>
              </p>
              <div id="sales-chart"></div>
            </div>
            <div class="col-md-4">
              <p class="text-center"><strong>Goal Completion</strong></p>
              <div class="progress-group">
                Add Products to Cart
                <span class="float-end"><b>160</b>/200</span>
                <div class="progress progress-sm">
                  <div class="progress-bar text-bg-primary" style="width: 80%"></div>
                </div>
              </div>
              <div class="progress-group">
                Complete Purchase
                <span class="float-end"><b>310</b>/400</span>
                <div class="progress progress-sm">
                  <div class="progress-bar text-bg-danger" style="width: 75%"></div>
                </div>
              </div>
              <div class="progress-group">
                <span class="progress-text">Visit Premium Page</span>
                <span class="float-end"><b>480</b>/800</span>
                <div class="progress progress-sm">
                  <div class="progress-bar text-bg-success" style="width: 60%"></div>
                </div>
              </div>
              <div class="progress-group">
                Send Inquiries
                <span class="float-end"><b>250</b>/500</span>
                <div class="progress progress-sm">
                  <div class="progress-bar text-bg-warning" style="width: 50%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-md-3 col-6">
              <div class="text-center border-end">
                <span class="text-success">
                  <i class="bi bi-caret-up-fill"></i> 17%
                </span>
                <h5 class="fw-bold mb-0">${{ $recaps[0]->total_revenue }}</h5>
                <span class="text-uppercase">TOTAL REVENUE</span>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="text-center border-end">
                <span class="text-info"> <i class="bi bi-caret-left-fill"></i> 0% </span>
                <h5 class="fw-bold mb-0">${{ $recaps[0]->total_cost }}</h5>
                <span class="text-uppercase">TOTAL COST</span>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="text-center border-end">
                <span class="text-success">
                  <i class="bi bi-caret-up-fill"></i> 20%
                </span>
                <h5 class="fw-bold mb-0">${{ $recaps[0]->total_profit }}</h5>
                <span class="text-uppercase">TOTAL PROFIT</span>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="text-center">
                <span class="text-danger">
                  <i class="bi bi-caret-down-fill"></i> 18%
                </span>
                <h5 class="fw-bold mb-0">{{ $recaps[0]->goal_completions }}</h5>
                <span class="text-uppercase">GOAL COMPLETIONS</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @isset($orders)
    <div class="card">
    <div class="card-header">
      <h3 class="card-title">Latest Orders</h3>
      <div class="card-tools">
      <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
      </button>
      <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
        <i class="bi bi-x-lg"></i>
      </button>
      </div>
    </div>

    <div class="card-body p-0">
      <div class="table-responsive">
      <table class="table m-0">
        <thead>
        <tr>
          <th>Order ID</th>
          <th>Item</th>
          <th>Status</th>
          <th>Popularity</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($orders as $index => $order)
        <tr>
          <td>
          <a href="pages/examples/invoice.html"
          class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">{{
        $order->id }}</a>
          </td>
          <td>{{ $order->item_name }}</td>
          <td><span @class([
      'badge',
      'bg-success' => $order->status == 'shipped',
      'bg-warning' => $order->status ==
      'pending',
      'bg-info' => $order->status == 'processing',
      'bg-danger' => $order->status ==
      'delivered'
      ])>{{ $order->status }}</span></td>
          <td>
          <div id="table-sparkline-{{ $index }}"></div>
          </td>
        </tr>
    @endforeach
        </tbody>
      </table>
      </div>
    </div>
    <div class="card-footer clearfix">
      <a href="#" class="btn btn-sm btn-primary float-left">Place New Order</a>
      <a href="#" class="btn btn-sm btn-secondary float-right">View All Orders</a>
    </div>
    </div>
  @endisset

  @stop

  @section('css')
  {{-- Add here extra stylesheets --}}
  {{--
  <link rel="stylesheet" href="/css/admin_custom.css"> --}}
  @stop

  @section('js')
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
    integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>
  <script>

    var recaps = @json($recaps);
    console.log(recaps)

    const sales_chart_options = {
      series: [
        {
          name: recaps[0].name,
          data: JSON.parse(recaps[0].data),
        },
        {
          name: recaps[1].name,
          data: JSON.parse(recaps[1].data),
        },
      ],
      chart: {
        height: 180,
        type: 'area',
        toolbar: {
          show: false,
        },
      },
      legend: {
        show: false,
      },
      colors: ['#0d6efd', '#20c997'],
      dataLabels: {
        enabled: false,
      },
      stroke: {
        curve: 'smooth',
      },
      xaxis: {
        type: 'datetime',
        categories: [
          '2024-01-01',
          '2024-02-01',
          '2024-03-01',
          '2024-04-01',
          '2024-05-01',
          '2024-06-01',
          '2024-07-01',
        ],
      },
      tooltip: {
        x: {
          format: 'MMMM yyyy',
        },
        theme: 'dark'
      },
    };

    const sales_chart = new ApexCharts(
      document.querySelector('#sales-chart'),
      sales_chart_options,
    );
    sales_chart.render();

    function createSparklineChart(selector, data) {
      const options = {
        series: [{ data }],
        chart: {
          type: 'line',
          width: 150,
          height: 30,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          width: 2,
        },
        tooltip: {
          enabled: false,
          // fixed: {
          //   enabled: false,
          // },
          // x: {
          //   show: false,
          // },
          // y: {
          //   title: {
          //     formatter: function (seriesName) {
          //       return '';
          //     },
          //   },
          // },
          // marker: {
          //   show: false,
          // },
        },
      };

      const chart = new ApexCharts(document.querySelector(selector), options);
      chart.render();
    }

    var orders = @json($orders);

    orders.forEach((order, index) => {
      const selector = `#table-sparkline-${index}`;
      createSparklineChart(selector, JSON.parse(order.popularity));
    });
  </script>
  @stop
</body>

</html>