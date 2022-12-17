<?php $__env->startSection('content'); ?>
    <section class="productIndexSection d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">Producten beheer</h2>
            </div>
            <div class="pull-right pb-4">
                <a class="btn btn-succes" href="<?php echo e(route('products.create')); ?>">Product aanmaken</a>
            </div>
            <div class="row gy-4" data-aos="zoom-in">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4">
                        <div class="card bg-transparent px-4">
                            <p class="py-2"><strong>#</strong><?php echo e($product->id); ?></p>
                            <p class="py-2"><strong>Naam: </strong><?php echo e($product->name); ?></p>
                            <p class="py-2"><strong>Prijs: </strong>€<?php echo e(number_format((float)$product->price,2,',','.')); ?>

                            </p>
                            <p class="py-2"><strong>Korting: </strong><?php echo e($product->discount); ?>%</p>
                            <p class="py-2"><strong>Omschrijving: </strong><?php echo e($product->description,); ?></p>
                            <p class="py-2"><strong>Aangemaakt op: </strong><?php echo e(\Carbon\Carbon::parse($product->created_at)->format('d-m-Y H:i')); ?></p>
                            <p class="py-2"><strong>Aangepast op: </strong><?php echo e(\Carbon\Carbon::parse($product->updated_at)->format('d-m-Y H:i')); ?></p>
                            <form class="py-2" method="POST" action="<?php echo e(route('products.destroy', $product->id)); ?>">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                                <a href="<?php echo e(route('products.edit', $product->id)); ?>"
                                   class="btn btn-info btn-walk">Aanpassen</a>
                                <input type="submit" class="btn btn-danger btn-walk" value="Verwijderen"/>
                                <?php echo method_field('DELETE'); ?>
                            </form>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Phpstorm Code\b1-dogeplanner\resources\views/admin/products/index.blade.php ENDPATH**/ ?>