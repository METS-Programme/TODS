<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/AdminLTE/dist/img/avatar.png") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> On</a>
            </div>
        </div>

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
            <li class="active">
                <a href="home"><i class="fa fa-dashboard"></i> <span>HOME</span></a></li>
            <!--<li><a href="#"><span>Another Link</span></a></li>-->
            <li class="treeview">
                <a href="#"> <i class="fa fa-edit"></i> <span>ENTRY FORMS</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i><span>Print Orders</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i><span>Print Order Deliveries</span></a></li>
                    <li><a href="tool-distribution"><i class="fa fa-circle-o text-aqua"></i><span>Tool Distribution</span></a></li>
                    <li><a href="tool-ordering"><i class="fa fa-circle-o text-blue"></i><span>Tool Ordering</span></a></li>
                    <li><a href="tool-pickup"><i class="fa fa-circle-o text-green"></i><span>Tool Pickup</span></a></li>
                    <li><a href="tool-registration"><i class="fa fa-circle-o text-purple"></i><span>Tool Registration</span></a></li>
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
                    <li><a href="#"><i class="fa fa-circle-o"></i>Delivery Report</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Pickup Report</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Distribution Report</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Stock Levels</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>USERS</span>
                    <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="registration"><i class="fa fa-circle-o"></i>Add User</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>View Users</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>CONFIGURATIONS</span>
                    <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>System</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Roles</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Reports</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Others</a></li>
                </ul>
            </li>
            <li> <a href="#"><i class="fa fa-envelope"></i> <span>CONTACT US</span></a></li>
            <!--<li> <a href="/"><i class="fa fa-share"></i> <span>Logout</span></a></li>-->
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
