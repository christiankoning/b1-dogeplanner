

<?php $__env->startSection('content'); ?>
    <!-- About -->
    <section class="services d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <h1>Jamy's uitlaatservice</h1>
                    <p class="py-2 para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa. Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p>
                    <br>
                    <div class="my-3">
                        <a class="btn" href="#your-link">Boek nu uw wandeling!</a>
                    </div>
                </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down">
                    <img class="img-fluid homeImage" src="./assets/images/playing-dog-ball.jpg" alt="about" >
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Phpstorm Code\b1-dogeplanner\resources\views/index.blade.php ENDPATH**/ ?>