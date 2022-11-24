<script>
      // Get the context of the canvas element we want to select
var data = [// w  w w  . j  a  v  a  2s . c  om
    {
        value: 300,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Red"
    },
    {
        value: 50,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Green"
    },
    {
        value: 100,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Yellow"
    },
    {
        value: 40,
        color: "#949FB1",
        highlight: "#A8B3C5",
        label: "Grey"
    },
    {
        value: 120,
        color: "#4D5360",
        highlight: "#616774",
        label: "Dark Grey"
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
   
    var ChartData = [{
      value :65,
      color:'rgba(52,152,219,1)',
      title:'enero'
      },
      {
        value :8,
        color:'rgba(46,204,113,1)',
        title:'febrero'
      },
      {
        value :90,
        color:'rgba(166,107,190,1)',
        title:'marzo'
      },
      {
        value :81,
        color:'rgba(241,196,15,1)',
        title:'abril'
      },
        {
          value :56,
          color:'rgba(230,126,34,1)',
          title:'mayo'
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