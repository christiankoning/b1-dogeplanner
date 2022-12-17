

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('css/admin-user.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <div class="title-div">
            <h1><?php echo e($adminuser->name); ?></h1>
            <a href="/adminuser">Terug naar lijst</a>
        </div>

        <div class="model">
            <h2 class="name">Gebruikers info</h2>
            <table>
                <tr>
                    <td>Admin:</td>
                    <td><?php echo e($adminuser->isAdmin ? "Wel" : "Niet"); ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo e($adminuser->email); ?></td>
                </tr>
                <tr>
                    <td>Email geverifieerd:</td>
                    <td><?php echo e($adminuser->email_verified_at === "" ? $adminuser->email_verified_at : "Nog niet geverifieerd"); ?></td>
                </tr>
                <tr>
                    <td>Telefoon:</td>
                    <td><?php echo e($adminuser->telephone); ?></td>
                </tr>
                <tr>
                    <td>Straatnaam:</td>
                    <td><?php echo e($adminuser->street_name); ?></td>
                </tr>
                <tr>
                    <td>Huisnummer:</td>
                    <td><?php echo e($adminuser->house_number); ?></td>
                </tr>
                <tr>
                    <td>Postcode:</td>
                    <td><?php echo e($adminuser->postal_code); ?></td>
                </tr>
            </table>
        </div>
    </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Phpstorm Code\b1-dogeplanner\resources\views/admin/admin-user/single.blade.php ENDPATH**/ ?>