<?php $__env->startSection('title'); ?>
  HOME
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <body>
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="glyphicon glyphicon-tasks small"></i></span>

            <div class="info-box-content">
                <a href="/tools"><span class="info-box-text">Tools Available</span></a>
              <span class="info-box-number"><?php echo e(number_format($totalStock)); ?><small> tools</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-truck small"></i></span>

              <div class="info-box-content">
                  <a href="/printorderCRUD"><span class="info-box-text">ORDERED FOR PRINTING</span></a>
                  <?php if(isset($printOrders->total_tools_ordered)): ?>
                      <span class="info-box-number"><?php echo e(number_format($printOrders->total_tools_ordered)); ?> <small>tools</small></span>
                  <?php else: ?>
                      <span class="info-box-number">0 <small>tools</small></span>
                  <?php endif; ?>
              </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

              <div class="info-box-content">
                  <a href="/deliveryCRUD"><span class="info-box-text">Total Deliveries</span></a>
                  <?php if(isset($deliveries->total_tools_delivered)): ?>
                    <span class="info-box-number"><?php echo e(number_format($deliveries->total_tools_delivered)); ?> <small>tools</small></span>
                      <?php else: ?>
                      <span class="info-box-number">0 <small>tools</small></span>
                  <?php endif; ?>
              </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                  <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-warning-sign small"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Critical Tool</span>
                      <?php /*<span class="info-box-number">10<small>%</small></span>*/ ?>
                      <?php foreach($criticalStock as $critical): ?>
                          <span class="info-box-number"><?php echo e($critical->stock_status); ?> <small> (<?php echo e($critical->code); ?> <?php echo e($critical->name); ?>)</small></span>
                      <?php endforeach; ?>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
      </div>
      <?php /*<div class="row">*/ ?>
        <?php /*<div class="col-md-12">*/ ?>
          <?php /*<div class="box box-primary" >*/ ?>
            <?php /*<div class="box-header with-border">*/ ?>
              <?php /*<h3 class="box-title">Stock Levels Per Store</h3>*/ ?>

              <?php /*<div class="box-tools pull-right">*/ ?>
                <?php /*<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>*/ ?>
                <?php /*</button>*/ ?>
                <?php /*<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/ ?>
              <?php /*</div>*/ ?>
            <?php /*</div>*/ ?>
            <?php /*<!-- /.box-header -->*/ ?>
            <?php /*<!-- ./box-body -->*/ ?>
            <?php /*<div class="box-footer">*/ ?>
              <?php /*<div class="row">*/ ?>
                <?php /*<div class="col-sm-3 col-xs-6">*/ ?>
                  <?php /*<div class="description-block border-right">*/ ?>
                    <?php /*<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 30%</span>*/ ?>
                    <?php /*<h5 class="description-header">3,000</h5>*/ ?>
                    <?php /*<span class="description-text">INDUSTRIAL AREA</span>*/ ?>
                  <?php /*</div>*/ ?>
                  <?php /*<!-- /.description-block -->*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<!-- /.col -->*/ ?>
                <?php /*<div class="col-sm-3 col-xs-6">*/ ?>
                  <?php /*<div class="description-block border-right">*/ ?>
                    <?php /*<span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 22%</span>*/ ?>
                    <?php /*<h5 class="description-header">1,800</h5>*/ ?>
                    <?php /*<span class="description-text">CONTAINER 1</span>*/ ?>
                  <?php /*</div>*/ ?>
                  <?php /*<!-- /.description-block -->*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<!-- /.col -->*/ ?>
                <?php /*<div class="col-sm-3 col-xs-6">*/ ?>
                  <?php /*<div class="description-block border-right">*/ ?>
                    <?php /*<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 18%</span>*/ ?>
                    <?php /*<h5 class="description-header">1,050</h5>*/ ?>
                    <?php /*<span class="description-text">CONTAINER 3</span>*/ ?>
                  <?php /*</div>*/ ?>
                  <?php /*<!-- /.description-block -->*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<!-- /.col -->*/ ?>
                <?php /*<div class="col-sm-3 col-xs-6">*/ ?>
                  <?php /*<div class="description-block">*/ ?>
                    <?php /*<span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 20%</span>*/ ?>
                    <?php /*<h5 class="description-header">1,350</h5>*/ ?>
                    <?php /*<span class="description-text">CONTAINER 3</span>*/ ?>
                  <?php /*</div>*/ ?>
                  <?php /*<!-- /.description-block -->*/ ?>
                <?php /*</div>*/ ?>
              <?php /*</div>*/ ?>
              <?php /*<!-- /.row -->*/ ?>
            <?php /*</div>*/ ?>
            <?php /*<!-- /.box-footer -->*/ ?>
          <?php /*</div>*/ ?>
          <?php /*<!-- /.box -->*/ ?>
        <?php /*</div>*/ ?>
        <?php /*<!-- /.col -->*/ ?>
      <?php /*</div>*/ ?>

      <!-- TABLE: LATEST ORDERS -->
      <div class="row">
      <div class="col-md-8">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Implementing Partner List</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

        <?php /*Include the Available Tools Table*/ ?>
        <div class="box-body no-padding">
          <table id="example" class="table table-bordered table-striped">
            <?php echo $__env->make('layouts.tools_available.availableTools', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </table>
        </div>

        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <?php /*<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Action</a>*/ ?>
          <a href="/ips" class="btn btn-sm btn-info btn-flat pull-right">view all</a>
        </div>
        <!-- /.box-footer -->
      </div>
      </div>

     <div class="col-md-4">
       <div class="box box-danger">
         <div class="box-header with-border">
           <h3 class="box-title">Stock Status Updates</h3>

           <div class="box-tools pull-right">
             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
             </button>
             <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
           </div>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
           <ul class="products-list product-list-in-box">
               <?php ($i=0); ?>
               <?php foreach($stockStatus as $toolStatus): ?>
                 <li class="item">
                   <div class="product-info">
                     <a href="javascript:void(0)" class="product-title"><?php echo e($toolStatus->code); ?> <?php echo e($toolStatus->name); ?>

                       <span class="label
                        <?php if($i==4): ?>label-success
                        <?php elseif($i==3): ?>label-success
                         <?php elseif($i==2): ?>label-info
                         <?php elseif($i==1): ?>label-warning
                         <?php elseif($i==0): ?>label-danger
                         <?php endif; ?>
                            pull-right">
                           <?php echo e(number_format($toolStatus->stock_status)); ?>

                       </span>
                     </a>
                     <span class="product-description">
                              <?php echo e($toolStatus->specification); ?>

                            </span>
                   </div>
                 </li>
                <?php ($i++); ?>
               <?php endforeach; ?>
             <!-- /.item -->
             <?php /*<li class="item">*/ ?>
               <?php /*<div class="product-info">*/ ?>
                 <?php /*<a href="javascript:void(0)" class="product-title">ART Transfer Form*/ ?>
                   <?php /*<span class="label label-info pull-right">700</span></a>*/ ?>
                 <?php /*<span class="product-description">*/ ?>
                          <?php /*Comprehensive ART Transfer Form*/ ?>
                        <?php /*</span>*/ ?>
               <?php /*</div>*/ ?>
             <?php /*</li>*/ ?>
             <?php /*<!-- /.item -->*/ ?>
             <?php /*<li class="item">*/ ?>
               <?php /*<div class="product-info">*/ ?>
                 <?php /*<a href="javascript:void(0)" class="product-title">HMIS Form 033b <span class="label label-danger pull-right">350</span></a>*/ ?>
                 <?php /*<span class="product-description">*/ ?>
                          <?php /*Health Unit Weekly Epidemological Surveillance Report*/ ?>
                        <?php /*</span>*/ ?>
               <?php /*</div>*/ ?>
             <?php /*</li>*/ ?>
             <?php /*<!-- /.item -->*/ ?>
             <?php /*<li class="item">*/ ?>
               <?php /*<div class="product-info">*/ ?>
                 <?php /*<a href="javascript:void(0)" class="product-title">HMIS Form 035*/ ?>
                   <?php /*<span class="label label-success pull-right">399</span></a>*/ ?>
                 <?php /*<span class="product-description">*/ ?>
                          <?php /*Safe Male Circumcision Register*/ ?>
                        <?php /*</span>*/ ?>
               <?php /*</div>*/ ?>
             <?php /*</li>*/ ?>
             <?php /*<li class="item">*/ ?>
               <?php /*<div class="product-info">*/ ?>
                 <?php /*<a href="javascript:void(0)" class="product-title">HMIS Form 036*/ ?>
                   <?php /*<span class="label label-success pull-right">$399</span></a>*/ ?>
                 <?php /*<span class="product-description">*/ ?>
                          <?php /*Post Exposure Prophylaxis Register*/ ?>
                        <?php /*</span>*/ ?>
               <?php /*</div>*/ ?>
             <?php /*</li>*/ ?>
             <!-- /.item -->
           </ul>
         </div>
         <!-- /.box-body -->
         <div class="box-footer text-center">
             <a href="/tools" class="btn btn-sm btn-info btn-flat pull-right">view more</a>
         </div>
         <!-- /.box-footer -->
       </div>
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
      <!-- page script -->
      <script>
          $(function () {
              $("#example1").DataTable();
              $('#example2').DataTable({
                  "paging": true,
                  "lengthChange": false,
                  "searching": false,
                  "ordering": true,
                  "info": true,
                  "autoWidth": false
              });
          });
      </script>
  </body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>