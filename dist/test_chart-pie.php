
<?php

include('php/connection.php');
include('php/result_survey.php');
include('php/result/sfq1.php');
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
        width: 400px;
        margin: 0 auto;
        /*height: 200px;*/
    }
</style>
</head>
<body>
    <h1>Quelle est l'importance pour toi de socialiser via les réseaux sociaux ?</h1>
    <div class="container">
        <canvas id="myChart" width="400" height="400"></canvas>
        <button onclick="changeDataSet()"></button>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data:
{                    labels: ["Extrêmement important", "Très important", "Important", "Pas très important", "Pas du tout important"],
                    datasets: [{
                        label: 'boys',
                        data: [<?php echo implode(", ", $data_nfq7); ?>],
                        backgroundColor: [
                        'rgba(255, 182, 8, 1)',
                        'rgba(255, 182, 8, .6)',
                        'rgba(255, 182, 8, 3)',
                        ],
                        borderColor: [
                        'rgba(255, 182, 8, 1)',
                        'rgba(255, 182, 8, 1)',
                        'rgba(255, 182, 8, 1)',
                        ],
                        borderWidth: 1
                    }, {
                        label: 'girls',
                        data: [<?php echo implode(", ", $data_nmq7); ?>],
                        backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(255,99,132,1)',
                        'rgba(255,99,132,1)',
                        ],
                        borderWidth: 1
                    }]
                },

                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                            }
                        }]
                    }
                }
            });
        </script>
    </div>
</body>
</html>

