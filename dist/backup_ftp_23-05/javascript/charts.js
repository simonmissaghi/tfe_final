// function loadChartsOnScroll() {
//     var charts = document.querySelectorAll('.chartsjs');
//     var windowHeight = window.innerHeight;

//     for (var n = 0; n < charts.length; n++) {
//         var topChart = charts[n].offsetTop - windowHeight;
//         console.log(topChart);
//     }
//     var oTop = $('#counter').offset().top - window.innerHeight;
//     var chartHidden = true;
//     $(window).scroll(function(){
//         var pTop = $('body').scrollTop();
//         if ((pTop > oTop) && (chartHidden)) {
//             chartHidden = false;
//             start_count();
//         }
//     });
// };

// loadChartsOnScroll();





$.getJSON('./results.json', function(data) {

    var sq8all = document.getElementById('chartsq8all');
    var nq7all = document.getElementById('chartnq7all');
    var sq4all = document.getElementById('chartsq4all');
    var aq2all = document.getElementById('chartaq2all');
    var aq2f = document.getElementById('chartaq2f');
    var aq2m = document.getElementById('chartaq2m');
    var sq7all = document.getElementById('chartsq7all');
    var sq2all = document.getElementById('chartsq2all');

    Chart.defaults.global.defaultFontFamily = "Open Sans";
   // Chart.defaults.global.defaultFontColor = "rgba(132, 116, 116, .51)";

   function labels3(label1, label2, label3) {

    var labels = [label1, label2, label3];

    return labels;
}

function labels5(label1, label2, label3, label4, label5) {

    var labels = [label1, label2, label3, label4, label5];

    return labels;
}


//Bar charts

function barDatasetsCharts(data1, data2, data3) {

    var dataset =
    [{
        label: 'Tous',
        data: data1,
        backgroundColor: [
        'rgba(255, 169, 106, 1)',
        'rgba(255, 169, 106, 1)',
        'rgba(255, 169, 106, 1)',
        'rgba(255, 169, 106, 1)',
        'rgba(255, 169, 106, 1)',
        ],
        borderWidth: 0

    },
    {
        label: 'Garçons',
        data: data2,
        backgroundColor: [
        'rgba(41, 128, 185, 1)',
        'rgba(41, 128, 185, 1)',
        'rgba(41, 128, 185, 1)',
        'rgba(41, 128, 185, 1)',
        'rgba(41, 128, 185, 1)',
        ],
        borderWidth: 0

    },
    {
        label: 'Filles',
        data: data3,
        backgroundColor: [
        'rgba(255, 187, 187, 1)',
        'rgba(255, 187, 187, 1)',
        'rgba(255, 187, 187, 1)',
        'rgba(255, 187, 187, 1)',
        'rgba(255, 187, 187, 1)',
        ],
        borderWidth: 0

    }]

    return dataset;
}

function barOptionsChart() {
    var options = {
        scales: {
            yAxes: [{
                gridLines: {
                    display:false,
                    drawBorder: false,
                },
                ticks: {
                    beginAtZero:true,
                    fontColor: 'rgba(132, 116, 116, .51)',
                    fontSize: 12,
                },
            }],
            xAxes: [{
                gridLines: {
                    display:false,
                    drawBorder: false,
                }
            }]
        },
        legend: {
            padding: 20
        }
    }

    return options;
}

function pieOptionsChart(legend) {
    var options = {
        maintainAspectRatio: true,
        cutoutPercentage: 50,
        legend: {
            display: legend,
        }
    }

    return options;
}

//Pie charts

function pieDatasetsCharts(data1){
    var dataset = {
        labels: ['tout à fait probable', 'Très probable', 'probable', 'pas très probable', 'pas du tout probable'],
        datasets: [
        {
            label: "Tous",
            data: data1,
            backgroundColor : [
            "rgba(251, 77, 61, 1)",
            "rgba(251, 77, 61, .81)",
            "rgba(251, 77, 61, .61)",
            "rgba(251, 77, 61, .41)",
            "rgba(251, 77, 61, .21)",
            ],
            borderColor: [
            "rgba(255, 255, 255, 1)",
            "rgba(255, 255, 255, 1)",
            "rgba(255, 255, 255, 1)",
            "rgba(255, 255, 255, 1)",
            "rgba(255, 255, 255, 1)",
            ],
            borderWidth : [1,1, 1, 1, 1]
        }
        ]

    }

    return dataset;

};

var myLineChart = new Chart(sq8all, {
    type: 'bar',
    data: {
        labels: labels3('Smartphone', "Tablette", "Desktop"),
        datasets: barDatasetsCharts(data['sq8all'], data['sq8m'], data['sq8f'])
    },
    options: barOptionsChart()
});

var myLineChart = new Chart(nq7all, {
    type: 'bar',
    data: {
        labels: labels5('Extrême', "Forte", "Relative", "Sans plus", "Aucune"),
        datasets: barDatasetsCharts(data['nq7all'], data['nq7m'], data['nq7f'])
    },
    options: barOptionsChart()
});

var myLineChart = new Chart(sq4all, {
    type: 'bar',
    data: {
        labels: labels5('Extrême', "Forte", "Relative", "Sans plus", "Aucune"),
        datasets: barDatasetsCharts(data['sq4all'], data['sq4m'], data['sq4f'])
    },
    options: barOptionsChart()
});

var myLineChart = new Chart(aq2all, {
    type: 'bar',
    data: {
        labels: labels5('Extrême', "Forte", "Relative", "Sans plus", "Aucune"),
        datasets: barDatasetsCharts(data['aq2all'], data['aq2m'], data['aq2f'])
    },
    options: barOptionsChart()
});


var myPieChart = new Chart(sq7all, {
    type: 'bar',
    data: {
        labels: labels5('Extrême', "Forte", "Relative", "Sans plus", "Aucune"),
        datasets: barDatasetsCharts(data['sq7all'], data['sq7m'], data['sq7f'])
    },
    options: barOptionsChart()
});

var myPieChart = new Chart(sq2all, {
    type: 'bar',
    data: {
        labels: labels5('Extrême', "Forte", "Relative", "Sans plus", "Aucune"),
        datasets: barDatasetsCharts(data['sq2all'], data['sq2m'], data['sq2f'])
    },
    options: barOptionsChart()
});


});
