
<html>
  <head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart', 'controls']});

      google.charts.setOnLoadCallback(drawDashboard);

      function drawDashboard() {

        var data = google.visualization.arrayToDataTable([
          ['Data Entrada','Etnia', 'Domicilio', 'Mortalidade', 'Rendimento'],
          <?php 

          include_once('configForm.php');
          $sql = "SELECT * FROM usuarios";
          $buscar = mysqli_query($conexao,$sql);

          while($dados = mysqli_fetch_array($buscar)){
            $data_ent = $dados['data_ent'];
            $etnia = $dados['etnia'];
            $domicilio = $dados['domicilio'];
            $mortalidade = $dados['mortalidade'];
            $rendimento = $dados['rendimento'];

          ?>
          ['<?php echo $data_ent ?>', '<?php echo $etnia ?>', '<?php echo $domicilio ?>', '<?php echo $mortalidade ?>', '<?php echo $rendimento?> '],

        <?php }?>
        ]);

        // Create a dashboard.
        var dashboard = new google.visualization.Dashboard(
            document.getElementById('dashboard_div'));

        var donutRangeSlider = new google.visualization.ControlWrapper({
          'controlType': 'NumberRangeFilter',
          'containerId': 'filter_div',
          'options': {
            'filterColumnLabel': 'Donuts eaten'
          }
        });

        // Create a pie chart, passing some options
        var pieChart = new google.visualization.ChartWrapper({
          'chartType': 'PieChart',
          'containerId': 'chart_div',
          'options': {
            'width': 300,
            'height': 300,
            'pieSliceText': 'value',
            'legend': 'right'
          }
        });

        dashboard.bind(donutRangeSlider, pieChart);

        dashboard.draw(data);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the dashboard-->
    <div id="dashboard_div">
      <!--Divs that will hold each control and chart-->
      <div id="filter_div"></div>
      <div id="chart_div"></div>
    </div>
  </body>
</html>