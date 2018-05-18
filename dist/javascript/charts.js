$.getJSON('./results.json', function(data) {

    var sq8all = document.getElementById('chartsq8all');
    var nq7all = document.getElementById('chartnq7all');
    var sq4all = document.getElementById('chartsq4all');
    var aq2all = document.getElementById('chartaq2all');
    var sq7all = document.getElementById('chartsq7all');
    var sq2all = document.getElementById('chartsq2all');

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
            'rgba(255, 109, 36, .9)',
            'rgba(255, 109, 36, .9)',
            'rgba(255, 109, 36, .9)',
            'rgba(255, 109, 36, .9)',
            'rgba(255, 109, 36, .9)',
            ],
            borderWidth: 0

        },
        {
            label: 'Garçons',
            data: data2,
            backgroundColor: [
            'rgba(97, 192, 191, .9)',
            'rgba(97, 192, 191, .9)',
            'rgba(97, 192, 191, .9)',
            'rgba(97, 192, 191, .9)',
            'rgba(97, 192, 191, .9)',
            ],
            borderWidth: 0

        },
        {
            label: 'Filles',
            data: data3,
            backgroundColor: [
            'rgba(255, 182, 185, .9)',
            'rgba(255, 182, 185, .9)',
            'rgba(255, 182, 185, .9)',
            'rgba(255, 182, 185, .9)',
            'rgba(255, 182, 185, .9)',
            ],
            borderWidth: 0

        }]

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

    return options;
}


//Pie charts

function pieDataCharts(){
    var dataset = [{

    }]
}

var myLineChart = new Chart(sq8all, {
    type: 'bar',
    data: {
        labels: labels3('Smartphone', "Tablette", "Desktop"),
        datasets: barDatasetsCharts(data['sq8all'], data['sq8m'], data['sq8f'])
    },
    options: optionsChart()
});

var myLineChart = new Chart(nq7all, {
    type: 'bar',
    data: {
        labels: labels5('Extrême', "Forte", "Relative", "Sans plus", "Aucune"),
        datasets: barDatasetsCharts(data['nq7all'], data['nq7m'], data['nq7f'])
    },
    options: optionsChart()
});

var myLineChart = new Chart(sq4all, {
    type: 'bar',
    data: {
        labels: labels5('Extrême', "Forte", "Relative", "Sans plus", "Aucune"),
        datasets: barDatasetsCharts(data['sq4all'], data['sq4m'], data['sq4f'])
    },
    options: optionsChart()
});

var myPieChart = new Chart(aq2all, {
    type: 'bar',
    data: {
        labels: labels5('Extrême', "Forte", "Relative", "Sans plus", "Aucune"),
        datasets: barDatasetsCharts(data['aq2all'], data['aq2m'], data['aq2f'])
    },
    options: optionsChart()
});

var myPieChart = new Chart(sq7all, {
    type: 'bar',
    data: {
        labels: labels5('Extrême', "Forte", "Relative", "Sans plus", "Aucune"),
        datasets: barDatasetsCharts(data['sq7all'], data['sq7m'], data['sq7f'])
    },
    options: optionsChart()
});

var myPieChart = new Chart(sq2all, {
    type: 'bar',
    data: {
        labels: labels5('Extrême', "Forte", "Relative", "Sans plus", "Aucune"),
        datasets: barDatasetsCharts(data['sq2all'], data['sq2m'], data['sq2f'])
    },
    options: optionsChart()
});

$("#chartjs-legend").html(myPieChart.generateLegend());
$("#chartjs-legend").on('click', "li", function() {
  myPieChart.data.datasets[0].data[$(this).index()] += 50;
  myPieChart.update();
  console.log('legend: ' + data.datasets[0].data[$(this).index()]);
});


});
