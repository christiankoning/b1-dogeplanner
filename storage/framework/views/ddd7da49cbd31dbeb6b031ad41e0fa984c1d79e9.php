

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('css/admin-user.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <div class="title-div">
            <h2>Gebruiker aanmaken</h2>
            <a href="<?php echo e(route('user.index')); ?>">Terug</a>
        </div>

        <form class="model" method="post" action="<?php echo e(route('user.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="input-div">
                <label for="name">Naam</label><br>
                <input id="name" type="text" name="name" value="<?php echo e(old("name")); ?>" placeholder="Jan Jansen">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error"><?php echo e($errors->first('name')); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="input-div">
                <label for="email">Email</label><br>
                <input id="email" type="text" name="email" value="<?php echo e(old("email")); ?>" placeholder="jan.jan@gmail.com">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error"><?php echo e($errors->first('email')); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="input-div">
                <label for="telephone">Telefoon</label><br>
                <input id="telephone" type="tel" pattern="[0-9]{2}-[0-9]{8}" name="telephone" value="<?php echo e(old("telephone")); ?>" placeholder="06-12345678">
                <?php $__errorArgs = ['telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error"><?php echo e($errors->first('telephone')); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="input-div">
                <label for="street_name">Straatnaam</label><br>
                <input id="street_name" type="text" name="street_name" value="<?php echo e(old("street_name")); ?>" placeholder="Janlaan">
                <?php $__errorArgs = ['street_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error"><?php echo e($errors->first('street_name')); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="input-div">
                <label for="house_number">Huisnummer</label><br>
                <input id="house_number" type="text" name="house_number" value="<?php echo e(old("house_number")); ?>" placeholder="14">
                <?php $__errorArgs = ['house_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error"><?php echo e($errors->first('house_number')); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="input-div">
                <label for="postal_code">Postcode</label><br>
                <input id="postal_code" type="text" pattern="[0-9]{4}[A-z]{2}" name="postal_code" value="<?php echo e(old("postal_code")); ?>" placeholder="1482AC">
                <?php $__errorArgs = ['postal_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error"><?php echo e($errors->first('postal_code')); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="input-div">
                <label for="admin">Admin</label><br>
                <select id="admin" name="admin">
                    <option value="false">Niet</option>
                    <?php if(old('admin') === "true"): ?>
                        <option value="true" selected>Wel</option>
                    <?php else: ?>
                        <option value="true">Wel</option>
                    <?php endif; ?>
                </select>
                <?php $__errorArgs = ['admin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error"><?php echo e($errors->first('admin')); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="input-div">
                <label for="newPassword">Wachtwoord</label><br>
                <input id="newPassword" type="password" name="newPassword" value="<?php echo e(old("newPassword")); ?>">
                <?php $__errorArgs = ['newPassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error"><?php echo e($errors->first('newPassword')); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="input-div">
                <label for="passwordRepeat">Herhaal wachtwoord</label><br>
                <input id="passwordRepeat" type="password" name="passwordRepeat" value="<?php echo e(old("passwordRepeat")); ?>">
            </div>
            <input type="submit" value="Gebruiker aanmaken">
        </form>
    </main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Phpstorm Code\b1-dogeplanner\resources\views/admin/admin-user/create.blade.php ENDPATH**/ ?>