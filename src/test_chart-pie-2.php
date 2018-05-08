
<?php

include('php/connection.php');
include('php/result_survey.php');
include('php/result/sfq1.php');
include('php/result/sfq2.php');
include('php/result/smq2.php');
include('php/result/sq8all.php');
include('php/result/nfq7.php');
include('php/result/nmq7.php');

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
        width: 1200px;
        margin: 0 auto;
        /*height: 200px;*/
    }
</style>
</head>
<body>
    <h1>Quelle est l'importance pour toi de socialiser via les réseaux sociaux ?</h1>
    <div class="container">
        <canvas id="myChart" width="1200" height="300"></canvas>
        <button onclick="changeDataSet()"></button>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data:
                {                    labels: ["Extrêmement important", "Très important", "Important", "Pas très important", "Pas du tout important"],
                datasets: [{
                    label: 'girls',
                    data: [<?php echo implode(", ", $data_sfq2); ?>],
                    backgroundColor: [
                    'rgba(201, 147, 215, .8)',
                    'rgba(201, 147, 215, .8)',
                    'rgba(201, 147, 215, .8)',
                    ],
                    borderColor: [
                    'rgba(201, 147, 215, .8)',
                    'rgba(201, 147, 215, .8)',
                    'rgba(201, 147, 215, .8)',
                    ],
                    borderWidth: 1
                }, {
                    label: 'boys',
                    data: [<?php echo implode(", ", $data_smq2); ?>],
                    backgroundColor: [
                    'rgba(54, 89, 187, .8)',
                    'rgba(54, 89, 187, .8)',
                    'rgba(54, 89, 187, .8)',
                    ],
                    borderColor: [
                    'rgba(54, 89, 187, .8)',
                    'rgba(54, 89, 187, .8)',
                    'rgba(54, 89, 187, .8)',
                    ],
                    borderWidth: 1
                }]
            },

            options: {
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                        },
                        ticks: {
                            max: 100,
                            beginAtZero: true,
                            responsive: true,
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            display: false,
                        }
                    }]
                }
            }
        });
    </script>
</div>
</body>
</html>

