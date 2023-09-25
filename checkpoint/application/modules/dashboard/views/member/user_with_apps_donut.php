<script>
$(document).ready(function () {
	// alert();
	load_user_pie();
});

function load_user_pie()
	{
   // Callback that creates and populates a data table, instantiates the donut chart, passes in the data and draws it.
    var donutChart = c3.generate({
        bindto: '#user-donut-chart',
        color: {
            pattern: ['#99B898','#FECEA8','#53b8f9','#FF847C']
        },
		
		<?php 
		$pie_data = '';
			foreach($list_chart->result_array() as $xkey=>$row){
				if($xkey>0){
					$pie_data .= ',';
				}
				$pie_data .= '["'.$row['LoginType'].'", '.$row['Count'].']';
			}
		 ?>
		 
        // Create the data table.
        data: {
            columns: [
                <?= $pie_data ?>
                // ['data1', 30],
                // ['data2', 120],
                // ['data3', 150],
                // ['data4', 50],
            ],
            type : 'donut',
            onclick: function (d, i) { console.log("onclick", d, i); },
            onmouseover: function (d, i) { console.log("onmouseover", d, i); },
            onmouseout: function (d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            title: "<?=$main_chart['title']?>"
        }
    });

    // Instantiate and draw our chart, passing in some options.
    // setTimeout(function () {
        // donutChart.load({
            // columns: [
                // ["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                // ["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
                // ["virginica", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
            // ]
        // });
    // }, 1500);

    // setTimeout(function () {
        // donutChart.unload({
            // ids: 'data1'
        // });
        // donutChart.unload({
            // ids: 'data2'
        // });
    // }, 2500);

    // Resize chart on sidebar width change
    $(".menu-toggle").on('click', function() {
        donutChart.resize();
    }); 
}
</script>
<div class="row">  
	<div class="col-xl-6">
	  <div class="card-body">	  
		  <div class="card">
			  <div class="card-body">
				<div class="table-responsive">
				  <table class="table mb-0">
					<thead class="bg-yellow bg-lighten-4">
					  <tr>
						<th>No</th>
						<th>Groups</th>
						<th>Value</th>
						<th>Percent</th>
					  </tr>
					</thead>
					<tbody>
					<?php 
					$no = 1;
					foreach($list_chart->result_array() as $key=>$row){ ?>
					  <tr>
						<td><?=$no++?></td>
						<td><?=$row['LoginType']?></td>
						<td style="text-align: right;"><?=number_format($row['Count'],'0',',','.')?></td>
						<td style="text-align: right;"><?=number_format(($row['Count']/$total_ct)*100,'2',',','.');?>%</td>
					  </tr>
					<?php } ?>
					</tbody>
					<tfoot class="bg-yellow bg-lighten-4">
					  <tr>
						<th></th>
						<th>Total</th>
						<th style="text-align: right;"><?=number_format($total_ct,'0',',','.')?></th>
						<th style="text-align: right;">100%</th>
					  </tr>
					</tfoot>
				  </table>
				</div>
			  </div>
		  </div>	  
	  </div>
    </div>
	
	<div class="col-xl-6">
	  <div class="card-body">
	  <div id="user-donut-chart" class="height-250"> </div>	
	  </div>
	</div>
</div>