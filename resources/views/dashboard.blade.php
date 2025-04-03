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