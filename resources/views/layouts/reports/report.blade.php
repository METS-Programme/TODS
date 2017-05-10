
@extends('layouts.master')

@section('title')
    <h4>Tods Reports</h4>
@endsection

@section('content')
 <body>

 <div class="row">
     <div class="col-md-6">
         <!-- Line chart -->
         <div class="box box-primary">
             <div class="box-header with-border">
                 <i class="fa fa-bar-chart-o"></i>

                 <h3 class="box-title">Line Chart Distributions</h3>

                 <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                     </button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                 </div>
             </div>
             <div class="box-body">
                 <div id="line-chart" style="height: 300px;"></div>
             </div>
             <!-- /.box-body-->
         </div>
         <!-- /.box -->

     </div>
     <!-- /.col -->

     <div class="col-md-6">
         <!-- Bar chart -->
         <div class="box box-primary">
             <div class="box-header with-border">
                 <i class="fa fa-bar-chart-o"></i>

                 <h3 class="box-title">Bar Chart Showing Stock Levels</h3>

                 <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                     </button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                 </div>
             </div>
             <div class="box-body">
                 <div id="bar-chart" style="height: 300px;"></div>
             </div>
             <!-- /.box-body-->
         </div>
         <!-- /.box -->
     </div>
 </div>

    <!-- jQuery 2.2.3 -->
    <script src="/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/bower_components/AdminLTE/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/bower_components/AdminLTE/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/bower_components/AdminLTE/dist/js/demo.js"></script>
     <!-- FLOT CHARTS -->
     <script src="/bower_components/AdminLTE/plugins/flot/jquery.flot.min.js"></script>
     <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
     <script src="/bower_components/AdminLTE/plugins/flot/jquery.flot.resize.min.js"></script>
     <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
     <script src="/bower_components/AdminLTE/plugins/flot/jquery.flot.pie.min.js"></script>
     <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
     <script src="/bower_components/AdminLTE/plugins/flot/jquery.flot.categories.min.js"></script>
     <!-- Page script -->
         <script>
             $(function () {
                 /*
                  * Flot Interactive Chart
                  * -----------------------
                  */
                 // We use an inline data source in the example, usually data would
                 // be fetched from a server
                 var data = [], totalPoints = 100;
                 /*
                  * LINE CHART
                  * ----------
                  */
                 //LINE randomly generated data

                 var sin = [], cos = [];
                 for (var i = 0; i < 14; i += 0.5) {
                     sin.push([i, Math.sin(i)]);
                     cos.push([i, Math.cos(i)]);
                 }
                 var line_data1 = {
                     data: sin,
                     color: "#3c8dbc"
                 };
                 var line_data2 = {
                     data: cos,
                     color: "#00c0ef"
                 };
                 $.plot("#line-chart", [line_data1, line_data2], {
                     grid: {
                         hoverable: true,
                         borderColor: "#f3f3f3",
                         borderWidth: 1,
                         tickColor: "#f3f3f3"
                     },
                     series: {
                         shadowSize: 0,
                         lines: {
                             show: true
                         },
                         points: {
                             show: true
                         }
                     },
                     lines: {
                         fill: false,
                         color: ["#3c8dbc", "#f56954"]
                     },
                     yaxis: {
                         show: true,
                     },
                     xaxis: {
                         show: true
                     }
                 });
                 //Initialize tooltip on hover
                 $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
                     position: "absolute",
                     display: "none",
                     opacity: 0.8
                 }).appendTo("body");
                 $("#line-chart").bind("plothover", function (event, pos, item) {

                     if (item) {
                         var x = item.datapoint[0].toFixed(2),
                             y = item.datapoint[1].toFixed(2);

                         $("#line-chart-tooltip").html(item.series.label + " of " + x + " = " + y)
                             .css({top: item.pageY + 5, left: item.pageX + 5})
                             .fadeIn(200);
                     } else {
                         $("#line-chart-tooltip").hide();
                     }

                 });
                 /* END LINE CHART */

                 /*
                  * BAR CHART
                  * ---------
                  */

                 var bar_data = {
                     data: [["January", 10], ["February", 8], ["March", 4], ["April", 13], ["May", 17], ["June", 9]],
                     color: "#3c8dbc"
                 };
                 $.plot("#bar-chart", [bar_data], {
                     grid: {
                         borderWidth: 1,
                         borderColor: "#f3f3f3",
                         tickColor: "#f3f3f3"
                     },
                     series: {
                         bars: {
                             show: true,
                             barWidth: 0.5,
                             align: "center"
                         }
                     },
                     xaxis: {
                         mode: "categories",
                         tickLength: 0
                     }
                 });
                 /* END BAR CHART */
             });

//             function labelFormatter(label, series) {
//                 return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
//                     + label
//                     + "<br>"
//                     + Math.round(series.percent) + "%</div>";
//             }
         </script>
  </body>
    @endsection