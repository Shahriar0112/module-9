<?php $__env->startSection('title', 'Contact'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Contact Me</h1>
    

    <form action="/contact" method="post">
        <?php echo csrf_field(); ?>
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="message">Message:</label>
        <textarea name="message" required></textarea>

        <button type="submit">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\module9\resources\views/pages/contact.blade.php ENDPATH**/ ?>