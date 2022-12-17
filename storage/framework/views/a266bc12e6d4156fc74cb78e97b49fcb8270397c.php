
<?php $__env->startSection('content'); ?>
    <section class="dogIndexSection d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">Mijn honden</h2>
            </div>
            <div class="pull-right pb-4">
                <a class="btn btn-succes" href="<?php echo e(route('dog.create')); ?>">Hond toevoegen</a>
            </div>
            <div class="row gy-4" data-aos="zoom-in">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4">
                        <div class="card bg-transparent px-4">
                            <p class="py-2">
                                <strong>Naam: </strong><?php echo e($value->name); ?>

                            </p>
                            <p class="py-2"><strong>Ras: </strong> <?php echo e($value->race); ?></p>
                            <p class="py-2"><strong>Leeftijd: </strong><?php echo e($value->age); ?> jaar</p>
                            <p class="py-2"><strong>Gewicht: </strong><?php echo e($value->weight); ?> kg</p>
                            <p class="py-2"><strong>Bio: </strong><?php echo e($value->notes); ?></p>
                            <img src="<?php echo e(asset('storage/image/' . $value->img)); ?>">
                            <div class="py-2">
                                <strong>Acties: </strong>
                                <form action="<?php echo e(route('dog.destroy',$value->id)); ?>" method="POST">
                                    <a class="btn btn-info btn-walk" href="<?php echo e(route('dog.show',$value->id)); ?>">Bekijken</a>
                                    <a class="btn btn-primary btn-walk" href="<?php echo e(route('dog.edit',$value->id)); ?>">Aanpassen</a>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-walk">Verwijderen</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of plans -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Phpstorm Code\b1-dogeplanner\resources\views//dog/index.blade.php ENDPATH**/ ?>