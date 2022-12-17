

<?php $__env->startSection('content'); ?>
    <!-- About -->
    <section class="registerSection d-flex align-items-center text-light py-5" id="plans">
        <div class="container text-light" >
            <div class="text-center pb-4">
                <h2 class="py-2">Registreren</h2>
            </div>
            <?php if(session('invalid')): ?>
                <br>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    <div>
                        <?php echo \Session('invalid'); ?>

                    </div>
                </div>
            <?php endif; ?>
            <div class="row justify-content-center" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="testimonial-card bg-transparent px-4">
                        <form action="<?php echo e(route('register.custom')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <span><strong>Naam:</strong></span>
                                <input type="text" placeholder="Naam" id="name" class="form-control" name="name"
                                       required autofocus>
                                <?php if($errors->has('name')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <span><strong>Email:</strong></span>
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                       name="email" required autofocus>
                                <?php if($errors->has('email')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <span><strong>Mobielnummer:</strong></span>
                                <input type="tel" placeholder="06-12345678" pattern="[0-9]{2}-[0-9]{8}" id="telephone" class="form-control"
                                       name="telephone" required>
                                <?php if($errors->has('telephone')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('telephone')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <span><strong>Adres:</strong></span>
                                <div class="input-group">
                                    <input type="text" placeholder="Straatnaam" id="street_name" class="form-control"
                                           name="street_name" required>
                                    <?php if($errors->has('street_name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('street_name')); ?></span>
                                    <?php endif; ?>
                                    <input type="text" placeholder="Huisnmr." id="house_number" class="form-control"
                                           name="house_number" required>
                                    <?php if($errors->has('house_number')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('house_number')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <span><strong>Postcode:</strong></span>
                                <input type="text" placeholder="1234AB" pattern="[0-9]{4}[A-z]{2}" id="postal_code" class="form-control"
                                       name="postal_code" required>
                                <?php if($errors->has('postal_code')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('postal_code')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <span><strong>Wachtwoord:</strong></span>
                                <input type="password" placeholder="Wachtwoord" id="password" class="form-control"
                                       name="password" required>
                                <?php if($errors->has('password')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Registeren</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Phpstorm Code\b1-dogeplanner\resources\views/auth/registration.blade.php ENDPATH**/ ?>