<script>

	$(document).ready(function () {
		// alert();
		load_weekly_pie();
		// load_weekly_line();
	});

	function load_weekly_pie()
	{

    //Get the context of the Chart canvas element we want to select
    var ctx = $("#simple-pie-chart");

    // Chart Options
    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        responsiveAnimationDuration:500,
		title: {
			display: true,
			text: "<?=$age_chart['title']?>"
		}
    };

    // Chart Data
    var chartData = {
        labels: [<?=$age_chart['labels']?>],
        datasets: [{
            label: "",
            data: [<?=$age_chart['data']?>],
            backgroundColor: [<?=$age_chart['bgcolor']?>],
        }]
    };

    var config = {
        type: 'pie',

        // Chart Options
        options : chartOptions,

        data : chartData
    };

    // Create the chart
    var pieSimpleChart = new Chart(ctx, config);
	}
	
	function load_weekly_line()
	{
		//Get the context of the Chart canvas element we want to select
		var ctx = $("#line-chart");

		// Chart Options
		var chartOptions = {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				position: 'bottom',
			},
			hover: {
				mode: 'label'
			},
			scales: {
				xAxes: [{
					display: true,
					gridLines: {
						color: "#f3f3f3",
						drawTicks: false,
					},
					scaleLabel: {
						display: true,
						labelString: 'Week'
					}
				}],
				yAxes: [{
					display: true,
					gridLines: {
						color: "#f3f3f3",
						drawTicks: false,
					},
					scaleLabel: {
						display: true,
						labelString: 'Registrasi'
					}
				}]
			},
			title: {
				display: true,
				text: 'Weekly Registration By Age'
			}
		};

		// Chart Data
		var chartData = {
			labels: ["1", "2", "3", "4", "5", "6", "7"],
			datasets: [{
				label: "<20",
				data: [65, 59, 80, 81, 56, 55, 40],
				fill: false,
				borderDash: [5, 5],
				borderColor: "#9C27B0",
				pointBorderColor: "#9C27B0",
				pointBackgroundColor: "#FFF",
				pointBorderWidth: 2,
				pointHoverBorderWidth: 2,
				pointRadius: 4,
			}, {
				label: "20-25",
				data: [28, 48, 40, 19, 86, 27, 90],
				fill: false,
				borderDash: [5, 5],
				borderColor: "#00A5A8",
				pointBorderColor: "#00A5A8",
				pointBackgroundColor: "#FFF",
				pointBorderWidth: 2,
				pointHoverBorderWidth: 2,
				pointRadius: 4,
			}, {
				label: "25-30",
				data: [45, 25, 16, 36, 67, 18, 76],
				lineTension: 0.5,
				fill: false,
				borderDash: [5, 5],
				borderColor: "#FF7D4D",
				pointBorderColor: "#FF7D4D",
				pointBackgroundColor: "#FFF",
				pointBorderWidth: 2,
				pointHoverBorderWidth: 2,
				pointRadius: 4,
			}, {
				label: "30-35",
				data: [20, 15, 56, 46, 37, 28, 46],
				lineTension: 0.5,
				fill: false,
				borderDash: [5, 5],
				borderColor: "#e83e8c",
				pointBorderColor: "#FF7D4D",
				pointBackgroundColor: "#FFF",
				pointBorderWidth: 2,
				pointHoverBorderWidth: 2,
				pointRadius: 4,
			}, {
				label: ">35",
				data: [10, 20, 30, 46, 10, 20, 36],
				lineTension: 0.5,
				fill: false,
				borderDash: [5, 5],
				borderColor: "#666EE8",
				pointBorderColor: "#FF7D4D",
				pointBackgroundColor: "#FFF",
				pointBorderWidth: 2,
				pointHoverBorderWidth: 2,
				pointRadius: 4,
			}]
		};

		var config = {
			type: 'line',

			// Chart Options
			options : chartOptions,

			data : chartData
		};

		// Create the chart
		var lineChart = new Chart(ctx, config);
	}
</script>
<div class="row">
                      <div class="col-xl-6">
						  <div class="card-body chartjs">
							<canvas id="simple-pie-chart" height="400"></canvas>
						  </div>
                      </div>
                      <div class="col-xl-6">
						  <div class="card-body">
						  
						  <div class="card">
							  <div class="card-body">
								<div class="table-responsive">
								  <table class="table mb-0">
									<thead class="bg-yellow bg-lighten-4">
									  <tr>
										<th>No</th>
										<th>Golongan</th>
										<th>Customer Baru</th>
										<th>Persentase</th>
									  </tr>
									</thead>
									<tbody>
									<?php 
									$no = 1;
									foreach($list_data->result_array() as $key=>$row){ ?>
									  <tr>
										<td><?=$no++?></td>
										<td><?=$row['AGE']?></td>
										<td><?=number_format($row['CT'],'0',',','.')?></td>
										<td><?=number_format(($row['CT']/$total_ct)*100,'2',',','.');?>%</td>
									  </tr>
									<?php } ?>
									</tbody>
									<tfoot class="bg-yellow bg-lighten-4">
									  <tr>
										<th></th>
										<th>Total</th>
										<th><?=number_format($total_ct,'0',',','.')?></th>
										<th>100%</th>
									  </tr>
									</tfoot>
								  </table>
								</div>
							  </div>
						  </div>
						  
						  </div>
                      </div>
                    </div>
                    <div class="row hidden">
                      <div class="col-xl-12">
						  <div class="card-body chartjs">
							<canvas id="line-chart" height="500"></canvas>
						  </div>
                      </div>
                    </div>