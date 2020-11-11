<?php
$ROE_FY14=$_POST['ROE_FY14'];
$ROE_FY15=$_POST['ROE_FY15'];
$REVENUE_FY14=$_POST['REVENUE_FY14'];
$REVENUE_FY15=$_POST['REVENUE_FY15'];
$RWAFY14=$_POST['RWAFY14'];
$RWAFY15=$_POST['RWAFY15'];
$TotalLimits_EOP_FY14=$_POST['TotalLimits_EOP_FY14'];
$TotalLimits_EOP_FY15=$_POST['TotalLimits_EOP_FY15'];
$Deposits_EOP_FY14=$_POST['Deposits_EOP_FY14'];
$Deposits_EOP_FY15x=$_POST['Deposits_EOP_FY15x'];
$Company_Avg_Activity_FY14=$_POST['Company_Avg_Activity_FY14'];
$Company_Avg_Activity_FY15=$_POST['Company_Avg_Activity_FY15'];
$NPAT_AllocEq_FY15X=$_POST['NPAT_AllocEq_FY15X'];
$NPAT_AllocEq_FY14=$_POST['NPAT_AllocEq_FY14'];
$CMGUnmaskedID=$_POST['CMGUnmaskedID'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Halaman Detail</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="sidebar-closed">
      <!--header start-->
      <header class="header white-bg">
          
          <!--logo start-->
          <a href="#" class="logo">Test </span>Kano 2020</a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
              <!-- settings start -->
              
              <!-- settings end -->
              <!-- inbox dropdown start-->
             
              <!-- inbox dropdown end -->
              <!-- notification dropdown start-->
              
              <!-- notification dropdown end -->
          </ul>
          </div>
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                 
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          
                          <span class="username">Cahya Affrillah Prasetyo</span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                         
                          <li><a href="test.php"><i class="icon-home"></i> Kembali Ke Halaman Sebelumnya</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
     
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content" style="margin-left: 0px;">

          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="tab-pane" id="chartjs">
                  <div class="row">
                      <div class="col-lg-3">
                          <section class="panel">
                              <header class="panel-heading">
                                  ROE FY 14 vs 15
                              </header>
                              <div class="panel-body text-center">
                                  
                                  <canvas id="pie-chart" height="200px" width="300px" style="width: 300px; height: 200px;"></canvas>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-3">
                          <section class="panel">
                              <header class="panel-heading">
                                  Revenue & RWA FY 14 vs 15
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="bar-chart" height="200px" width="300px" style="width: 300px; height: 200px;"></canvas>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-3">
                          <section class="panel">
                              <header class="panel-heading">
                                  Total Limit EOP FY 14 vs 15
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="line-chart" height="200px" width="300px" style="width: 300px; height: 200px;"></canvas>
                              </div>
                          </section>
                      </div>
                       <div class="col-lg-3">
                          <section class="panel">
                              <header class="panel-heading">
                                  Company Average Activity FY14 vs 15
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="bar-chart-horizontal" height="200px" width="300px" style="width: 300px; height: 200px;"></canvas>
                              </div>
                          </section>
                      </div>
                  </div>
                 
              </div>
              <!-- page end-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              ROE Summary Detail
                          </header>
                          <div class="panel-body">
                              <section id="unseen">
                                <table class="table table-bordered table-striped table-condensed">
                                  <thead>
                                  	
                                  <tr>
                                      <th>ROE FY14</th>
                                      <th>ROE FY15</th>
                                      <th class="numeric">REVENUE FY14</th>
                                      <th class="numeric">REVENUE FY15</th>
                                      <th class="numeric">RWAFY14</th>
                                      <th class="numeric">RWAFY15</th>
                                      <th class="numeric">TotalLimits EOP FY14</th>
                                      <th class="numeric">TotalLimits EOP FY15</th>
                                      <th class="numeric">Company Avg Activity FY14</th>
                                      <th class="numeric">Company Avg Activity FY15</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <form action="simpan_csv.php" method="POST">
                                  <tr>
                                      <td><input type="text" class="form-control" name="ROE_FY14" id="ROE_FY14" value="<?php echo $ROE_FY14?>" >
                                      	<input type="hidden" class="form-control" name="CMGUnmaskedID" id="CMGUnmaskedID" value="<?php echo $CMGUnmaskedID?>" ></td>
                                      <td><input type="text" class="form-control" name="ROE_FY15" id="ROE_FY15" value="<?php echo $ROE_FY15?>" ></td>
                                      <td class="numeric"><input type="text" class="form-control" name="REVENUE_FY14" id="REVENUE_FY14" value="<?php echo $REVENUE_FY14?>"></td>
                                      <td class="numeric"><input type="text" class="form-control" name="REVENUE_FY15" id="REVENUE_FY15" value="<?php echo $REVENUE_FY15?>"></td>
                                      <td class="numeric"><input type="text" class="form-control" name="RWAFY14" id="RWAFY14" value="<?php echo $RWAFY14?>"></td>
                                      <td class="numeric"><input type="text" class="form-control" name="RWAFY15" id="RWAFY15" value="<?php echo $RWAFY15?>"></td>
                                      <td class="numeric"><input type="text" class="form-control" name="TotalLimits_EOP_FY14" id="TotalLimits_EOP_FY14" value="<?php echo $TotalLimits_EOP_FY14?>"></td>
                                      <td class="numeric"><input type="text" class="form-control" name="TotalLimits_EOP_FY15" id="TotalLimits_EOP_FY15" value="<?php echo $TotalLimits_EOP_FY15?>"></td>
                                      <td class="numeric"><input type="text" class="form-control" name="Company_Avg_Activity_FY14" id="Company_Avg_Activity_FY14" value="<?php echo $Company_Avg_Activity_FY14?>"></td>
                                      <td class="numeric"><input type="text" class="form-control" name="Company_Avg_Activity_FY15" id="Company_Avg_Activity_FY15" value="<?php echo $Company_Avg_Activity_FY15?>"></td>
                                  </tr>
                                  <tr>
                                  	<td colspan="9">
                                  		
                                  	</td>
                                  	<td >
                                  		<input type="submit" name="submit" class="form-control" value="submit">
                                  	</td>
                                  </tr>
                                  </form>
                                 
                                  </tbody>
                              </table>
                              </section>
                          </div>
                      </section>
                  </div>
              </div>
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2020 Test Kano.
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/chart-master/Chart.js"></script>
    <script src="js/respond.min.js" ></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!-- script for this page only-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="text/javascript">
	var ROE_FY14=$("#ROE_FY14").val();
	var ROE_FY15=$("#ROE_FY15").val();
	var REVENUE_FY14=$("#REVENUE_FY14").val();
	var REVENUE_FY15=$("#REVENUE_FY15").val();
	var RWAFY14=$("#RWAFY14").val();
	var RWAFY15=$("#RWAFY15").val();
	var TotalLimits_EOP_FY14=$("#TotalLimits_EOP_FY14").val();
	var TotalLimits_EOP_FY15=$("#TotalLimits_EOP_FY15").val();
	var Company_Avg_Activity_FY14=$("#Company_Avg_Activity_FY14").val();
	var Company_Avg_Activity_FY15=$("#Company_Avg_Activity_FY15").val();
	var NPAT_AllocEq_FY14="<?php echo $NPAT_AllocEq_FY14?>";
	var NPAT_AllocEq_FY15X="<?php echo $NPAT_AllocEq_FY15X?>";
	var Deposits_EOP_FY14="<?php echo $Deposits_EOP_FY14?>";
	var Deposits_EOP_FY15x="<?php echo $Deposits_EOP_FY15x?>";
   var piechat = new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["ROE_FY14", "ROE_FY15"],
      datasets: [{
        label: "%",
        backgroundColor: ["#006633", "#000000"],
        data: [ROE_FY14.replace("%", ""),ROE_FY15.replace("%", "")]
      }]
    },
    options: {
      title: {
        display: false,
        text: ''
      }
    }
});
  var barchart =  new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["RWAFY14", "REVENUE_FY14", "RWAFY15", "REVENUE_FY15"],
      datasets: [
        {
          label: "",
          backgroundColor: ["#3e95cd", "#3e95cd","#3e95cd","#3e95cd"],
          data: [RWAFY14.replace(/,/g,""),REVENUE_FY14.replace(/,/g,""),RWAFY15.replace(/,/g,""),REVENUE_FY15.replace(/,/g,"")]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: false,
        text: ''
      },
       scales: {
        xAxes: [{
            ticks: {
                fontSize: 7
            }
        }]
    }
    }
});
   var myLineChart = new Chart(document.getElementById("line-chart"), {
    type: 'line',
     data: {
      labels: ["TotalLimits_EOP_FY14", "TotalLimits_EOP_FY15"],
      datasets: [
        {
          fill : false,
          label: "",
          backgroundColor: ["#3e95cd", "#3e95cd","#3e95cd","#3e95cd"],
          data: [TotalLimits_EOP_FY14.replace(/,/g,""),TotalLimits_EOP_FY15.replace(/,/g,"")]
        }
      ]
    },
     options: {
      legend: { display: false },
      title: {
        display: false,
        text: ''
      },
       scales: {
        xAxes: [{
            ticks: {
                fontSize: 10
            }
        }]
    }
    }
});
  var horizontal = new Chart(document.getElementById("bar-chart-horizontal"), {
    type: 'horizontalBar',
    data: {
      labels: ["Avg Regulatory Capital", "NPAT Allocation", "TotalLimits EOP", "Deposits EOP"],
      datasets: [
        {
          
          backgroundColor: "#A0A0A0",
          data: [Company_Avg_Activity_FY14.replace(/,/g,""),NPAT_AllocEq_FY14.replace(/,/g,""),TotalLimits_EOP_FY14.replace(/,/g,""),Deposits_EOP_FY14.replace(/,/g,"")]
        }, {
          
          backgroundColor: "#3e95cd",
          data: [Company_Avg_Activity_FY15.replace(/,/g,""),NPAT_AllocEq_FY15X.replace(/,/g,""),TotalLimits_EOP_FY15.replace(/,/g,""),Deposits_EOP_FY15x.replace(/,/g,"")]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
  $("#ROE_FY14").keyup(function(e){ 
    
        piechat.data.datasets[0].data = [$("#ROE_FY14").val().replace(/%/g,""),$("#ROE_FY15").val().replace(/%/g,"")];
    	piechat.update(); 
    
});
  $("#ROE_FY15").keyup(function(e){ 
    
        piechat.data.datasets[0].data = [$("#ROE_FY14").val().replace(/%/g,""),$("#ROE_FY15").val().replace(/%/g,"")];
    	piechat.update(); 
    
});
$("#RWAFY14").keyup(function(e){ 
    
        barchart.data.datasets[0].data = [$("#RWAFY14").val().replace(/,/g,""),$("#REVENUE_FY14").val().replace(/,/g,""),$("#RWAFY15").val().replace(/,/g,""),$("#REVENUE_FY15").val().replace(/,/g,"")];
    	barchart.update(); 
    
});
$("#REVENUE_FY14").keyup(function(e){ 
    
        barchart.data.datasets[0].data = [$("#RWAFY14").val().replace(/,/g,""),$("#REVENUE_FY14").val().replace(/,/g,""),$("#RWAFY15").val().replace(/,/g,""),$("#REVENUE_FY15").val().replace(/,/g,"")];
    	barchart.update(); 
    
});
$("#RWAFY15").keyup(function(e){ 
    
        barchart.data.datasets[0].data = [$("#RWAFY14").val().replace(/,/g,""),$("#REVENUE_FY14").val().replace(/,/g,""),$("#RWAFY15").val().replace(/,/g,""),$("#REVENUE_FY15").val().replace(/,/g,"")];
    	barchart.update(); 
    
});
$("#REVENUE_FY15").keyup(function(e){ 
    
        barchart.data.datasets[0].data = [$("#RWAFY14").val().replace(/,/g,""),$("#REVENUE_FY14").val().replace(/,/g,""),$("#RWAFY15").val().replace(/,/g,""),$("#REVENUE_FY15").val().replace(/,/g,"")];
    	barchart.update(); 
    
});
$("#TotalLimits_EOP_FY14").keyup(function(e){ 
    	horizontal.data.datasets[0].data = [$("#Company_Avg_Activity_FY14").val().replace(/,/g,""),NPAT_AllocEq_FY14.replace(/,/g,""),$("#TotalLimits_EOP_FY14").val().replace(/,/g,""),Deposits_EOP_FY14.replace(/,/g,"")];
        horizontal.data.datasets[1].data = [$("#Company_Avg_Activity_FY15").val().replace(/,/g,""),NPAT_AllocEq_FY15X.replace(/,/g,""),$("#TotalLimits_EOP_FY15").val().replace(/,/g,""),Deposits_EOP_FY15x.replace(/,/g,"")];
        
    	horizontal.update();

        myLineChart.data.datasets[0].data = [$("#TotalLimits_EOP_FY14").val().replace(/,/g,""),$("#TotalLimits_EOP_FY15").val().replace(/,/g,"")];
    	myLineChart.update(); 
    
});
$("#TotalLimits_EOP_FY15").keyup(function(e){ 
    	horizontal.data.datasets[0].data = [$("#Company_Avg_Activity_FY14").val().replace(/,/g,""),NPAT_AllocEq_FY14.replace(/,/g,""),$("#TotalLimits_EOP_FY14").val().replace(/,/g,""),Deposits_EOP_FY14.replace(/,/g,"")];
        horizontal.data.datasets[1].data = [$("#Company_Avg_Activity_FY15").val().replace(/,/g,""),NPAT_AllocEq_FY15X.replace(/,/g,""),$("#TotalLimits_EOP_FY15").val().replace(/,/g,""),Deposits_EOP_FY15x.replace(/,/g,"")];
        
    	horizontal.update();

        myLineChart.data.datasets[0].data = [$("#TotalLimits_EOP_FY14").val().replace(/,/g,""),$("#TotalLimits_EOP_FY15").val().replace(/,/g,"")];
    	myLineChart.update(); 
    
});
$("#Company_Avg_Activity_FY14").keyup(function(e){ 
    
        horizontal.data.datasets[0].data = [$("#Company_Avg_Activity_FY14").val().replace(/,/g,""),NPAT_AllocEq_FY14.replace(/,/g,""),$("#TotalLimits_EOP_FY14").val().replace(/,/g,""),Deposits_EOP_FY14.replace(/,/g,"")];
        horizontal.data.datasets[1].data = [$("#Company_Avg_Activity_FY15").val().replace(/,/g,""),NPAT_AllocEq_FY15X.replace(/,/g,""),$("#TotalLimits_EOP_FY15").val().replace(/,/g,""),Deposits_EOP_FY15x.replace(/,/g,"")];
        
    	horizontal.update();
    
});
$("#Company_Avg_Activity_FY15").keyup(function(e){ 
    
        horizontal.data.datasets[0].data = [$("#Company_Avg_Activity_FY14").val().replace(/,/g,""),NPAT_AllocEq_FY14.replace(/,/g,""),$("#TotalLimits_EOP_FY14").val().replace(/,/g,""),Deposits_EOP_FY14.replace(/,/g,"")];
        horizontal.data.datasets[1].data = [$("#Company_Avg_Activity_FY15").val().replace(/,/g,""),NPAT_AllocEq_FY15X.replace(/,/g,""),$("#TotalLimits_EOP_FY15").val().replace(/,/g,""),Deposits_EOP_FY15x.replace(/,/g,"")];
        
    	horizontal.update();
    
});
    </script>

  </body>
</html>
