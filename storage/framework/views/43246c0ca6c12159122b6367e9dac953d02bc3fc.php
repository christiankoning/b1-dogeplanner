
<?php $__env->startSection('content'); ?>
    <section class="dogCreateUpdateSection d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">Hond Bekijken</h2>
            </div>
            <div class="pull-right pb-4">
                <a class="btn btn-primary" href="<?php echo e(route('profile.index')); ?>"> Terug</a>
            </div>
            <div class="col-lg-4 mx-auto" data-aos="zoom-in">
                <div class="testimonial-card bg-transparent px-4">
                        <div class="row">
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
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Phpstorm Code\b1-dogeplanner\resources\views//dog/show.blade.php ENDPATH**/ ?>