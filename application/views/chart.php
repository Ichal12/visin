  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);



      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jenis Lahan', 'Lumbir', 'Wangon', 'Jatilawang', 'Rawalo', 'Kebasen'],
          ['Kebun',  1859,     2481,        277,             911,           1041],
          ['Perkebunan', 262,     282,        177,             773,          565],
          ['Hutan Rakyat',3132,      218,        1381,             50,           0],
          ['Total Luas Lahan', 5258,      3434,        2291,            1749,          2383]
        ]);

        var options = {
          title : 'perbandingan jumlah Lahan Kebun , Perkebunan dan Hutan Rakyat dengan total luas Lahan',
          seriesType: 'bars'
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart'));
        chart.draw(data,google.charts.Bar.convertOptions(options));
      }



      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart1);

      function drawChart1() {

        var data = google.visualization.arrayToDataTable([
           ['Nama Kota/kab','Total Luas Lahan'],
          ['Lumbir', 5258],
          ['Wangon', 3434],
          ['Jatilawang',2291],
          ['Rawalo', 1749],
          ['Kebasen',2383]
        ]);

        var options = {
          title: 'Luas Lahan Pertanian di Kabupaten Banyumas (Ha) pada Tahun 2013 Per Kecamatan'
        };

        var chart = new google.charts.Bar(document.getElementById('chart1'));

        chart.draw(data,google.charts.Bar.convertOptions(options));
      }





     google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {

        var data = google.visualization.arrayToDataTable([
          ['Nama Kota/kab', 'Lahan Yang di Gunakan', 'Total Luas Lahan'],
          ['Lumbir',    5253, 5258],
          ['Wangon',      2987, 3434],
          ['Jatilawang',  1835,2291],
          ['Rawalo',1734, 1749],
          ['Kebasen',  1606,2383]
        ]);

        var options = {
          title: 'Luas Lahan Yang di Gunakan Masyarakat (Ha) Dengan Total Luas Lahan di Kabupaten Banyumas Per Kecamatan'
        };

        var chart = new google.charts.Bar(document.getElementById('chart2'));

        chart.draw(data,google.charts.Bar.convertOptions(options));
      }



      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart3);

      function drawChart3() {

        var data = google.visualization.arrayToDataTable([
          ['Nama Kota/kab', 'Luas Kebun', 'Total Luas Lahan'],
          ['Lumbir',    1859, 5258],
          ['Wangon',      2481, 3434],
          ['Jatilawang',  277,2291],
          ['Rawalo',911, 1749],
          ['Kebasen',  1041,2383]
        ]);

        var options = {
          title: 'Luas Yang di jadian sebagai Kebun (Ha) Kabupaten Banyumas 2013'
        };

        var chart = new google.charts.Bar(document.getElementById('chart3'));

        chart.draw(data,google.charts.Bar.convertOptions(options));
      }



      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart4);

      function drawChart4() {

        var data = google.visualization.arrayToDataTable([
           ['Nama Kota/kab', 'Luas Lahan yang di Tanami', 'Total Luas Lahan'],
          ['Luas Lahan',   13415, 15115]
        ]);

        var options = {
          title: 'Perbandingan Luas Lahan Yang di Gunakan Masyarakat (Ha) Dengan Total Luas Lahan di Kabupaten Banyumas '
        };
        

        var chart = new google.charts.Bar(document.getElementById('chart4'));

        chart.draw(data,google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="chart" style="width: 900px; height: 500px"></div>
    <div id="chart1" style="width: 800px; height: 300px"></div>
    <div id="chart2" style="width: 800px; height: 300px"></div>
    <div id="chart3" style="width: 800px; height: 300px"></div>
    <div id="chart4" style="width: 800px; height: 300px"></div>
  </body>
</html>