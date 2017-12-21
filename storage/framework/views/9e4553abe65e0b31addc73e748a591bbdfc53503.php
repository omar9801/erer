<?php $__env->startSection('content'); ?>
        <a href="/courses">go back</a>
        <h1><?php echo e($posts->posts_title); ?></h1>
            
                     <?php echo e($posts->Tears->count()); ?>

                  
        
                     
        <a href="/courses/<?php echo e($posts->posts_id); ?>/edit">edit cours name</a>
            
    <?php echo e(Form::open(['action' => ['Postscontroller@destroy',$posts->posts_id], 'method' => 'POST'])); ?>

                <?php echo e(Form::hidden('_method','DELETE')); ?>

    <br> <br>
	<?php echo e(Form::submit('delet')); ?>

            
			  
            <?php echo e(Form::close()); ?>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>