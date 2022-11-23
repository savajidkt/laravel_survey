<!doctype html>
<html lang="en">
 <head>

  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  <link href="https://cdn.anychart.com/releases/8.11.0/css/anychart-ui.min.css?hcode=a0c21fc77e1449cc86299c5faa067dc4" rel="stylesheet" type="text/css">
  <style>html, body, #container {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}
</style>
<script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-base.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
  <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-sunburst.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
  <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-exports.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
  <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-ui.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
 </head>
 <body>
 <div id="container"></div>  
  <script type="text/javascript">
  anychart.onDocumentReady(function () {
    // create data
    var data = [
      {name: "Italian", children: [
        {name: "Consonants", children: [
          {name: "m"}, {name: "n"}, {name: "ɲ"},
          {name: "p"}, {name: "b"}, {name: "t"},
          {name: "d"}, {name: "k"}, {name: "g"},
          {name: "t͡s"}, {name: "d͡z"}, {name: "t͡ʃ"},
          {name: "d͡ʒ"}, {name: "f"}, {name: "v"},
          {name: "s"}, {name: "z"}, {name: "ʃ"},
          {name: "j"}, {name: "w"}, {name: "l"},
          {name: "ʎ"}, {name: "r"}, {name: "ɾ"}
        ]},
        {name: "Vowels", children: [
          {name: "i"}, {name: "u"}, {name: "e"},
          {name: "o"}, {name: "ɛ"}, {name: "ɔ"},
          {name: "a"}
        ]}
      ]}
    ];

    // create a chart and set the data
    var chart = anychart.sunburst(data, "as-tree");

    // set the calculation mode
    chart.calculationMode("ordinal-from-leaves");

    // set the chart title
    chart.title().useHtml(true);
    // chart.title("Sunburst: Calculation Mode (ordinal-from-leaves)<br><br>" +
    //     "<span style='font-size:12; font-style:italic'>" +
    //     "Phonemic System</span>");

    // set the container id
    chart.container("container");

    // initiate drawing the chart
    chart.draw();
});
</script>

 </body>
</html>
