<script>
      // Get the context of the canvas element we want to select
var data = [// w  w w  . j  a  v  a  2s . c  om
    {
        value: 300,
        color:"#FFCC01",
        highlight: "#FFCC01",
        label: "Establishing Rapport"
    },
    {
        value: 50,
        color: "#7FB936",
        highlight: "#7FB936",
        label: "Understanding Others"
    },
    {
        value: 100,
        color: "#A75FD3",
        highlight: "#A75FD3",
        label: "Embracing Individual Differences"
    },
    {
        value: 40,
        color: "#2D63ED",
        highlight: "#2D63ED",
        label: "Developing Trust"
    },
    {
        value: 120,
        color: "#FF8E3A",
        highlight: "#FF8E3A",
        label: "Cultivating Influence"
    }
    
];

//var ctx = document.getElementById("myChart1").getContext("2d");
//var myNewChart = new Chart(ctx).PolarArea(data1);
    
      </script>


		<script>
    function DrawTheChart(ChartData,ChartOptions,ChartId,ChartType){
      var ctx = document.getElementById(ChartId).getContext("2d");

      
      var myLine = new Chart(ctx).PolarArea(ChartData,ChartOptions);
    }
		</script>
	
	<body>
		<script> 
   
    var ChartData = [
      {
        value: 300,
        color:"#FFCC01",
        highlight: "#FFCC01",
        label: "Establishing Rapport"
    },
    {
        value: 50,
        color: "#7FB936",
        highlight: "#7FB936",
        label: "Understanding Others"
    },
    {
        value: 100,
        color: "#A75FD3",
        highlight: "#A75FD3",
        label: "Embracing Individual Differences"
    },
    {
        value: 40,
        color: "#2D63ED",
        highlight: "#2D63ED",
        label: "Developing Trust"
    },
    {
        value: 120,
        color: "#FF8E3A",
        highlight: "#FF8E3A",
        label: "Cultivating Influence"
    }];

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

          DrawTheChart(ChartData,ChartOptions,"myChart","PolarArea");

 </script>