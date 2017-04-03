<!-- /.box-header -->
<div class="box-body no-padding">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Names</th>
            <th>Comprehensive Partner</th>
            <th>Funding Agency</th>
            <th>Date Joined</th>
            <th>Operations</th>
        </tr>
        </thead>
        <tbody>
        <?php ($i = 1); ?>
        <?php foreach($ips as $ip): ?>
            <tr>
                <td><?php echo e($i); ?></td>
                <td><a href="#"><?php echo e($ip['name']); ?></a></td>
                <td><?php echo e($ip['comprehensive_partner']); ?></td>
                <td>
                    <?php echo e($ip['funding_agency']['short_name']); ?>

                </td>
                <td><?php echo e($ip['created_at']); ?></td>
                <td colspan="2">
                    <a href="#" class="btn btn-default btn-sm">View List & Print
                        <span class="glyphicon glyphicon-eye-open"></span>
                        <span class="glyphicon glyphicon-print"></span>
                    </a>
                </td>
            </tr>
            <?php ($i++); ?>
        @endforech
        </tbody>
    </table>
</div>
<!-- /.box-body -->