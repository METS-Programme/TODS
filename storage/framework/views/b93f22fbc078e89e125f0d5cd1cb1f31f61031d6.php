<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <?php /*<div class="user-panel">*/ ?>
            <?php /*<div class="pull-left image">*/ ?>
                <?php /*<img src="<?php echo e(asset("/bower_components/AdminLTE/dist/img/avatar.png")); ?>" class="img-circle" alt="User Image" />*/ ?>
            <?php /*</div>*/ ?>
            <?php /*<div class="pull-left info">*/ ?>
                <?php /*<p>Admin</p>*/ ?>
                <?php /*<!-- Status -->*/ ?>
                <?php /*<a href="#"><i class="fa fa-circle text-success"></i> On</a>*/ ?>
            <?php /*</div>*/ ?>
        <?php /*</div>*/ ?>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
</span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="/"><i class="fa fa-dashboard"></i> <span>HOME</span></a></li>
            <li class="treeview">
                <a href="#"> <i class="fa fa-edit"></i> <span>METS ORDERS</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('printorderCRUD')); ?>"><i class="fa fa-circle-o text-red"></i><span>Print Orders</span></a></li>
                    <li><a href="<?php echo e(url('deliveryCRUD')); ?>"><i class="fa fa-circle-o text-yellow"></i><span>Deliveries</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"> <i class="fa fa-edit"></i> <span>IP ORDERS</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('printorderCRUD')); ?>"><i class="fa fa-circle-o text-red"></i><span>Tool Ordering</span></a></li>
                    <li><a href="<?php echo e(url('deliveryCRUD')); ?>"><i class="fa fa-circle-o text-yellow"></i><span>Tool Pick-ups</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"> <i class="fa fa-edit"></i> <span>TOOLS</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('allocations')); ?>"><i class="fa fa-circle-o text-aqua"></i><span>Allocation</span></a></li>
                    <?php /*<li><a href="<?php echo e(url('tool-distribution')); ?>"><i class="fa fa-circle-o text-aqua"></i><span>Tool Distribution</span></a></li>*/ ?>
                    <?php /*<li><a href="<?php echo e(url('tool-ordering')); ?>"><i class="fa fa-circle-o text-blue"></i><span>Tool Ordering</span></a></li>*/ ?>
                    <?php /*<li><a href="<?php echo e(url('tools-picked')); ?>"><i class="fa fa-circle-o text-green"></i><span>Tool Pickup</span></a></li>*/ ?>
                    <li><a href="<?php echo e(url('tools')); ?>"><i class="fa fa-circle-o text-purple"></i><span>Tools</span></a></li>
                    <li><a href="<?php echo e(url('ips')); ?>"><i class="fa fa-circle-o text-aqua"></i><span>Implementing Partners</span></a></li>
                    <li><a href="<?php echo e(url('facility')); ?>"><i class="fa fa-circle-o text-maroon"></i><span>Facility</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>REPORTS</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="reports"><i class="fa fa-circle-o text-green"></i>Delivery Report</a></li>
                    <li><a href="reports"><i class="fa fa-circle-o text-purple"></i>Pickup Report</a></li>
                    <li><a href="reports"><i class="fa fa-circle-o text-blue"></i>Distribution Report</a></li>
                    <li><a href="reports"><i class="fa fa-circle-o text-maroon"></i>Stock Levels</a></li>
                </ul>
            </li>
            <li> <a href="people"><i class="fa fa-user"></i> <span>Users</span></a></li>
            <li> <a href="#"><i class="fa fa-envelope"></i> <span>Contact Us</span></a></li>
            <?php /*<li> <a href="http://localhost:8000/bower_components/AdminLTE/index2.html"><i class="fa "></i> <span>Admin LTE</span></a></li>*/ ?>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
