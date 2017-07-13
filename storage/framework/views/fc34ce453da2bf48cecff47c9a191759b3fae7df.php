<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TODS | IP Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="/css/buttons.dataTables.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->
</head>


<?php $__env->startSection('title'); ?>
  Ip Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body class="hold-transition skin-blue sidebar-mini">

    <!-- Content Header (Page header) -->
    <?php /*<section class="content-header">*/ ?>
      <?php /*<h1>*/ ?>
        <?php /*IP Profile*/ ?>
      <?php /*</h1>*/ ?>

    <?php /*</section>*/ ?>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo e('/images/'.$ips->image); ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo e($ips->name); ?></h3>

              <p class="text-muted text-center">Comprehensive Partner: <?php echo e($ips->comprehensive_partner); ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Regions</b> <a class="pull-right"><?php echo e($ips->regions); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Districts</b> <a class="pull-right"><?php echo e($ips->districts); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Health Facilities</b> <a class="pull-right"><?php echo e($totalFacilities); ?></a>
                </li>
                <li class="list-group-item">
                  <?php if($ips->funding_agency_id ==1): ?> <b>Funded by</b> <a class="pull-right">CDC</a>
                    <?php else: ?> <b>Funded by</b> <a class="pull-right">USAID</a>
                    <?php endif; ?>
                </li>
              </ul>

              <?php /*<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>*/ ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-file-text-o margin-r-5"></i> Vision</strong>
              <p class="text-muted">
                <?php echo e($ips->vision); ?>

              </p>

              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
              <p class="text-muted">
                <?php echo e($ips->location); ?>

              </p>

              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> More</strong>
              <p class="text-muted">
                <?php echo e($ips->about); ?>

              </p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#facilities" data-toggle="tab">Facilities</a></li>
              <li><a href="#allocation" data-toggle="tab">Facility Allocations</a></li>
              <li><a href="#home" data-toggle="tab">Partner Allocations</a></li>
              <li><a href="#pickups" data-toggle="tab">Pickup</a></li>
            </ul>
            <div class="tab-content">

              <!-- /.tab-pane FACILITIES SUPPORTED -->
              <div class="active tab-pane" id="facilities">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">HEALTH FACILITIES SUPPORTED BY <?php echo e($ips->name); ?></h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <?php if(!Empty($healthFacilities)): ?>

                      <table id="example2" class="table table-bordered table-striped">
                        <?php /*<?php echo $__env->make('layouts.ip_dashboard.ipAllocation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>*/ ?>
                        <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Name</th>
                          <th>Code</th>
                          <th>Facility Level</th>
                          <th>Sub-county</th>
                          <th>Status</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php ($i = 1); ?>
                        <?php foreach($healthFacilities as $facility): ?>
                            <tr>
                              <td><?php echo e($i); ?></td>
                              <td><?php echo e($facility->facilityName); ?></td>
                              <td><?php echo e($facility->code); ?></td>
                              <td><?php echo e($facility->levelName); ?></td>
                              <td><?php echo e($facility->subcountyName); ?></td>
                              <?php if($i == 1 || $i == 3): ?><td><p class="alert-danger">No Tools Delivered</p></td>
                              <?php else: ?><td><p class="alert-success">Tools Delivered</p></td>
                              <?php endif; ?>
                            </tr>
                            <?php ($i++); ?>
                        <?php endforeach; ?>

                        <tr style="font-weight: bold"> <td>TOTAL</td><td><?php echo e($totalFacilities); ?></td><td></td><td></td><td></td><td></td></tr>
                        </tbody>
                      </table>
                    <?php else: ?>
                      <div class="alert-danger">
                        <strong>No Facilities Found supported by <?php echo e($ips->name); ?>,
                          <a href="<?php echo e(url('facility')); ?>" style="color:greenyellow; text-decoration:underline "> ADD Facilities</a>
                        </strong>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>

              </div>
              <!-- /.tab-pane ALLOCATION -->
              <div class="tab-pane" id="allocation">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">FACILITY ALLOCATION FOR <?php echo e($ips->name); ?></h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                      <table id="example1" class="table table-bordered table-striped">
                        <?php /*<?php echo $__env->make('layouts.ip_dashboard.ipAllocation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>*/ ?>
                        <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>HMIS Tool</th>
                          <th>Facility Name</th>
                          <th>Facility Level</th>
                          <th>Quantity Allocated</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php ($i=1); ?>
                      <?php foreach($array as $arr): ?>
                        <?php /*<?php (print_r($arr['facilityName']."===>".$arr['toolName']."(".$arr['quantity'].")")); ?>*/ ?>
                          <tr>
                            <td><?php echo e($i); ?></td>
                            <td><?php echo e($arr['toolName']); ?></td>
                            <td><?php echo e($arr['facilityName']); ?></td>
                            <td><?php echo e($arr['facilityLevel']); ?></td>
                            <td><?php echo e($arr['quantity']); ?></td>
                          </tr>
                        <?php ($i++); ?>
                      <?php endforeach; ?>

                      <?php /*<?php ($all_data = []); ?>*/ ?>
                      <?php /*<?php ($tool_qty = 0); ?>*/ ?>
                      <?php /*<?php for($index = 0; $index < count($allocation); $index++): ?>*/ ?>
                        <?php /*<?php ($array = $allocation[$index]); ?>*/ ?>
                        <?php /*<?php foreach($array as $arr): ?>*/ ?>
                          <?php /*<?php ($v= get_object_vars($arr)); ?>*/ ?>
                          <?php /*<?php (print_r($v)); ?>*/ ?>
                        <?php /*<?php endforeach; ?>*/ ?>
                      <?php /*<?php endfor; ?>*/ ?>
                      <?php /*<?php foreach($allocation as $allocationData): ?>*/ ?>
                        <?php /*<?php (print_r($allocationData)); ?>*/ ?>
                      <?php /*<?php endforeach; ?>*/ ?>

                      <?php /*<table id="example1" class="table table-bordered table-striped">*/ ?>
                      <?php /*<?php echo $__env->make('layouts.ip_dashboard.ipAllocation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>*/ ?>
                      <?php /*<thead>*/ ?>
                      <?php /*<tr>*/ ?>
                        <?php /*<th style="width: 10px">#</th>*/ ?>
                        <?php /*<th>Date</th>*/ ?>
                        <?php /*<th>Tool</th>*/ ?>
                        <?php /*<th>Facility Name</th>*/ ?>
                        <?php /*<th>Level</th>*/ ?>
                        <?php /*<th>Quantity</th>*/ ?>
                        <?php /*<th>Total Allocated</th>*/ ?>
                        <?php /*<th>Allocated By</th>*/ ?>
                      <?php /*</tr>*/ ?>
                      <?php /*</thead>*/ ?>
                      <?php /*<tr>*/ ?>
                      <?php /*<?php ($toolsPerTool = []); ?> <!-- Create Empty array to hold total TOOL for each Facility Level-->*/ ?>
                      <?php /*<?php ($i = 1); ?>*/ ?>
                      <?php /*<?php ($totalAllocation = 0); ?>*/ ?>
                       <?php /*<?php foreach($allocation as $allocationData): ?>*/ ?>
                       <?php /*<?php foreach($array as $allocate): ?>*/ ?>
                          <?php /*<?php foreach($allocationData as $allocate): ?>*/ ?>
                            <?php /*<?php ($toolsPerTool[$allocate->toolName][] = $totalToolPerLevel); ?>*/ ?>
                            <?php /*<?php (print_r($toolsPerTool)); ?>*/ ?>
                              <?php /*<?php ($total = 0); ?>*/ ?>
                              <?php /*<?php ($index=0); ?>*/ ?>
                              <?php /*<?php foreach($toolsPerTool as $tool): ?>*/ ?>
                                <?php /*<?php ($total += $tool); ?>*/ ?>
                              <?php /*<?php endforeach; ?>*/ ?>


                              <?php /*<tr>*/ ?>
                                <?php /*<td><?php echo e($i); ?></td>*/ ?>
                                <?php /*<td><?php echo e($allocate->date_allocated); ?></td>*/ ?>
                                <?php /*<td><?php echo e($allocate->toolName); ?></td>*/ ?>
                                <?php /*<td><?php echo e($allocate->facilityName); ?></td>*/ ?>
                                <?php /*<td><?php echo e($allocate->facilityLevel); ?></td>*/ ?>
                                <?php /*<td><?php echo e($allocate->quantity); ?></td>*/ ?>
                                <?php /*<?php foreach($noFacilityLevel as $levels): ?>*/ ?>
                                  <?php /*<!-- Get Total Number of each tool to be given per facility Level-->*/ ?>
                                  <?php /*<?php if($levels->facilitylevel_id == $allocate->levelId): ?>*/ ?>
                                    <?php /*<td><?php echo e($totalToolPerLevel = ($levels->facilityLevel_count * $allocate->quantity)); ?></td>*/ ?>
                                  <?php /*<?php endif; ?>*/ ?>
                                <?php /*<?php endforeach; ?>*/ ?>
                                <?php /*<td><?php echo e($allocate->allocated_by); ?></td>*/ ?>
                                <?php /*<!--Create an Array total Number to be received by an IP of Each tool  -->*/ ?>

                              <?php /*</tr>*/ ?>

                        <?php /*<?php ($i++); ?>*/ ?>
                        <?php /*<?php ($totalAllocation+=$allocate->quantity); ?>*/ ?>
                       <?php /*<?php endforeach; ?>*/ ?>
                      <?php /*<?php endforeach; ?>*/ ?>
                      <?php /*<tr style="font-weight: bold"> <td>TOTAL</td><td></td><td></td><td></td><td><?php echo e($totalAllocation); ?></td><td></td><td></td></tr>*/ ?>
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
              <!-- /.tab-pane PICKUP-->

              <div class="tab-pane" id="pickups">


                <p>PICKUP CONTENT HERE</p>


              </div>
              <!-- /.tab-pane HOME -->
              <div class="tab-pane" id="home">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">PARTNER ALLOCATION ( <?php echo e($ips->name); ?> )</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table id="example3" class="table table-bordered table-striped">
                      <?php /*<?php echo $__env->make('layouts.ip_dashboard.ipAllocation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>*/ ?>
                      <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>HMIS Tools</th>
                        <th>Quantity Allocated</th>
                        <th>Pack Size</th>
                        <th>Packs</th>
                        <th>Pieces</th>
                      </tr>
                      </thead>
                      <tbody>

                      <?php ($i=1); ?>
                      <?php foreach($all_allocation as $key=>$value): ?>
                        <?php ($toolName = explode("|",$key)[1]); ?>

                        <tr>
                          <td><?php echo e($i); ?></td>
                          <td><?php echo e($toolName); ?></td>
                          <td><?php echo e($value); ?></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <?php ($i++); ?>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>


              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>




  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

    <!-- jQuery 1.12.4 -->
    <?php /*<script src="https://code.jquery.com/jquery-1.12.4.js"></script>*/ ?>
    <?php /*<script src="https://cdn.datatables.net/1.10.14/js/jquery.dataTables.min.js"></script>*/ ?>
<!-- jQuery 2.2.3 -->
<script src="/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/bower_components/AdminLTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/bower_components/AdminLTE/dist/js/app.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="/bower_components/AdminLTE/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/bower_components/AdminLTE/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!--EXPORT PRINT BUTTON-->
    <script src="/js/buttons.html5.min.js"></script>
    <script src="/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script src="/js/jszip.min.js"></script>
    <script src="/js/pdfmake.min.js"></script>
<!-- SlimScroll -->
<script src="/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>

<!-- page script -->
<script>
    $(function () {
        $("#example3").DataTable({
            "pageLength": 15,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
            });
        $("#example1").DataTable({
            dom: 'Bfrtip',
            "pageLength": 15,
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
       });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "pageLength": 15,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]

//            buttons: [
//                { extend: 'create', editor: editor },
//                { extend: 'edit',   editor: editor },
//                { extend: 'remove', editor: editor },
//                {
//                    extend: 'collection',
//                    text: 'Export',
//                    buttons: [
//                        'copy',
//                        'excel',
//                        'csv',
//                        'pdf',
//                        'print'
//                    ]
//                }
//            ]
        });
    });
</script>

</body>
<?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>