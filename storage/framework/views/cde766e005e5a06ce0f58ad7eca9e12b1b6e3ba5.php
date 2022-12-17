<?php $__env->startSection('content'); ?>
    <section class="services d-flex align-items-center py-5" id="plans">
        <div class="container-fluid text-light">
            <div class="row gy-12" data-aos="zoom-in">
                <div class="text-center pb-4">
                    <h2>Diensten en Strippenkaarten</h2>
                    <p>Op deze pagina bieden wij een assortiment aan opties voor het uitlaten van uw hond.
                        Hierbij kunt u kiezen om eenmalig uw hond uit te laten of
                        een strippenkaart te nemen als u in de toekomst
                        van plan bent meerdere malen onze dienst te gaan gebruiken!
                    </p>
                </div>
            </div>
            <div class="row gy-12" data-aos="zoom-in">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4">
                        <div class="card bg-transparent px-4">
                            <p class="py-2"><strong><?php echo e($product->name); ?></strong></p>
                            <p class="py-2"><?php echo e($product->description); ?></p>
                            <?php if($product->discount > 0): ?>
                                <p class="py-2"><strong>Korting: </strong> <?php echo e($product->discount); ?>%</p>
                                <p class="py-2"><strong>Price: </strong>
                                    <del>€ <?php echo e(number_format((float)$product->price,2,',','.')); ?></del>
                                    <strong>€ <?php echo e(number_format((float)$product->new_price,2,',','.')); ?></strong>
                                </p>
                            <?php else: ?>
                                <p class="py-2"><strong>Price: </strong>€ <?php echo e(number_format((float)$product->price,2,',','.')); ?></p>
                            <?php endif; ?>
                            <div class="py-2">
                                <a href="<?php echo e(route('orders.create', $product->id)); ?>" class="btn btn-primary btn-bestellen">Bestel</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div><!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of plans -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Phpstorm Code\b1-dogeplanner\resources\views//orders/index.blade.php ENDPATH**/ ?>