<?php $__env->startSection('title', 'Projects'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Project</h1>
    <?php if(count($project) > 0): ?>
        <ul>
            <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <h2><?php echo e($project->title); ?></h2>
                    <p><?php echo e($project->description); ?></p>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p>No projects available.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\module9\resources\views/pages/project.blade.php ENDPATH**/ ?>