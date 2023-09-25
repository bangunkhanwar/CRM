<script>
$(document).ready(function () {
	// alert();
	load_weekly_pie();
	// load_weekly_line();
});

function load_weekly_pie()
	{

	//Get the context of the Chart canvas element we want to select
	var ctx = $("#user-pie-chart");

	// Chart Options
	var chartOptions = {
		responsive: true,
		maintainAspectRatio: false,
		responsiveAnimationDuration:500,
		title: {
			display: true,
			text: "<?=$main_chart['title']?>"
		}
	};

	// Chart Data
	var chartData = {
		labels: [<?=$main_chart['labels']?>],
		datasets: [{
			label: "",
			data: [<?=$main_chart['data']?>],
			backgroundColor: [<?=$main_chart['bgcolor']?>],
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
</script>
<div class="row">
  <div class="col-xl-6">
	  <div class="card-body chartjs">
		<canvas id="user-pie-chart" height="400"></canvas>
	  </div>
  </div>
</div>