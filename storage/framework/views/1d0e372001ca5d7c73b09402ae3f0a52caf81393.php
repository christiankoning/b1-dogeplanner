

<?php $__env->startSection('content'); ?>
    <section class="walkIndexSection d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">Wandelingen overzicht</h2>
            </div>
            <div class="pull-right pb-4">
                <a class="btn btn-succes" href="<?php echo e(route('walks.create')); ?>">Wandeling aanmaken</a>
            </div>
            <div class="row gy-4" data-aos="zoom-in">
                <?php if(count($pendingWalks) > 0): ?>
                    <h2>In afwachting</h2>
                    <?php $__currentLoopData = $pendingWalks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4">
                            <div class="card bg-transparent px-4">
                                <p class="py-2"><strong>No: </strong><?php echo e($value->id); ?></p>
                                <p class="py-2">
                                    <strong>Datum: </strong><?php echo e(\Carbon\Carbon::parse($value->date)->format('d-m-Y')); ?>

                                </p>
                                <p class="py-2"><strong>Hoeveelheid honden: </strong> <?php echo e($value->amount_dogs); ?></p>
                                <p class="py-2"><strong>Locatie: </strong><?php echo e($value->location); ?></p>
                                <p class="py-2"><strong>Starttijd
                                        op: </strong><?php echo e(Carbon\Carbon::parse($value->start_time)->format('H:i')); ?>

                                </p>
                                <p class="py-2"><strong>Eindtijd
                                        op: </strong><?php echo e(Carbon\Carbon::parse($value->end_time)->format('H:i')); ?>

                                </p>
                                <p class="py-2"><strong>Aangemaakt
                                        op: </strong><?php echo e(\Carbon\Carbon::parse($value->created_at)->format('d-m-Y H:i')); ?></p>
                                <p class="py-2"><strong>Aangepast
                                        op: </strong><?php echo e(\Carbon\Carbon::parse($value->updated_at)->format('d-m-Y H:i')); ?>

                                </p>
                                <div class="py-2">
                                    <strong>Acties: </strong>
                                    <div>
                                        <form>
                                            <a class="btn btn-info btn-walk" href="<?php echo e(route('walks.show',$value->id)); ?>">Bekijken</a>
                                            <a class="btn btn-info btn-walk" href="<?php echo e(route('walk.accept',$value->id)); ?>">Accepteren</a>
                                            <a class="btn btn-info btn-walk" href="<?php echo e(route('walk.denied',$value->id)); ?>">Weigeren</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <?php if(count($acceptedWalks) > 0): ?>
                    <h2>Geaccepteerd</h2>
                    <?php $__currentLoopData = $acceptedWalks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4">
                            <div class="card bg-transparent px-4">
                                <p class="py-2"><strong>No: </strong><?php echo e($value->id); ?></p>
                                <p class="py-2">
                                    <strong>Datum: </strong><?php echo e(\Carbon\Carbon::parse($value->date)->format('d-m-Y')); ?>

                                </p>
                                <p class="py-2"><strong>Hoeveelheid honden: </strong> <?php echo e($value->amount_dogs); ?></p>
                                <p class="py-2"><strong>Locatie: </strong><?php echo e($value->location); ?></p>
                                <p class="py-2"><strong>Starttijd
                                        op: </strong><?php echo e(Carbon\Carbon::parse($value->start_time)->format('H:i')); ?>

                                </p>
                                <p class="py-2"><strong>Eindtijd
                                        op: </strong><?php echo e(Carbon\Carbon::parse($value->end_time)->format('H:i')); ?>

                                </p>
                                <p class="py-2"><strong>Aangemaakt
                                        op: </strong><?php echo e(\Carbon\Carbon::parse($value->created_at)->format('d-m-Y H:i')); ?></p>
                                <p class="py-2"><strong>Aangepast
                                        op: </strong><?php echo e(\Carbon\Carbon::parse($value->updated_at)->format('d-m-Y H:i')); ?>

                                </p>
                                <div class="py-2">
                                    <strong>Acties: </strong>
                                    <form>
                                        <a class="btn btn-info btn-walk" href="<?php echo e(route('walks.show',$value->id)); ?>">Bekijken</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of plans -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Phpstorm Code\b1-dogeplanner\resources\views/admin/walks/index.blade.php ENDPATH**/ ?>