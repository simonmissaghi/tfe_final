var result;
$.ajax({
    url: './results.json',
    dataType: 'json',
    async: true,
    success: function(data) {
        result = data;
    }
});



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



function chartsIntro(){


var myLineChart = new Chart(sq8all, {
    type: 'bar',
    data: {
        labels: labels3('Smartphone', "Tablette", "Desktop"),
        datasets: barDatasetsCharts(result['sq8all'], result['sq8m'], result['sq8f'])
    },
    options: barOptionsChart()
});

var myLineChart = new Chart(nq7all, {
    type: 'bar',
    data: {
        labels: labels5('Extrême', "Forte", "Relative", "Sans plus", "Aucune"),
        datasets: barDatasetsCharts(result['nq7all'], result['nq7m'], result['nq7f'])
    },
    options: barOptionsChart()
});

var myLineChart = new Chart(sq4all, {
    type: 'bar',
    data: {
        labels: labels5('Extrême', "Forte", "Relative", "Sans plus", "Aucune"),
        datasets: barDatasetsCharts(result['sq4all'], result['sq4m'], result['sq4f'])
    },
    options: barOptionsChart()
});

var myLineChart = new Chart(aq2all, {
    type: 'bar',
    data: {
        labels: labels5('Extrême', "Forte", "Relative", "Sans plus", "Aucune"),
        datasets: barDatasetsCharts(result['aq2all'], result['aq2m'], result['aq2f'])
    },
    options: barOptionsChart()
});


var myPieChart = new Chart(sq7all, {
    type: 'bar',
    data: {
        labels: labels5('Extrême', "Forte", "Relative", "Sans plus", "Aucune"),
        datasets: barDatasetsCharts(result['sq7all'], result['sq7m'], result['sq7f'])
    },
    options: barOptionsChart()
});

var myPieChart = new Chart(sq2all, {
    type: 'bar',
    data: {
        labels: labels5('Extrême', "Forte", "Relative", "Sans plus", "Aucune"),
        datasets: barDatasetsCharts(result['sq2all'], result['sq2m'], result['sq2f'])
    },
    options: barOptionsChart()
});

}



if(document.getElementById('chartsq8all')) { chartsIntro(); }
