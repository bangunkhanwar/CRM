<script>
	$(document).ready(function () {
		reloadPage();
	});
	
	function reloadPage(){
        salesLoad();
	}
	function salesLoad(){
        $.post(site_url+"dashboard/omni/sales_curr_week"
			,{}
			,function(result) {
				$('#salesContainer').html(result);
				hideProgres();
			}					
			,"html"
		);
    }
</script>
<!-- Revenue, Hit Rate & Deals -->
<div class="row">
    <div class="col-xl-6 col-12" id="salesContainer">

    </div>
    <div class="col-xl-6 col-12">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-header bg-hexagons">
                <h4 class="card-title">Deals
                    <span class="danger">-12%</span>
                </h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
                </div>
                <div class="card-content collapse show bg-hexagons">
                <div class="card-body pt-0">
                    <div class="chartjs">
                    <canvas id="deals-rate-cont" height="275"></canvas>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content collapse show bg-gradient-directional-danger ">
                <div class="card-body bg-hexagons-danger">
                    <h4 class="card-title white">Served
                    <span class="white">-55%</span>
                    <span class="float-right">
                        <span class="white">152</span>
                        <span class="red lighten-4">/200</span>
                    </span>
                    </h4>
                    <div class="chartjs">
                    <canvas id="served-rate-cont" height="275"></canvas>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                <div class="media-body text-left">
                    <h6 class="text-muted">Order Value </h6>
                    <h3>$ 88,568</h3>
                </div>
                <div class="align-self-center">
                    <i class="icon-trophy success font-large-2 float-right"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                <div class="media-body text-left">
                    <h6 class="text-muted">Calls</h6>
                    <h3>3,568</h3>
                </div>
                <div class="align-self-center">
                    <i class="icon-call-in danger font-large-2 float-right"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!--/ Revenue, Hit Rate & Deals -->
<!-- Emails Products & Avg Deals -->
<div class="row">
    <div class="col-12 col-md-3">
    <div class="card">
        <div class="card-header">
        <h4 class="card-title">Emails</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
            </ul>
        </div>
        </div>
        <div class="card-content collapse show">
        <div class="card-body pt-0">
            <p>Open rate
            <span class="float-right text-bold-600">89%</span>
            </p>
            <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 80%"
            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="pt-1">Sent
            <span class="float-right">
                <span class="text-bold-600">310</span>/500</span>
            </p>
            <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%"
            aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="col-12 col-md-3">
    <div class="card">
        <div class="card-header">
        <h4 class="card-title">Top Products</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
            <li><a href="#">Show all</a></li>
            </ul>
        </div>
        </div>
        <div class="card-content collapse show">
        <div class="card-body p-0">
            <div class="table-responsive">
            <table class="table mb-0">
                <tbody>
                <tr>
                    <th scope="row" class="border-top-0">iPone X</th>
                    <td class="border-top-0">2245</td>
                </tr>
                <tr>
                    <th scope="row">One Plus</th>
                    <td>1850</td>
                </tr>
                <tr>
                    <th scope="row">Samsung S7</th>
                    <td>1550</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="col-12 col-md-6">
    <div class="card">
        <div class="card-header">
        <h4 class="card-title text-center">Average Deal Size</h4>
        </div>
        <div class="card-content collapse show">
        <div class="card-body pt-0">
            <div class="row">
            <div class="col-md-6 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                <h6 class="danger text-bold-600">-30%</h6>
                <h4 class="font-large-2 text-bold-400">$12,536</h4>
                <p class="blue-grey lighten-2 mb-0">Per rep</p>
            </div>
            <div class="col-md-6 col-12 text-center">
                <h6 class="success text-bold-600">12%</h6>
                <h4 class="font-large-2 text-bold-400">$18,548</h4>
                <p class="blue-grey lighten-2 mb-0">Per team</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!--/ Emails Products & Avg Deals -->
