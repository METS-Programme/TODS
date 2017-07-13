<!-- /.box-header -->
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Names</th>
            <th>Comprehensive Partner</th>
            <?php /*<th>Funding Agency</th>*/ ?>
            <th>Date Joined</th>
            <th>Operations</th>
        </tr>
        </thead>
        <tbody>
        <?php ($i = 1); ?>
        <?php foreach($ips as $ip): ?>
            <tr>
                <td><?php echo e($i); ?></td>
                <td><a href="<?php echo e(route('ips.show',$ip['ip_id'])); ?>"><?php echo e($ip['name']); ?></a></td>
                <td><?php echo e($ip['comprehensive_partner']); ?></td>
                <?php /*<td>*/ ?>
                    <?php /*<?php echo e($ip['funding_agency_id']); ?>*/ ?>
                <?php /*</td>*/ ?>
                <td><?php echo e($ip['created_at']); ?></td>
                <td colspan="2">
                    <a href="<?php echo e(route('ips.show',$ip['ip_id'])); ?>" class="btn btn-default btn-sm">View IP Dashboard
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                </td>
            </tr>
            <?php ($i++); ?>
        <?php endforeach; ?>
        </tbody>
