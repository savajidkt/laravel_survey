<script>
  var pieColors = (function () {
    var colors = [],
        base = Highcharts.getOptions().colors[0],
        i;

    for (i = 0; i < 10; i += 1) {
        // Start out with a darkened base color (negative brighten), and end
        // up with a much brighter color
        colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
    }
    return colors;
}());
// Build the chart
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            colors: pieColors,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                distance: -50,
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                }
            }
        }
    },
    series: [{
        name: 'Share',
        data: [
            { name: 'Establishing Rapport', y: 74.03 },
            { name: 'Understanding Others', y: 12.66 },
            { name: 'Embracing Individual Differences', y: 4.96 },
            { name: 'Developing Trust', y: 2.49 },
            { name: 'Internet Explorer', y: 2.31 },
            { name: 'Cultivating Influence', y: 3.398 }
        ]
    }]
});

document.querySelector('.highcharts-credits').style.display = 'none';
document.querySelector('.highcharts-exporting-group').style.display = 'none';
 </script>