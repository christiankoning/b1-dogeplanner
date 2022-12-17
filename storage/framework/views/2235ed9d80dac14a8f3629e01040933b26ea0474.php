<?php $__env->startSection('content'); ?>
        <section class="productIndexSection d-flex align-items-center py-5">
            <div class="container text-light" >
                <div class="text-center pb-4 title-div">
                    <h2 class="py-2">Admin Gebruiker beheren page</h2>
                </div>
                <div class="pull-right pb-4">
                    <a class="btn btn-succes" href="<?php echo e(route('user.create')); ?>">Gebruiker aanmaken</a>
                </div>
                <div class="row gy-4" data-aos="zoom-in">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $userData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4">
                            <div class="card bg-transparent px-4">
                                <h3><?php echo e($userData->name); ?></h3>
                                <p class="py-3">
                                    Id: <?php echo e($userData->id); ?><br>
                                    Admin: <?php echo e($userData->isAdmin ? "Ja" : "Nee"); ?><br>
                                <?php $__currentLoopData = $dogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($userData->id == $dog->id_user): ?>
                                            Hond: <?php echo e($dog->name); ?><br>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </p>
                                <strong>Acties: </strong>
                                <form action="<?php echo e(route('user.destroy',$userData->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <a class="btn btn-info btn-walk" href="<?php echo e(route('user.show',$userData->id)); ?>">Bekijken</a>
                                    <a class="btn btn-primary btn-walk" href="<?php echo e(route('user.edit',$userData->id)); ?>">Aanpassen</a>
                                    <button type="submit" class="btn btn-danger btn-walk">Verwijderen</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div> <!-- end of container -->
        </section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Phpstorm Code\b1-dogeplanner\resources\views/admin/admin-user/index.blade.php ENDPATH**/ ?>