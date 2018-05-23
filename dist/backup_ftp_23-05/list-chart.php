

    var barChartData = {
    labels : ["Tout à fait probable", "Très probable", "Probable", "Pas très probable", "Pas du tout probable"],
    datasets : [
        {
            fillColor : "rgba(220,220,220,0.5)",
            strokeColor : "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
        },
        {
            fillColor : "rgba(151,187,205,0.5)",
            strokeColor : "rgba(151,187,205,0.8)",
            highlightFill : "rgba(151,187,205,0.75)",
            highlightStroke : "rgba(151,187,205,1)",
            data : [<?php echo implode(", ", $data_sq8all); ?>]
        }
    ]

}
//     var barChartData2 = {
//     labels : ["January","February","March","April","May","June","July"],
//     datasets : [
//         {
//             fillColor : "rgba(220,220,220,0.5)",
//             strokeColor : "rgba(220,220,220,0.8)",
//             highlightFill: "rgba(220,220,220,0.75)",
//             highlightStroke: "rgba(220,220,220,1)",
//             data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
//         },
//         {
//             fillColor : "rgba(151,187,205,0.5)",
//             strokeColor : "rgba(151,187,205,0.8)",
//             highlightFill : "rgba(151,187,205,0.75)",
//             highlightStroke : "rgba(151,187,205,1)",
//             data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
//         }
//     ]

// }
