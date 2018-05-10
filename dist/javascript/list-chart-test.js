
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Smartphone", "Tablette", "Desktop"],
            datasets: [{
                label: 'boys',
                data: [<?php echo implode(", ", $data_sq8All); ?>],
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
