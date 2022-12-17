

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('css/admin-user.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="userShowSection d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2"><?php echo e($user->name); ?></h2>
            </div>
            <div class="pull-right pb-4">
                <a class="btn btn-primary" href="<?php echo e(route('user.index')); ?>"> Terug</a>
            </div>
            <div class="row gy-4 col-lg-4 mx-auto" data-aos="zoom-in">
                <div class="testimonial-card bg-transparent px-4">
                    <div class="row gy-0">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Admin:</strong>
                                <?php echo e($user->isAdmin ? "Ja" : "Nee"); ?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <?php echo e($user->email); ?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Telefoon:</strong>
                                <?php echo e($user->telephone); ?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Straatnaam:</strong>
                                <?php echo e($user->street_name); ?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Huisnummer:</strong>
                                <?php echo e($user->house_number); ?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Postcode:</strong>
                                <?php echo e($user->postal_code); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <?php $__currentLoopData = $dogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="testimonial-card bg-transparent px-4">
                            <div class="row gy-4">
                                <div class="col-xs-7 col-sm-7 col-md-7">
                                    <div class="form-group">
                                        <strong>Naam:</strong>
                                        <?php echo e($dog->name); ?>

                                    </div>
                                    <div class="form-group">
                                        <strong>Ras:</strong>
                                        <?php echo e($dog->race); ?>

                                    </div>
                                    <div class="form-group">
                                        <strong>Leeftijd:</strong>
                                        <?php echo e($dog->age); ?> jaar
                                    </div>
                                    <div class="form-group">
                                        <strong>Gewicht:</strong>
                                        <?php echo e($dog->weight); ?> kg
                                    </div>
                                    <div class="form-group description">
                                        <strong>Bio:</strong>
                                        <?php echo e($dog->notes); ?>

                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <img src="<?php echo e(asset('storage/image/'. $dog->img)); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Phpstorm Code\b1-dogeplanner\resources\views/admin/admin-user/show.blade.php ENDPATH**/ ?>