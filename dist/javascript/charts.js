$.getJSON('./results.json', function(data) {

    var sq8all = document.getElementById('chartSq8all');
    var nq7all = document.getElementById('chartNq7all');
    var sq4all = document.getElementById('chartSq4all');


    function datassets(data1, data2, data3) {


        var dataset = {
            labels: ["Smartphones", "Tablettes", "PC", "PC", "PC"],
            datasets: [{
                label: 'Toute la génération',
                data: data1,
                backgroundColor: [
                'rgba(255, 182, 8, .51)',
                'rgba(255, 182, 8, .51)',
                'rgba(255, 182, 8, .51)',
                ],
                borderColor: [
                'rgba(168, 87, 81, .51)',
                'rgba(168, 87, 81, .51)',
                'rgba(168, 87, 81, .51)',
                ],
                borderWidth: 0

            },
            {
                label: 'Filles',
                data: data2,
                backgroundColor: [
                'rgba(221, 69, 148, .51)',
                'rgba(221, 69, 148, .51)',
                'rgba(221, 69, 148, .51)',
                ],
                borderWidth: 0

            },
            {
                label: 'Garçons',
                data: data3,
                backgroundColor: [
                'rgba(132, 185, 239, .6)',
                'rgba(132, 185, 239, .6)',
                'rgba(132, 185, 239, .6)',
                ],
                borderWidth: 0

            }]
        }
        return dataset;
    }

    function optionsChart() {
        var options = {
            scales: {
                yAxes: [{
                    gridLines: {
                        display:false
                    },
                    ticks: {
                        beginAtZero:true,
                        max: 100
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display:false
                    }
                }]
            }
        }
    }

    var myLineChart = new Chart(sq8all, {
        type: 'bar',
        data: datassets(data['sq1all'], data['sq1m'], data['sq1f']),
        options: optionsChart(),
    });


    var myLineChart = new Chart(nq7all, {
        type: 'bar',
        data: {
            labels: ["Vraiment important", "Pas du tout important"],
            datasets: [{
                label: 'Toutes la génération',
                data: [],
                backgroundColor: [
                'rgba(255, 182, 8, .51)',
                'rgba(255, 182, 8, .51)',
                'rgba(255, 182, 8, .51)',
                ],
                borderColor: [
                'rgba(168, 87, 81, .51)',
                'rgba(168, 87, 81, .51)',
                'rgba(168, 87, 81, .51)',
                ],
                borderWidth: 0

            },
            {
                label: 'Filles',
                data: [],
                backgroundColor: [
                'rgba(221, 69, 148, .51)',
                'rgba(221, 69, 148, .51)',
                'rgba(221, 69, 148, .51)',
                ],
                borderWidth: 0

            },
            {
                label: 'Garçons',
                data: [],
                backgroundColor: [
                'rgba(132, 185, 239, .6)',
                'rgba(132, 185, 239, .6)',
                'rgba(132, 185, 239, .6)',
                ],
                borderWidth: 0

            }]
        },
        options: {
            scales: {
                yAxes: [{
                    gridLines: {
                        display:false
                    },
                    ticks: {
                        beginAtZero:true,
                        max: 100
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display:false
                    }
                }]
            }
        }
    });

    var myLineChart = new Chart(sq4all, {
        type: 'line',
        data: {
            labels: ["Bien sûr", "Probable", "Impossible"],
            datasets: [{
                label: 'Toute la génération',
                data: [],
                backgroundColor: [
                'rgba(255, 182, 8, .51)',
                'rgba(255, 182, 8, .51)',
                'rgba(255, 182, 8, .51)',
                ],
                borderColor: [
                'rgba(168, 87, 81, .51)',
                'rgba(168, 87, 81, .51)',
                'rgba(168, 87, 81, .51)',
                ],
                borderWidth: 0,
                fill: false

            },
            {
                label: 'Filles',
                data: [],
                backgroundColor: [
                'rgba(221, 69, 148, .51)',
                'rgba(221, 69, 148, .51)',
                'rgba(221, 69, 148, .51)',
                ],
                borderWidth: 0,
                fill: false

            },
            {
                label: 'Garçons',
                data: [],
                backgroundColor: [
                'rgba(132, 185, 239, .6)',
                'rgba(132, 185, 239, .6)',
                'rgba(132, 185, 239, .6)',
                ],
                borderWidth: 0,
                fill: false

            }]
        },
        options: {
            scales: {
                yAxes: [{
                    gridLines: {
                        display:false
                    },
                    ticks: {
                        beginAtZero:true,
                        max: 100
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display:false
                    }
                }]
            }
        }
    });
});
