<?php $__env->startSection('content'); ?>
        <a href="/traines">go back</a>
        <h1><?php echo e($tears->tears_title); ?></h1>
             <?php $__currentLoopData = $tears->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                 <?php echo e($post->posts_title); ?>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <a href="/traines/<?php echo e($tears->tears_id); ?>/edit">edit  name</a>
    <?php echo e(Form::open(['action' => ['Tearscontroller@destroy',$tears->tears_id], 'method' => 'POST'])); ?>

                <?php echo e(Form::hidden('_method','DELETE')); ?>

    <br> <br>
	<?php echo e(Form::submit('delet')); ?>

            <?php echo e(Form::close()); ?>

			  
			
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>