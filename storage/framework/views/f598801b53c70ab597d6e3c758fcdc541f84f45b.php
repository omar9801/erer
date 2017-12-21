<?php $__env->startSection('content'); ?>
        <h1>add stu</h1>

    <?php echo e(Form::open(['action' => ['Postscontroller@storestu',$posts->posts_id], 'method' => 'POST'])); ?>

    
    <?php echo e(Form::label('title','studint')); ?>

     
   <?php $__currentLoopData = $tears; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tear): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                
                <?php echo e(Form::checkbox( $tear->tears_id )); ?>

            	<?php echo e($tear->tears_title); ?>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php echo e(Form::submit('submit')); ?>

	<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>