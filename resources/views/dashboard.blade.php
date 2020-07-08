@extends('layouts.default')

@section('title', 'dashboard')
            
@section('script')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dia', 'Quantidade'],

          @foreach ($vendas_quantidade as $v)
          ['{{ $v->dia }}', {{$v->nVendas}} ],
          @endforeach
        ]);

        var options = {
          title: 'Vendas por dia',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Dia', 'Quantidade'],

          @foreach ($vendas_produto as $vp)
          ['{{ $vp->id_produto }}', {{$vp->quantidade}} ],
          @endforeach
        ]);

        var options = {
          title: 'Vendas por Produto',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_2'));

        chart.draw(data, options);
      }
    </script>
  @endsection


@section('content')
    <div class="row">
      <div class="col-md-6" id="curve_chart"  style="width: 900px; height: 500px">
        
      </div>
      <div class="col-md-6" id="curve_chart_2"  style="width: 900px; height: 500px">
        
      </div>
    </div>
@endsection