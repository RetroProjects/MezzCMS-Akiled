<!DOCTYPE html>
<html lang="en">
<?php
include_once "includes/head.php";
$_SESSION['title'] = '';
$_SESSION['slogan'] = '';
$_SESSION['news'] = '';
admin::CheckRank(13);
?>

<body>

    <?php
    include_once "includes/navi.php";
    include_once "includes/header.php";

    ?>


    <div class="main-panel">
        <div class="content-wrapper">
        <div class="page-header">
                <h1 class="page-title">Cambio de Contraseña </h1>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <header class="panel-heading">
                            <form class="forms-sample" name="mygallery" action="" method="POST">

                            
                                <input id="icon_prefix" type="hidden" value="<?php echo admin::EditUser("username"); ?>" name="naam" class="form-control">
                                <div class="form-group">
                                <label for="exampleInputName1"><?= $lang["HkUserSearchName"]?></label>
                      <div class="input-group">
                        <input 	<input type="text"  value="" name="user" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-primary" type="button">Buscar</button>
                        </div>
                      </div>
                      <code><?= $lang["HkUserNosearch"]?></code>
                    </div>
                                </section>
                            </form>

                        
                <?php

				$searchUser = $dbh->prepare("SELECT * FROM users WHERE username = :user");
				$searchUser->bindParam(':user', $_POST['user']); 
				$searchUser->execute();
				if ($searchUser->RowCount() == 1)
				{
		?>
				
			
					<form name="mygallery" action="" method="POST">
					
							<?php 
				admin::EditUserb("username"); 
				
				?>


<div class="form-group">
<br><br>


								<label class="exampleInputName1"><?= $lang["HkEditUser"] ?> <?php echo admin::EditUserb("username"); ?></label>
								<div class="input-input-group-append ">
								
									<input type="hidden"  value="<?php echo admin::EditUserb("username"); ?>" name="naam" class="form-control" disable>
								</div>
							</div>
							<br><br>
                           
                            
							<div class="form-group">
								<label class="exampleInputName1"><?= $lang["HkPassword"] ?></label>
                                <div class="input-group">
									<input type="password"  placeholder="*********" name="newpassword" class="form-control">
								
                            <div class="input-group-append">
							<button name="updatepassword" type="submit" class="btn btn-sm btn-info "><?= $lang["HkUserButton"] ?></button></form>
                            </div>
							</div>
              </div>
				</section>

                <?php
	}
				if (isset($_POST['updatepassword'])) 
			{
								$newPassword = password_hash($_POST['newpassword'], PASSWORD_BCRYPT);
								$stmt = $dbh->prepare("
								UPDATE 
								users 
								SET password = 
								:newpassword 
								WHERE username = 
								:username
								");
								$stmt->bindParam(':newpassword', $newPassword); 
								$stmt->bindParam(':username', $_POST['naam']); 
								$stmt->execute(); 
				Admin::succeed("".$lang["HkError2"] ."");
			}	
?>
      
	  
  

	
      </div>         
    </div>
    </div>
    </div>
    </section>
  
    
      <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Logs Hk</h4>
                    <p class="card-description"> Monitor de cambios desde el hk <code>(No Real Time)</code>
                    </p>
                    <div class="table-responsive " style=" max-height: 350px; overflow-y: scroll">
                      <table class="table table-hover" >
                     
                        <tbody>

                        <?php
				$sqlGetLogs = $dbh->prepare("SELECT user_id, username, actions, fech FROM hk_logs ORDER BY id DESC LIMIT 10");
				$sqlGetLogs->execute();
				while ($sqlGetLogss = $sqlGetLogs->fetch()){
					$userid=$sqlGetLogss['user_id'];
					$sqlGetUser = $dbh->prepare("SELECT username,look FROM users WHERE id = '$userid'");
					$sqlGetUser->execute();
					$sqlGetUserr = $sqlGetUser->fetch()

			?>
		 <tr>
    <td><img src="https://imager.akiled.org/?figure=<?php echo $sqlGetUserr['look']; ?>&direction=3&head_direction=3&gesture=none&action=none&size=n&headonly=1"></td>
    <td><span class="text-primary"><?php echo $sqlGetLogss['username']; ?></span></td>
    <td><p>Acción: <?php echo $sqlGetLogss['actions']; ?><br></td>
    <td> <?php echo GetLast($sqlGetLogss['fech']); ?></p></td> </tr>

			<?php } ?>
	
                        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                </div>
              
            
              
            
                <?php
            	$sql = $dbh->prepare("SELECT * FROM users ");
                $sql->execute();
                $users = $sql->rowCount();
                $sql = $dbh->prepare("SELECT * FROM groups ");
                $sql->execute();
                $groups = $sql->rowCount();
                $sql = $dbh->prepare("SELECT * FROM rooms ");
                $sql->execute();
                $room = $sql->rowCount();
                $sql = $dbh->prepare("SELECT * FROM cms_news ");
                $sql->execute();
                $news = $sql->rowCount();
                $comments = $sql->rowCount();
                $sql = $dbh->prepare("SELECT * FROM cms_badges ");
                $sql->execute();
                $badges = $sql->rowCount();
            ?>
           
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Analitica de usuarios conectados</h4>
                    <canvas id="doughnutChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
              </div>
              </div>
         
            
            
       
             
              <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php
        include_once "includes/footer.php";
        ?>
        <!-- container-scroller -->

        <!-- End custom js for this page -->
</body>


<script>
$(function() {
  /* ChartJS
   * -------
   * Data and config for chartjs
   */
  'use strict';
  var data = {
    labels: [, "2014", "2014", "2015", "2016", "2017"],
    datasets: [{
      label: '# of Votes',
      data: [10, 19, 3, 5, 2, 3],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: false
    }]
  };
  var multiLineData = {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [{
        label: 'Dataset 1',
        data: [12, 19, 3, 5, 2, 3],
        borderColor: [
          '#587ce4'
        ],
        borderWidth: 2,
        fill: false
      },
      {
        label: 'Dataset 2',
        data: [5, 23, 7, 12, 42, 23],
        borderColor: [
          '#ede190'
        ],
        borderWidth: 2,
        fill: false
      },
      {
        label: 'Dataset 3',
        data: [15, 10, 21, 32, 12, 33],
        borderColor: [
          '#f44252'
        ],
        borderWidth: 2,
        fill: false
      }
    ]
  };
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        },
        gridLines: {
          color: "rgba(204, 204, 204,0.1)"
        }
      }],
      xAxes: [{
        gridLines: {
          color: "rgba(204, 204, 204,0.1)"
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }
  };


  var doughnutPieData = {
    datasets: [{
      data: [<?= Game::usersOnline() ?>, <?= Game::staffCount() ?>],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.5)',
        'rgba(255, 206, 86, 0.5)',
        'rgba(75, 192, 192, 0.5)',
        'rgba(153, 102, 255, 0.5)',
        'rgba(255, 159, 64, 0.5)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
      'Usuarios Conectados',
      'Staff Conectados',
    ]
  };
  var doughnutPieOptions = {
    responsive: true,
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };
  var areaData = {
    labels: ["2013", "2014", "2015", "2016", "2017"],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 5, 2, 3],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: true, // 3: no fill
    }]
  };

  var areaOptions = {
    plugins: {
      filler: {
        propagate: true
      }
    },
    scales: {
      yAxes: [{
        gridLines: {
          color: "rgba(204, 204, 204,0.1)"
        }
      }],
      xAxes: [{
        gridLines: {
          color: "rgba(204, 204, 204,0.1)"
        }
      }]
    }
  }

  var multiAreaData = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
        label: 'Facebook',
        data: [8, 11, 13, 15, 12, 13, 16, 15, 13, 19, 11, 14],
        borderColor: ['rgba(255, 99, 132, 0.5)'],
        backgroundColor: ['rgba(255, 99, 132, 0.5)'],
        borderWidth: 1,
        fill: true
      },
      {
        label: 'Twitter',
        data: [7, 17, 12, 16, 14, 18, 16, 12, 15, 11, 13, 9],
        borderColor: ['rgba(54, 162, 235, 0.5)'],
        backgroundColor: ['rgba(54, 162, 235, 0.5)'],
        borderWidth: 1,
        fill: true
      },
      {
        label: 'Linkedin',
        data: [6, 14, 16, 20, 12, 18, 15, 12, 17, 19, 15, 11],
        borderColor: ['rgba(255, 206, 86, 0.5)'],
        backgroundColor: ['rgba(255, 206, 86, 0.5)'],
        borderWidth: 1,
        fill: true
      }
    ]
  };

  var multiAreaOptions = {
    plugins: {
      filler: {
        propagate: true
      }
    },
    elements: {
      point: {
        radius: 0
      }
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }

  var scatterChartData = {
    datasets: [{
        label: 'First Dataset',
        data: [{
            x: -10,
            y: 0
          },
          {
            x: 0,
            y: 3
          },
          {
            x: -25,
            y: 5
          },
          {
            x: 40,
            y: 5
          }
        ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)'
        ],
        borderWidth: 1
      },
      {
        label: 'Second Dataset',
        data: [{
            x: 10,
            y: 5
          },
          {
            x: 20,
            y: -30
          },
          {
            x: -25,
            y: 15
          },
          {
            x: -10,
            y: 5
          }
        ],
        backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
        ],
        borderColor: [
          'rgba(54, 162, 235, 1)',
        ],
        borderWidth: 1
      }
    ]
  }

  var scatterChartOptions = {
    scales: {
      xAxes: [{
        type: 'linear',
        position: 'bottom',
        gridLines: {
          color: "rgba(204, 204, 204,0.1)"
        }
      }],
      yAxes: [{
        gridLines: {
          color: "rgba(204, 204, 204,0.1)"
        }
      }]
    }
  }
  // Get context with jQuery - using jQuery's .get() method.
  if ($("#barChart").length) {
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: data,
      options: options
    });
  }

  if ($("#lineChart").length) {
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: data,
      options: options
    });
  }

  if ($("#linechart-multi").length) {
    var multiLineCanvas = $("#linechart-multi").get(0).getContext("2d");
    var lineChart = new Chart(multiLineCanvas, {
      type: 'line',
      data: multiLineData,
      options: options
    });
  }

  if ($("#areachart-multi").length) {
    var multiAreaCanvas = $("#areachart-multi").get(0).getContext("2d");
    var multiAreaChart = new Chart(multiAreaCanvas, {
      type: 'line',
      data: multiAreaData,
      options: multiAreaOptions
    });
  }

  if ($("#doughnutChart").length) {
    var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }

  if ($("#pieChart").length) {
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }

  if ($("#areaChart").length) {
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    var areaChart = new Chart(areaChartCanvas, {
      type: 'line',
      data: areaData,
      options: areaOptions
    });
  }

  if ($("#scatterChart").length) {
    var scatterChartCanvas = $("#scatterChart").get(0).getContext("2d");
    var scatterChart = new Chart(scatterChartCanvas, {
      type: 'scatter',
      data: scatterChartData,
      options: scatterChartOptions
    });
  }

  if ($("#browserTrafficChart").length) {
    var doughnutChartCanvas = $("#browserTrafficChart").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: browserTrafficData,
      options: doughnutPieOptions
    });
  }
});

</script>

</html>