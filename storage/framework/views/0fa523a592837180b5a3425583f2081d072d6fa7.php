<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo"><b>TODS</b></a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <?php /*<!-- Messages: style can be found in dropdown.less-->*/ ?>
                <?php /*<li class="dropdown messages-menu">*/ ?>
                    <?php /*<!-- Menu toggle button -->*/ ?>
                    <?php /*<a href="#" class="dropdown-toggle" data-toggle="dropdown">*/ ?>
                        <?php /*<i class="fa fa-envelope-o"></i>*/ ?>
                        <?php /*<span class="label label-success">4</span>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*<ul class="dropdown-menu">*/ ?>
                        <?php /*<li class="header">You have 4 messages</li>*/ ?>
                        <?php /*<li>*/ ?>
                            <?php /*<!-- inner menu: contains the messages -->*/ ?>
                            <?php /*<ul class="menu">*/ ?>
                                <?php /*<li><!-- start message -->*/ ?>
                                    <?php /*<a href="#">*/ ?>
                                        <?php /*<div class="pull-left">*/ ?>
                                            <?php /*<!-- User Image -->*/ ?>
                                            <?php /*<img src="<?php echo e(asset("/bower_components/AdminLTE/dist/img/avatar.png")); ?>" class="img-circle" alt="User Image"/>*/ ?>
                                        <?php /*</div>*/ ?>
                                        <?php /*<!-- Message title and timestamp -->*/ ?>
                                        <?php /*<h4>*/ ?>
                                            <?php /*Support Team*/ ?>
                                            <?php /*<small><i class="fa fa-clock-o"></i> 5 mins</small>*/ ?>
                                        <?php /*</h4>*/ ?>
                                        <?php /*<!-- The message -->*/ ?>
                                        <?php /*<p>Why not buy a new awesome theme?</p>*/ ?>
                                    <?php /*</a>*/ ?>
                                <?php /*</li><!-- end message -->*/ ?>
                            <?php /*</ul><!-- /.menu -->*/ ?>
                        <?php /*</li>*/ ?>
                        <?php /*<li class="footer"><a href="#">See All Messages</a></li>*/ ?>
                    <?php /*</ul>*/ ?>
                <?php /*</li><!-- /.messages-menu -->*/ ?>

                <?php /*<!-- Notifications Menu -->*/ ?>
                <?php /*<li class="dropdown notifications-menu">*/ ?>
                    <?php /*<!-- Menu toggle button -->*/ ?>
                    <?php /*<a href="#" class="dropdown-toggle" data-toggle="dropdown">*/ ?>
                        <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                        <?php /*<span class="label label-warning">10</span>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*<ul class="dropdown-menu">*/ ?>
                        <?php /*<li class="header">You have 10 notifications</li>*/ ?>
                        <?php /*<li>*/ ?>
                            <?php /*<!-- Inner Menu: contains the notifications -->*/ ?>
                            <?php /*<ul class="menu">*/ ?>
                                <?php /*<li><!-- start notification -->*/ ?>
                                    <?php /*<a href="#">*/ ?>
                                        <?php /*<i class="fa fa-users text-aqua"></i> 5 new members joined today*/ ?>
                                    <?php /*</a>*/ ?>
                                <?php /*</li><!-- end notification -->*/ ?>
                            <?php /*</ul>*/ ?>
                        <?php /*</li>*/ ?>
                        <?php /*<li class="footer"><a href="#">View all</a></li>*/ ?>
                    <?php /*</ul>*/ ?>
                <?php /*</li>*/ ?>
                <!-- Tasks Menu -->
                <?php /*<li class="dropdown tasks-menu">*/ ?>
                    <?php /*<!-- Menu Toggle Button -->*/ ?>
                    <?php /*<a href="#" class="dropdown-toggle" data-toggle="dropdown">*/ ?>
                        <?php /*<i class="fa fa-flag-o"></i>*/ ?>
                        <?php /*<span class="label label-danger">9</span>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*<ul class="dropdown-menu">*/ ?>
                        <?php /*<li class="header">You have 9 tasks</li>*/ ?>
                        <?php /*<li>*/ ?>
                            <?php /*<!-- Inner menu: contains the tasks -->*/ ?>
                            <?php /*<ul class="menu">*/ ?>
                                <?php /*<li><!-- Task item -->*/ ?>
                                    <?php /*<a href="#">*/ ?>
                                        <?php /*<!-- Task title and progress text -->*/ ?>
                                        <?php /*<h3>*/ ?>
                                            <?php /*Design some buttons*/ ?>
                                            <?php /*<small class="pull-right">20%</small>*/ ?>
                                        <?php /*</h3>*/ ?>
                                        <?php /*<!-- The progress bar -->*/ ?>
                                        <?php /*<div class="progress xs">*/ ?>
                                            <?php /*<!-- Change the css width attribute to simulate progress -->*/ ?>
                                            <?php /*<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">*/ ?>
                                                <?php /*<span class="sr-only">20% Complete</span>*/ ?>
                                            <?php /*</div>*/ ?>
                                        <?php /*</div>*/ ?>
                                    <?php /*</a>*/ ?>
                                <?php /*</li><!-- end task item -->*/ ?>
                            <?php /*</ul>*/ ?>
                        <?php /*</li>*/ ?>
                        <?php /*<li class="footer">*/ ?>
                            <?php /*<a href="#">View all tasks</a>*/ ?>
                        <?php /*</li>*/ ?>
                    <?php /*</ul>*/ ?>
                <?php /*</li>*/ ?>
                <!-- User Account Menu -->
                    <?php if(Auth::guest()): ?>
                        <ul class="nav navbar-nav navbar-right user user-menu">
                            <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                            <?php /*<li><a href="<?php echo e(url('/register')); ?>">Register</a></li>*/ ?>
                        </ul>
                    <?php else: ?>
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="<?php echo e(asset("/bower_components/AdminLTE/dist/img/avatar.png")); ?>" class="user-image" alt="User Image"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?php echo e(asset("/bower_components/AdminLTE/dist/img/avatar.png")); ?>" class="img-circle" alt="User Image" />
                                <p>
                                    <?php echo e(Auth::user()->name); ?>

                                    <small>Email: <?php echo e(Auth::user()->name); ?></small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo e(url('/logout')); ?>" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>


                <?php /*<ul class="nav navbar-nav navbar-right user user-menu">*/ ?>
                    <?php /*<!-- Authentication Links -->*/ ?>
                    <?php /*<?php if(Auth::guest()): ?>*/ ?>
                        <?php /*<li><a href="<?php echo e(url('/login')); ?>">Login</a></li>*/ ?>
                        <?php /*<li><a href="<?php echo e(url('/register')); ?>">Register</a></li>*/ ?>
                    <?php /*<?php else: ?>*/ ?>
                        <?php /*<li class="dropdown">*/ ?>
                            <?php /*<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">*/ ?>
                                <?php /*<?php echo e(Auth::user()->name); ?> <span class="caret"></span>*/ ?>
                            <?php /*</a>*/ ?>

                            <?php /*<ul class="dropdown-menu" role="menu">*/ ?>
                                <?php /*<li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>*/ ?>
                            <?php /*</ul>*/ ?>
                        <?php /*</li>*/ ?>
                    <?php /*<?php endif; ?>*/ ?>
                <?php /*</ul>*/ ?>
            </ul>
        </div>
    </nav>
</header>
