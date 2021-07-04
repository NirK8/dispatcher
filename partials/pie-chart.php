<?php
// Arguments for the pie-chart.php template:
// pie_data:array - data

$pie_data = $args;
$items_json = json_encode($pie_data);
?>

<script src="https://www.gstatic.com/charts/loader.js"></script>
  <script>
    const itemsArray = <?php echo $items_json ?>;

    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      // Define the chart to be drawn.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Source');
      data.addColumn('number', 'Percentage');
      data.addRows(itemsArray);

      // Instantiate and draw the chart.
      var chart = new google.visualization.PieChart(document.getElementById('myPieChart'));
      const options = {
        'pieHole': 0.87,
        "pieSliceText": 'none',
        'legend': {
          'position': 'bottom',
          'alignment': 'start',
          'maxLines': 3
        }

      }
      chart.draw(data, options);
    }
  </script>
<div class="pie" id="myPieChart">
</div>