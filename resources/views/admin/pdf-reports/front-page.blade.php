<!DOCTYPE html>
<html>

<head>

  @include('admin.pdf-reports.chart-css')
</head>

<body style="margin: 0; background: #ffffff">

  <!-- page 1 start -->
  @include('admin.pdf-reports.first-page')

  <!-- page 1 End -->

  <!-- page 2 Start -->
  @include('admin.pdf-reports.two-page')
  <!-- page 2 End -->

  <!-- page 3 Start -->
  @include('admin.pdf-reports.three-page')

  <!-- page 3 End -->

  <!-- page 4 Start -->
  @include('admin.pdf-reports.four-page')
  <!-- page 4 End -->

  <!-- page 5 Start -->
  @include('admin.pdf-reports.five-page')
  <!-- page 5 End -->

  <!-- page 6 Start -->
  @include('admin.pdf-reports.six-page')
  <!-- page 6 End -->

  <!-- page 7 Start -->
  @include('admin.pdf-reports.seven-page')
  <!-- page 7 End -->

  <!-- page 8 Start -->
  @include('admin.pdf-reports.eight-page')
  <!-- page 8 End -->

  <!-- page 9 Start -->
  @include('admin.pdf-reports.nine-page')
  <!-- page 9 End -->


  <!-- page 10 Start -->
  @include('admin.pdf-reports.ten-page')
  <!-- page 10 End -->

  <!-- page 11 Start -->
  @include('admin.pdf-reports.eleven-page')
  <!-- page 11 End -->

  <!-- page 12 Start -->
  @include('admin.pdf-reports.twelve-page')
  <!-- page 12 End -->

  <!-- page 13 Start -->
  @include('admin.pdf-reports.thirteen-page')
  <!-- page 13 End -->

  <!-- page 14 Start -->
  @include('admin.pdf-reports.fourteen-page')
  <!-- page 14 End -->

  <!-- page 15 Start -->
  @include('admin.pdf-reports.fifteen-page')
  <!-- page 15 End -->

  <!-- page 16 Start -->
  @include('admin.pdf-reports.sixteen-page')
  <!-- page 16 End -->


  <script>

var data = [// w  w w  . j  a  v  a  2s . c  om
    {
        value:'{{$establishing_report_per}}',
        color:"#FFCC01",
        highlight: "#FFCC01",
        label: "Establishing Rapport"
    },
    {
        value: '{{$understanding_others_per}}',
        color: "#7FB936",
        highlight: "#7FB936",
        label: "Understanding Others"
    },
    {
        value: '{{$embracing_individual_differences_per}}',
        color: "#A75FD3",
        highlight: "#A75FD3",
        label: "Embracing Individual Differences"
    },
    {
        value: '{{$developing_trust_per}}',
        color: "#2D63ED",
        highlight: "#2D63ED",
        label: "Developing Trust"
    },
    {
        value: '{{$cultivating_influence_per}}',
        color: "#FF8E3A",
        highlight: "#FF8E3A",
        label: "Cultivating Influence"
    }
];

ChartOptions= {
            scaleLabel:"<%=value+''%>",
            scaleShowLabels:false,
            scaleShowLine:true,
            scaleLineStyle:"dotted",
            scaleLineWidth:2,
            scaleLineColor:"rgba(255,255,255,0.6)",
            scaleOverlay :false,
            scaleOverride :false,
            backgroundColor: "rgba(179,181,198,0.2)",
           

            };
var ctx = document.getElementById("myChart").getContext("2d");
var myNewChart = new Chart(ctx).PolarArea(data,ChartOptions);

// var pieColors = (function () {
//     var colors = [],
//         base = Highcharts.getOptions().colors[0],
//         i;

//     for (i = 0; i < 10; i += 1) {
//         // Start out with a darkened base color (negative brighten), and end
//         // up with a much brighter color
//         colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
//     }
//     return colors;
// }());
// // Build the chart
// Highcharts.chart('container', {
//     chart: {
//         plotBackgroundColor: null,
//         plotBorderWidth: null,
//         plotShadow: false,
//         type: 'pie'
//     },
//     title: {
//         text: ''
//     },
//     tooltip: {
//         pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
//     },
//     accessibility: {
//         point: {
//             valueSuffix: '%'
//         }
//     },
//     plotOptions: {
//         pie: {
//             allowPointSelect: true,
//             cursor: 'pointer',
//             colors: pieColors,
//             dataLabels: {
//                 enabled: true,
//                 format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
//                 distance: -50,
//                 filter: {
//                     property: 'percentage',
//                     operator: '>',
//                     value: 4
//                 }
//             }
//         }
//     },
//     series: [{
//         name: 'Share',
//         data: [
//             { name: 'Establishing Rapport', y: 74.03 },
//             { name: 'Understanding Others', y: 12.66 },
//             { name: 'Embracing Individual Differences', y: 4.96 },
//             { name: 'Developing Trust', y: 2.49 },
//             { name: 'Internet Explorer', y: 2.31 },
//             { name: 'Cultivating Influence', y: 3.398 }
//         ]
//     }]
// });

// document.querySelector('.highcharts-credits').style.display = 'none';
// document.querySelector('.highcharts-exporting-group').style.display = 'none';

</script>
</body>


</html>