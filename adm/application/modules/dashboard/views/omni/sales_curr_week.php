<div class="card">
    <div class="card-header">
    <h4 class="card-title">Sales Wahyu</h4>
    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
    <div class="heading-elements">
        <ul class="list-inline mb-0">
        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
        </ul>
    </div>
    </div>
    <div class="card-content collapse show">
    <div class="card-body pt-0">
        <div class="row mb-1">
        <div class="col-6 col-md-4">
            <h5>Current week</h5>
            <h2 class="danger">Rp. 82,124</h2>
        </div>
        <div class="col-6 col-md-4">
            <h5>Previous week</h5>
            <h2 class="text-muted">Rp. 52,502</h2>
        </div>
        </div>
        <div class="chartjs">
        <canvas id="thisWeekSales" width="400" style="position: absolute;"> ok </canvas>
        <canvas id="lastWeekSales" width="400"></canvas>
        </div>
    </div>
    </div>
</div>
<script>
    $(document).ready(function () {
            
        Chart.controllers.derivedLine = custom;
        var ctx = document.querySelector("#thisWeekSales").getContext('2d');
        var thisWeekSalesChart = new Chart(ctx, {
            type: 'derivedLine',
            data: {
                labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun", "Mon"],
                datasets: [{
                    data: [5000, 10000, 4000, 14500, 8000, 18500, 8000, 20000],
                    borderWidth: 4,
                    borderColor: '#FF4961',
                    pointBackgroundColor: "#FFF",
                    pointBorderColor: "#FF4961",
                    pointHoverBackgroundColor: "#FFF",
                    pointHoverBorderColor: "#FF4961",
                    pointRadius: 0,
                    pointHoverRadius: 6,
                    fill: false,
                }]
            },
            options: {
                responsive: true,
                tooltips: {
                    displayColors: false,
                    callbacks: {
                        label: function(e, d) {
                            // return '${e.xLabel} : ${e.yLabel}'
                        },
                        title: function() {
                            return;
                        }
                    }
                },
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false,
                        },
                    }],
                    yAxes: [{
                        ticks: {
                            padding: 10,
                            stepSize: 5000,
                            max: 20000,
                            min: 0,
                        },
                        gridLines: {
                            display: true,
                            drawBorder: false,
                            lineWidth: 1,
                            zeroLineColor: '#e5e5e5',
                        }
                    }]
                }
            }
        });
        // var ctx2 = document.querySelector("#lastWeekSales").getContext('2d');
        // var lastWeekSalesChart = new Chart(ctx2, {
        //     type: 'line',
        //     data: {
        //         labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun", "Mon"],
        //         datasets: [{
        //             data: [7000, 15000, 6000, 10500, 3000, 11500, 4000, 10000],
        //             borderWidth: 4,
        //             borderDash: [8, 4],
        //             borderColor: '#c3c3c3',
        //             pointBackgroundColor: "#FFF",
        //             pointBorderColor: "#c3c3c3",
        //             pointHoverBackgroundColor: "#FFF",
        //             pointHoverBorderColor: "#c3c3c3",
        //             pointRadius: 0,
        //             pointHoverRadius: 6,
        //             fill: false,
        //         }]
        //     },
        //     options: {
        //         responsive: true,
        //         tooltips: {
        //             displayColors: false,
        //             callbacks: {
        //                 label: function(e, d) {
        //                     // return '${e.xLabel} : ${e.yLabel}'
        //                 },
        //                 title: function() {
        //                     return;
        //                 }
        //             }
        //         },
        //         legend: {
        //             display: false
        //         },
        //         scales: {
        //             xAxes: [{
        //                 gridLines: {
        //                     display: false,
        //                 },
        //             }],
        //             yAxes: [{
        //                 ticks: {
        //                     padding: 10,
        //                     stepSize: 5000,
        //                     max: 20000,
        //                     min: 0,
        //                 },
        //                 gridLines: {
        //                     display: true,
        //                     drawBorder: false,
        //                     zeroLineColor: '#e5e5e5',
        //                 }
        //             }]
        //         }
        //     }
        // });
    
	});
</script>