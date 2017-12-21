<?php $__env->startSection('content'); ?>
        <?php if(count($posts) > 0): ?>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                 
              <div class="panel-heading"><a href="/courses/<?php echo e($post->posts_id); ?>"><?php echo e($post->posts_id); ?></a> 
                <a href="/courses/<?php echo e($post->posts_id); ?>"><?php echo e($post->posts_title); ?></a></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                    <p>notheing</p>
                <?php endif; ?>
                
        <a class="btn btn-primary" href="/courses/create">new cours</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>