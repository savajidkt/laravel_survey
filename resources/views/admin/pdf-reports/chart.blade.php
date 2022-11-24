<html>

<head>
  <meta charset="utf-8" />
  <title>Chart.js demo</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</head>
<body>

  <h1>Chart.js Sample</h1>

  <canvas id="myChart" width="600" height="400"></canvas>
  <script>
    var ctx = document.getElementById("myChart").getContext("2d");
    var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: "polarArea",
    
      // The data for our dataset
      data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
          {
            label: "My First dataset",
            backgroundColor: "rgb(255, 99, 132)",
            borderColor: "rgb(255, 99, 132)",
            data: [0, 10, 5, 2, 20, 30, 45]
          }
        ]
      },
    
      // Configuration options go here
      options: {
        responsive:false,
        maintainAspectRatio: false,
        legend: {
            display: true,
            labels: {
                fontColor: 'rgb(255, 99, 132)',
                // generateLabels: function(chart)
                // {
                //     console.log(chart);
                //     return `<p>Milan Soni</p>`;
                // }
            }
        }
      }
    });
  </script>
</body>
</html>