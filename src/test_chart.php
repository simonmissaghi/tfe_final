
<?php

include('php/connection.php');
include('php/result_survey.php');
include('php/result/sfq1.php');
include('php/result/sq8all.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="javascript/Chart.js"></script>
    <style>
    h1 {
        text-align: center;
    }
    .container {
        width: 400px;
        margin: 0 auto;
        /*height: 200px;*/
    }
</style>
</head>
<body>
    <h1>Ceux qui pensent que les smartphones leur servent à l'école/ à l'université/ au travail</h1>
    <div class="container">
        <canvas id="myChart" width="400" height="400"></canvas>
        <button onclick="changeDataSet()"></button>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Smartphone", "Tablette", "Desktop",],
                    datasets: [{
                        label: 'boys',
                        data: [<?php echo implode(", ", $data_sq8); ?>],
                        backgroundColor: [
                        'rgba(239, 131, 84, 1)',
                        'rgba(239, 131, 84, .8)',
                        'rgba(239, 131, 84, .4)',
                        ],
                        borderColor: [
                        'rgba(239, 131, 84, 1)',
                        'rgba(239, 131, 84, 1)',
                        'rgba(239, 131, 84, 1)',
                        ],
                        borderWidth: 0
                    }]
                },
            });
        </script>
    </div>
</body>
</html>

