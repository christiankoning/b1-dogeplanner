

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('css/admin-user.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <div class="title-div">
            <h1>Admin Gebruiker beheren page</h1>
            <a href="adminuser/create">Gebruiker aanmaken</a>
        </div>

        <table class="list">
            <tr>
                <th>Id</th>
                <th>Naam</th>
                <th>Admin</th>
                <th>Acties</th>
            </tr>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $userData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($userData->id); ?></td>
                    <td><?php echo e($userData->name); ?></td>
                    <td><?php echo e($userData->isAdmin ? "Wel" : "Niet"); ?></td>
                    <td class="actions">
                        <a href="adminuser/<?php echo e($userData->id); ?>">Bekijken</a>
                        <a href="adminuser/<?php echo e($userData->id); ?>/edit">Aanpassen</a>
                        <form action="adminuser/<?php echo e($userData->id); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <input type="submit" value="Verwijderen">
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Phpstorm Code\b1-dogeplanner\resources\views/admin/admin-user/list.blade.php ENDPATH**/ ?>