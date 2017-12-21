<?php $__env->startSection('content'); ?>
        <?php if(count($tears) > 0): ?>
            <?php $__currentLoopData = $tears; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tear): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                 
              <div class="panel-heading"><a href="/traines/<?php echo e($tear->tears_id); ?>"><?php echo e($tear->tears_id); ?></a> 
                <a href="/traines/<?php echo e($tear->tears_id); ?>"><?php echo e($tear->tears_title); ?></a></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                    <p>notheing</p>
                <?php endif; ?>
                
        <a class="btn btn-primary" href="/traines/create">new studeins</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>