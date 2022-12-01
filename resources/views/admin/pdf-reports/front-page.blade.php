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
        light_color:"#ffff66",
        highlight: "#FFCC01",
        label: "Establishing Rapport"
    },
    {
        value: '{{$understanding_others_per}}',
        color: "#7FB936",
        light_color: "#66ff33",
        highlight: "#7FB936",
        label: "Understanding Others"
    },
    {
        value: '{{$embracing_individual_differences_per}}',
        color: "#A75FD3",
        light_color: "#cc99ff",
        highlight: "#A75FD3",
        label: "Embracing Individual Differences"
    },
    {
        value: '{{$developing_trust_per}}',
        color: "#2D63ED",
        light_color: "#66ccff",
        highlight: "#2D63ED",
        label: "Developing Trust"
    },
    {
        value: '{{$cultivating_influence_per}}',
        color:"#FF8E3A",
        light_color:"#ffcc99",
        highlight: "#FF8E3A",
        label: "Cultivating Influence",
    }
    
];

ChartOptions= {
            scaleLabel:"<%=value+''%>",
            scaleShowLabels:false,
            scaleShowLine:true,
            scaleLineStyle:"dahsed",
            scaleLineWidth:2,
            scaleLineColor:"rgba(255,255,255,0.6)",
            scaleOverlay :false,
            scaleOverride :false

           /*onAnimationProgress: function()
           {
                this.scale.steps = 3;
           }*/

            };
    var ctx = document.getElementById("myChart").getContext("2d");
    var myNewChart = new Chart(ctx).PolarArea(data,ChartOptions);
    myNewChart.scale.steps = 2;

    //gradient = ctx.createRadialGradient(centerX, centerY, 0, centerX, centerY, r);

    data.forEach(function(value,index){
        //var gradient = ctx.createRadialGradient(180,180,0,200,200,200);
        var gradient = ctx.createLinearGradient(0,0,200,0);
        
        var light_rgb = hexToRgb(value.light_color);
        var rgb = hexToRgb(value.color);
        gradient.addColorStop(0, `rgba(${light_rgb.r}, ${light_rgb.g}, ${light_rgb.b}, 1)`);
        gradient.addColorStop(1, `rgba(${rgb.r}, ${rgb.g}, ${rgb.b}, 0.9)`);

        myNewChart.segments[index].fillColor = gradient;
    });


console.log(myNewChart);

function hexToRgb(hex) {
  // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
  var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
  hex = hex.replace(shorthandRegex, function(m, r, g, b) {
    return r + r + g + g + b + b;
  });

  var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
  return result ? {
    r: parseInt(result[1], 16),
    g: parseInt(result[2], 16),
    b: parseInt(result[3], 16)
  } : null;
}

</script>
</body>


</html>