<!-- Total earning & Recent Sales  -->
<div class="row">
    <div class="col-12 col-md-4">
    <div class="card">
        <div class="card-content">
        <div class="earning-chart position-relative">
            <div class="chart-title position-absolute mt-2 ml-2">
            <h1 class="display-4">$1,596</h1>
            <span class="text-muted">Total Earning</span>
            </div>
            <canvas id="earning-chart" class="height-450"></canvas>
            <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3">
            <a href="#" class="btn round btn-danger mr-1 btn-glow">Statistics <i class="ft-bar-chart"></i></a>
            <span class="text-muted">for the <a href="#" class="danger darken-2">last year.</a></span>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div id="recent-sales" class="col-12 col-md-8">
    <div class="card">
        <div class="card-header">
        <h4 class="card-title">Recent Sales</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
            <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right"
                href="invoice-summary.html" target="_blank">View all</a></li>
            </ul>
        </div>
        </div>
        <div class="card-content mt-1">
        <div class="table-responsive">
            <table id="recent-orders" class="table table-hover table-xl mb-0">
            <thead>
                <tr>
                <th class="border-top-0">Product</th>
                <th class="border-top-0">Customers</th>
                <th class="border-top-0">Categories</th>
                <th class="border-top-0">Popularity</th>
                <th class="border-top-0">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="text-truncate">iPone X</td>
                <td class="text-truncate p-1">
                    <ul class="list-unstyled users-list m-0">
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                    class="avatar avatar-sm pull-up">
                        <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-4.png"
                        alt="Avatar">
                    </li>
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                    class="avatar avatar-sm pull-up">
                        <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-5.png"
                        alt="Avatar">
                    </li>
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones"
                    class="avatar avatar-sm pull-up">
                        <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-6.png"
                        alt="Avatar">
                    </li>
                    <li class="avatar avatar-sm">
                        <span class="badge badge-info">+8 more</span>
                    </li>
                    </ul>
                </td>
                <td>
                    <button type="button" class="btn btn-sm btn-outline-danger round">Mobile</button>
                </td>
                <td>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-truncate">$ 1200.00</td>
                </tr>
                <tr>
                <td class="text-truncate">iPad</td>
                <td class="text-truncate p-1">
                    <ul class="list-unstyled users-list m-0">
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                    class="avatar avatar-sm pull-up">
                        <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-7.png"
                        alt="Avatar">
                    </li>
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                    class="avatar avatar-sm pull-up">
                        <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-8.png"
                        alt="Avatar">
                    </li>
                    <li class="avatar avatar-sm">
                        <span class="badge badge-info">+5 more</span>
                    </li>
                    </ul>
                </td>
                <td>
                    <button type="button" class="btn btn-sm btn-outline-success round">Tablet</button>
                </td>
                <td>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-truncate">$ 1190.00</td>
                </tr>
                <tr>
                <td class="text-truncate">OnePlus</td>
                <td class="text-truncate p-1">
                    <ul class="list-unstyled users-list m-0">
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                    class="avatar avatar-sm pull-up">
                        <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-1.png"
                        alt="Avatar">
                    </li>
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                    class="avatar avatar-sm pull-up">
                        <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-2.png"
                        alt="Avatar">
                    </li>
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones"
                    class="avatar avatar-sm pull-up">
                        <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-3.png"
                        alt="Avatar">
                    </li>
                    <li class="avatar avatar-sm">
                        <span class="badge badge-info">+3 more</span>
                    </li>
                    </ul>
                </td>
                <td>
                    <button type="button" class="btn btn-sm btn-outline-danger round">Mobile</button>
                </td>
                <td>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 70%"
                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-truncate">$ 999.00</td>
                </tr>
                <tr>
                <td class="text-truncate">ZenPad</td>
                <td class="text-truncate p-1">
                    <ul class="list-unstyled users-list m-0">
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                    class="avatar avatar-sm pull-up">
                        <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-11.png"
                        alt="Avatar">
                    </li>
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                    class="avatar avatar-sm pull-up">
                        <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-12.png"
                        alt="Avatar">
                    </li>
                    </ul>
                </td>
                <td>
                    <button type="button" class="btn btn-sm btn-outline-success round">Tablet</button>
                </td>
                <td>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 65%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-truncate">$ 1150.00</td>
                </tr>
                <tr>
                <td class="text-truncate">Pixel 2</td>
                <td class="text-truncate p-1">
                    <ul class="list-unstyled users-list m-0">
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                    class="avatar avatar-sm pull-up">
                        <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-6.png"
                        alt="Avatar">
                    </li>
                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                    class="avatar avatar-sm pull-up">
                        <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-4.png"
                        alt="Avatar">
                    </li>
                    </ul>
                </td>
                <td>
                    <button type="button" class="btn btn-sm btn-outline-danger round">Mobile</button>
                </td>
                <td>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 45%"
                    aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td class="text-truncate">$ 1180.00</td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
