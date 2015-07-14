<!DOCTYPE html>
 <html>
  <head>
   <meta charset="utf-8">
   <title>Dashboard</title>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link href="component/css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="component/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
   <link href="component/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link href="component/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css">
   <!-- [if lt IE 9] >
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
  </head>
  <body class="skin-blue fixed sidebar-mini">
   <div class="wrapper">

   	 <?php include 'header.php'; ?>

   	  <?php include 'navigation.php'; ?>

   	 <div class="content-wrapper">
   	   <section class="content-header">
   	   	 <h1>
   	   	  Dashboard
   	   	  <small>Home</small>
   	   	 </h1>
   	   	 <ol class="breadcrumb">
   	   	  <li><i class="fa fa-dashboard"></i> Home</li>
   	   	  <li class="active">Dashboard</li>
   	   	 </ol>
   	   </section>
   	   <section class="content">
   	   	<div class="row">
   	   	 <div class="col-lg-3 col-xs-6">
   	   	  <div class="small-box bg-primary">
   	   	   <div class="inner">
   	   	     <h3>10</h3>
   	   	     <p>Total Arsip</p>
   	   	   </div>
   	   	   <div class="icon">
   	   	   	<i class="fa fa-archive"></i>
   	   	   </div>
   	   	   <a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
   	   	  </div>
   	   	 </div>
   	   	 <div class="col-lg-3 col-xs-6">
   	   	  <div class="small-box bg-green">
   	   	   <div class="inner">
   	   	     <h3>5</h3>
   	   	     <p>Terproses</p>
   	   	   </div>
   	   	   <div class="icon">
   	   	   	<i class="fa fa-check-circle"></i>
   	   	   </div>
   	   	   <a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
   	   	  </div>
   	   	 </div>
   	   	 <div class="col-lg-3 col-xs-6">
   	   	  <div class="small-box bg-yellow">
   	   	   <div class="inner">
   	   	     <h3>3</h3>
   	   	     <p>Tinjau Lokasi</p>
   	   	   </div>
   	   	   <div class="icon">
   	   	   	<i class="fa fa-clock-o"></i>
   	   	   </div>
   	   	   <a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
   	   	  </div>
   	   	 </div>
   	   	 <div class="col-lg-3 col-xs-6">
   	   	  <div class="small-box bg-red">
   	   	   <div class="inner">
   	   	     <h3>2</h3>
   	   	     <p>Pending</p>
   	   	   </div>
   	   	   <div class="icon">
   	   	   	<i class="fa fa-times-circle"></i>
   	   	   </div>
   	   	   <a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
   	   	  </div>
   	   	 </div>
   	   	</div>
   	   	<div class="row">
   	   	 <div class="col-md-12">
   	   	  <div class="box box-primary">
   	   	  	<div class="box-header with-border">
   	   	  	 <h3 class="box-title"><i class="fa fa-area-chart"></i> Area Chart Pedanil</h3>
   	   	  	 <div class="box-tools pull-right">
   	   	  	  <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
   	   	  	 </div>
   	   	  	</div>
   	   	  	<div class="box-body">
   	   	  	 <div class="row">
              <div class="col-md-8">
               <div class="chart">
    	   	  	  <canvas id="areaChart" height="300"></canvas>
    	   	  	 </div>
              </div>
              <div class="col-md-4">
               <p class="text-center">
                 <strong>Persentasi Berkas Masuk PBB (Pendataan dan penilaian) 2015</strong>
               </p>
               <div class="progress-group">
                 <span class="progress-text">Pedanil (Zona 1)</span>
                 <span class="progress-number"><b>340</b>/1500</span>
                 <div class="progress sm active">
                   <div class="progress-bar progress-bar-primary progress-bar-striped" style="width: 35%"></div>
                 </div>
               </div>
               <div class="progress-group">
                 <span class="progress-text">Pedanil (Zona 2)</span>
                 <span class="progress-number"><b>290</b>/1500</span>
                 <div class="progress sm active">
                   <div class="progress-bar progress-bar-green progress-bar-striped" style="width: 28%"></div>
                 </div>
               </div>
               <div class="progress-group">
                 <span class="progress-text">Pedanil (Zona 3)</span>
                 <span class="progress-number"><b>390</b>/1500</span>
                 <div class="progress sm active">
                   <div class="progress-bar progress-bar-red progress-bar-striped" style="width: 38%"></div>
                 </div>
               </div>
              </div>
   	   	  	 </div>
   	   	  	</div>
   	   	  </div>
   	   	 </div>
   	   	</div>
   	   </section>
   	 </div>

     <?php include 'footer.php'; ?>

   </div>
   <script type="text/javascript" src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
   <script type="text/javascript" src="component/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
   <script type="text/javascript" src="plugins/fastclick/fastclick.min.js"></script>
   <script type="text/javascript" src="component/js/app.min.js"></script>
   <script type="text/javascript" src="plugins/chartjs/Chart.min.js"></script>
   <script>
    $(function () {
      //** AreaChart
      var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
      var areaChart = new Chart(areaChartCanvas);

      var areaChartData = {
      	labels: ["January", "February", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
      	datasets: [
           {
             label: "Zona1",
             fillColor: "rgb(72, 115, 226)",
             strokeColor: "rgb(72, 115, 226)",
             pointColor: "rgb(72, 115, 226)",
             pointStrokeColor: "#c1c7d1",
             pointHighlightFill: "#fff",
             pointHighlightStroke: "rgba(220,220,220,1)",
             data: [40, 60, 30, 23, 10, 56, 36, 0, 0, 0, 0, 0]
           },
           {
           	 label: "Zona2",
             fillColor: "rgb(71, 230, 115)",
             strokeColor: "rgb(71, 230, 115)",
             pointColor: "rgb(71, 230, 115)",
             pointStrokeColor: "rgba(60,141,188,1)",
             pointHighlightFill: "#fff",
             pointHighlightStroke: "rgba(60,141,188,1)",
             data: [28, 48, 40, 19, 86, 27, 90, 0, 0, 0, 0, 0]
           },
           {
             label: "Zona 3",
             fillColor: "rgb(228, 45, 45)",
             strokeColor: "rgb(228, 45, 45)",
             pointColor: "rgb(228, 45, 45)",
             pointStrokeColor: "rgb(226, 89, 89)",
             pointHighlightFill: "#fff",
             pointHighlightStroke: "rgb(226, 89, 89)",
             data: [28, 48, 40, 19, 56, 27, 50, 0, 0, 0, 0, 0]
           }
      	]
      };

       var areaChartOptions = {

          showScale: true,

          scaleShowGridLines: false,

          scaleGridLineColor: "rgba(0,0,0,.05)",

          scaleGridLineWidth: 1,

          scaleShowHorizontalLines: true,

          scaleShowVerticalLines: true,

          bezierCurve: true,

          bezierCurveTension: 0.3,

          pointDot: false,

          pointDotRadius: 4,

          pointDotStrokeWidth: 1,

          pointHitDetectionRadius: 20,

          datasetStroke: true,

          datasetStrokeWidth: 2,

          datasetFill: true,

          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",

          maintainAspectRatio: false,

          responsive: true
        };

        areaChart.Line(areaChartData, areaChartOptions);

    });
   </script>
  </body>
 </html>
