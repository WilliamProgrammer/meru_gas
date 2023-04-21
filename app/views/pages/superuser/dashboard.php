<?php
session_start();
if(isset($_SESSION['super_user']))
{
    $USER = $_SESSION['super_user'];
} else {
    header('location:index.php?page=login');
}


include_file('templates/header');
include_file('pages/sidebar');
include_file('pages/topbar');

?>

<div class="mb-3">
  <span id="spinner" class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  <span class="visually-hidden" id="status"></span>
</div>
<br>
<a class="text-decoration-none font-weight-bold" href="<?php echo URL('messages');?>">
    
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <div>
    <a style="font-weight: bold;" class="nav-link text-primary" href="<?php echo URL('messages');?>">Hello there!, You have
      <i class="bi bi-envelope"></i>
      <!-- Counter - Messages -->
      <span style="font-size: 9px!important;" class="badge badge-danger badge-counter"><?php echo $data['messages'][0]->num;?></span>
      Message(s).
    </a>
  </div>
</div>
</a>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="http://localhost/inventory_system/app/views/pages/generate_sales_report.html" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Sales Report</a>
</div>

<!-- Content Row -->
<div class="row">

<?php 

$graph_data = [];

foreach ($data['earnings'] as $value) {
  array_push($graph_data, $value->total);
}
?>

    <!-- =================== STATION A==================================================== -->
    <!-- AREA 25 -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Area 25 (Profits)


                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php format($data['profit_a'], 2); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-arrow-right fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Revenue</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php format($data['revenue_a'][0]->revenue, 2); ?></div>
                    </div>
                    <div class="col-auto">

                        <i class="bi bi-credit-card fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Cylinder Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total Products

                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                                   if (gettype($data['station_a_products_num'][0]->results) == 'NULL') {
                                        echo 0;
                                   } else {
                                    echo $data['station_a_products_num'][0]->results;
                                   }
                            ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-droplet fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =================== END STATION A==================================================== -->

    <!-- =================== STATION B==================================================== -->
    <!-- Area 18 (Profits) -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Area 49 (Profits)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php format($data['profit_b'], 2); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-arrow-right fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Revenue</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php format($data['revenue_b'][0]->revenue, 2); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-credit-card fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Products Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total Products</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php 
                                   if (gettype($data['station_b_products_num'][0]->results) == 'NULL') {
                                        echo 0;
                                   } else {
                                    echo $data['station_b_products_num'][0]->results;
                                   }
                            ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-droplet fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Content Row -->

<!-- <div class="row"> -->
<div class="row">

                        <!-- Area Chart -->
  <div class="col-xl-8 col-lg-7">
      <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Earnings Overview 2023 Respectively</h6>
              <div class="dropdown no-arrow">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                  <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div> -->
              </div>
          </div>
          <!-- Card Body -->
          <div class="card-body">
              <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas id="myAreaChart" style="display: block; width: 514px; height: 160px;" width="514" height="160" class="chartjs-render-monitor"></canvas>
              </div>
          </div>
      </div>
  </div>

                        <!-- Pie Chart -->
  <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Business Overview</h6>
              <div class="dropdown no-arrow">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                  <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div> -->
              </div>
          </div>
          <!-- Card Body -->
          <div class="card-body">
              <div class="chart-pie pt-4 pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas id="myPieChart" width="514" height="208" style="display: block; width: 514px; height: 208px;" class="chartjs-render-monitor"></canvas>
              </div>
              <div class="mt-4 text-center small">
                  <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Profits
                  </span>
                  <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Revenue
                  </span>
                  <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Expenses
                  </span>
              </div>
          </div>
      </div>
  </div>

</div>


<!-- WARNINGS CONCERNING GAS Level -->
<?php 
    if(isset($data['items'])){?>
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Products Alert',
                text: 'Following item(s) <?php echo $data['items'];?> are running low in the stock .'
            });
        </script>
<?php }?>


<?php include_file('templates/copyrights'); ?>
<?php include_file('templates/footer'); ?>
<script>
  const status = document.getElementById("status");
  const spinner = document.getElementById("spinner");

  if (navigator.onLine) {

    spinner.classList.add("text-success");
    status.innerHTML = 'You are Online.';

  } else {

    spinner.classList.add("text-warning");
    status.innerHTML = 'You are Offline.';

  }

</script>
<script>
  // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr"],
    datasets: [{
      label: "Earnings",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [<?php echo implode(', ', $graph_data);?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return 'MK' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});

</script>

<script>

  // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Profits", "Revenue", "Expenses"],
    datasets: [{
      data: [55, 30, 15],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

</script>