<!--/ Total earning & Recent Sales  -->
<!-- Analytics map based session -->

<script>
/*=========================================================================================
    File Name: dashboard-analytics.js
    Description: intialize advance cards
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: Pixinvent
    Author URL: hhttp://www.themeforest.net/user/pixinvent
    ==========================================================================================*/
    $(window).on('load', function() {

    // Revenue - CharJS Line
    Chart.defaults.derivedLine = Chart.defaults.line;
    var draw = Chart.controllers.line.prototype.draw
    var custom = Chart.controllers.line.extend({
        draw: function() {
            draw.apply(this, arguments);
            var ctx = this.chart.chart.ctx;
            var _stroke = ctx.stroke;
            ctx.stroke = function() {
                ctx.save();
                ctx.shadowColor = '#ffb6c0';
                ctx.shadowBlur = 30;
                ctx.shadowOffsetX = 0;
                ctx.shadowOffsetY = 20;
                _stroke.apply(this, arguments)
                ctx.restore();
            }
        }
    });

    // Chart.controllers.derivedLine = custom;
    // var ctx = document.querySelector("#thisWeekSales").getContext('2d');
    // var thisWeekSalesChart = new Chart(ctx, {
    //     type: 'derivedLine',
    //     data: {
    //         labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun", "Mon"],
    //         datasets: [{
    //             data: [5000, 10000, 4000, 14500, 8000, 18500, 8000, 20000],
    //             borderWidth: 4,
    //             borderColor: '#FF4961',
    //             pointBackgroundColor: "#FFF",
    //             pointBorderColor: "#FF4961",
    //             pointHoverBackgroundColor: "#FFF",
    //             pointHoverBorderColor: "#FF4961",
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
    //                     lineWidth: 1,
    //                     zeroLineColor: '#e5e5e5',
    //                 }
    //             }]
    //         }
    //     }
    // });

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

    // Hit Rate Chart - CharJS Doughnut
    Chart.defaults.hitRateDoughnut = Chart.defaults.doughnut;
    var draw = Chart.controllers.doughnut.prototype.draw;    
    var customDoughnut = Chart.controllers.doughnut.extend({
        draw: function() {
            draw.apply(this, arguments);
            var ctx = this.chart.chart.ctx;
            var _fill = ctx.fill;
            var width = this.chart.width,
            height = this.chart.height;

            var fontSize = (height / 114).toFixed(2);
            this.chart.ctx.font = fontSize + "em Verdana";
            this.chart.ctx.textBaseline = "middle";

            var text = "82%",
            textX = Math.round((width - this.chart.ctx.measureText(text).width) / 2),
            textY = height / 2;            

            this.chart.ctx.fillText(text, textX, textY);

            ctx.fill = function() {
                ctx.save();
                ctx.shadowColor = '#bbbbbb';
                ctx.shadowBlur = 30;
                ctx.shadowOffsetX = 0;
                ctx.shadowOffsetY = 12;                
                _fill.apply(this, arguments)
                ctx.restore();
            }
        }
    });
    
    Chart.controllers.hitRateDoughnut = customDoughnut;
    var ctx = document.getElementById("deals-rate-cont");
    var myDoughnutChart = new Chart(ctx, {
        type: 'hitRateDoughnut',
        data: {
            labels: ["Remain", "Completed"],
            datasets: [{
                label: "Favourite",
                backgroundColor: ["#28D094", "#FF4961"],
                data: [18, 82],
            }]
        },
        options: {
            responsive: true,
            title: {
                display: false
            },
            legend: {
                display: false
            },
            layout: {
                padding: {
                    left: 16,
                    right: 16,
                    top: 16,
                    bottom: 16
                }
            },
            cutoutPercentage: 92,
            animation:{
                animateScale : false,
                duration: 2500
            }
        }
    });

    // Deals Chart - CharJS Doughnut
    Chart.defaults.dealsDoughnut = Chart.defaults.doughnut;
    var draw = Chart.controllers.doughnut.prototype.draw;    
    var customDealDoughnut = Chart.controllers.doughnut.extend({
        draw: function() {
            draw.apply(this, arguments);
            var ctx = this.chart.chart.ctx;
            var _fill = ctx.fill;
            var width = this.chart.width,
            height = this.chart.height;

            var fontSize = (height / 114).toFixed(2);
            this.chart.ctx.font = fontSize + "em Verdana";
            this.chart.ctx.textBaseline = "middle";

            var text = "76%",
            textX = Math.round((width - this.chart.ctx.measureText(text).width) / 2),
            textY = height / 2;            

            this.chart.ctx.fillText(text, textX, textY);

            ctx.fill = function() {
                ctx.save();
                ctx.shadowColor = '#FF4961';
                ctx.shadowBlur = 30;
                ctx.shadowOffsetX = 0;
                ctx.shadowOffsetY = 12;                
                _fill.apply(this, arguments)
                ctx.restore();
            }
        }
    });
    
    Chart.controllers.dealsDoughnut = customDealDoughnut;
    var ctx = document.getElementById("served-rate-cont");
    var myDoughnutChart = new Chart(ctx, {
        type: 'dealsDoughnut',
        data: {
            labels: ["Remain", "Completed"],
            datasets: [{
                label: "Favourite",
                borderWidth: 0,
                backgroundColor: ["#ff7b8c", "#FFF"],
                data: [24, 76],
            }]
        },
        options: {
            responsive: true,
            title: {
                display: false
            },
            legend: {
                display: false
            },
            layout: {
                padding: {
                    left: 16,
                    right: 16,
                    top: 16,
                    bottom: 16
                }
            },
            cutoutPercentage: 94,
            animation:{
                animateScale : false,
                duration: 5000
            }
        }
    });
    
    
    //Total Earnings
    
    var ctx3 = document.getElementById("earning-chart").getContext("2d");

    // Chart Options
    var earningOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(0,0,0,0.8)",
        legend: {
            display: false,
            position: 'bottom',
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 70
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 40,
            text: '82%'
        }
    };

    // Chart Data
    var earningData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            data: [28, 35, 36, 48, 46, 42, 60],
            backgroundColor: 'rgba(255,117,136,0.12)',
            borderColor: "#FF4961",
            borderWidth: 3,
            strokeColor : "#FF4961",
            capBezierPoints: true,
            pointColor : "#fff",
            pointBorderColor: "#FF4961",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 3,
            pointRadius: 5,
            pointHoverBackgroundColor: "#FFF",
            pointHoverBorderColor: "#FF4961",
            pointHoverRadius: 7,
        }]
    };

    var earningConfig = {
        type: 'line',

        // Chart Options
        options : earningOptions,

        // Chart Data
        data : earningData
    };

    // Create the chart
    var earningChart = new Chart(ctx3, earningConfig);
    
    
     
    // Vector Maps
    // -----------------------------------
    $('#world-map-markers').vectorMap({
      map: 'world_mill',
      backgroundColor: '#fff',
      zoomOnScroll: false,
      series: {
        regions: [{
          values: visitorData,
          scale: ['#ff7588', '#fddde1'],
          normalizeFunction: 'polynomial'
        }]
      },
      onRegionTipShow: function(e, el, code){
        el.html(el.html()+' (Visitor - '+visitorData[code]+')');
      }
    });

    
    //Sessions by Browser
    // -----------------------------------
    Morris.Donut({
        element: 'sessions-browser-donut-chart',
        data: [{
            label: "Chrome",
            value: 3500
        }, {
            label: "Firefox",
            value: 2500
        }, {
            label: "Safari",
            value: 2000
        }, {
            label: "Opera",
            value: 1000
        },{
            label: "Internet Explorer",
            value: 500
        } ],
        resize: true,
        colors: ['#40C7CA', '#FF7588', '#2DCEE3', '#FFA87D', '#16D39A']
    });
});
</script>