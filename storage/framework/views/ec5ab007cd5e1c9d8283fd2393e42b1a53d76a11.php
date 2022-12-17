

<?php $__env->startSection('content'); ?>
    <section class="services d-flex align-items-center py-5" id="plans">
        <div class="container-fluid text-light">
            <div class="row gy-12" data-aos="zoom-in">
                <div class="text-center pb-4">
                    <h2>Producten beheer</h2>
                    <p>Deze pagina is voor het toevoegen, verwijderen, updaten en weergeven van
                        bestaande producten binnen de database.
                    </p>
                </div>
                <div class="pull-right pb-4">
                    <a class="btn btn-succes" href="<?php echo e(route('products.create')); ?>">Product aanmaken</a>
                </div>
                <div class="row gy-12" data-aos="zoom-in">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4">
                            <div class="card bg-transparent px-4">
                                <p class="py-2"><strong>#</strong><?php echo e($product->id); ?></p>
                                <p class="py-2"><strong>Naam: </strong><?php echo e($product->name); ?></p>
                                <p class="py-2"><strong>Prijs: </strong>€<?php echo e(number_format((float)$product->price,2,',','.')); ?></p>
                                <p class="py-2"><strong>Korting: </strong><?php echo e($product->discount); ?>%</p>
                                <p class="py-2"><strong>Omschrijving: </strong><?php echo e($product->description,); ?></p>
                                <p class="py-2"><?php echo e($product->updated_at); ?></p>
                                <form class="py-2" method="POST" action="<?php echo e(route('products.destroy', $product->id)); ?>">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                                    <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <input type="submit" class="btn btn-danger btn-sm" value="Delete"/>
                                    <?php echo method_field('DELETE'); ?>
                                </form>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Phpstorm Code\b1-dogeplanner\resources\views/admin/products/index.blade.php ENDPATH**/ ?>