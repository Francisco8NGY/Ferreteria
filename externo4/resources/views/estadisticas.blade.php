@extends('layoutAdmin')


@section('content')

<h1>Grafico que muestra las ventas de los ultimos 7 dias.</h1>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          @foreach ($pastel as $pastels)
            ['{{ $pastels->fecha }}', {{ $pastels->total }}],
            @endforeach
        ]);

        var options = {
          title: 'Ventas por dia',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>
@endsection
