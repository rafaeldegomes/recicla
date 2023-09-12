<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gráfico Gauge com PHP e Google Charts</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['gauge']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            const data = google.visualization.arrayToDataTable([
                ['Label', 'Value'],
                ['Random', 0]
            ]);

            const options = {
                width: 400, height: 120,
                redFrom: 75, redTo: 100,
                yellowFrom: 50, yellowTo: 75,
                minorTicks: 5
            };

            const chart = new google.visualization.Gauge(document.getElementById('gauge_div'));

            // Recuperar dados do servidor PHP
            fetch('data.php').then(response => response.json()).then(json => {
                data.setValue(0, 1, json.value);
                chart.draw(data, options);
            });
        }
    </script>
</head>
<body>
    <div id="gauge_div" style="width: 400px; height: 120px;"></div>
</body>
</html>
