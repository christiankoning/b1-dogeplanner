

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('css/admin-user.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <div class="title-div">
            <?php if($form === "create"): ?>
                <h1>Gebruiker aanmaken</h1>
            <?php elseif($form === "edit"): ?>
                <h1>Gebruiker aanpassen</h1>
            <?php endif; ?>
            <a href="/adminuser">Terug naar lijst</a>
        </div>

        <form class="model" method="post" action="/adminuser<?php echo e($form === "edit" ? "/$adminuser->id" : ""); ?>">
            <?php echo csrf_field(); ?>
            <?php if($form === "edit"): ?>
                <?php echo method_field("PATCH"); ?>
            <?php endif; ?>
            <div class="input-div">
                <label for="name">Naam</label><br>
                <input id="name" type="text" name="name" value="<?php echo e(checkValue($form,"name",$adminuser)); ?>">
                <?php if($errors->has('name')): ?>
                    <p class="error"><?php echo e($errors->first('name')); ?></p>
                <?php endif; ?>
            </div>
            <div class="input-div">
                <label for="email">Email</label><br>
                <input id="email" type="text" name="email" value="<?php echo e(checkValue($form,"email",$adminuser)); ?>">
                <?php if($errors->has('email')): ?>
                    <p class="error"><?php echo e($errors->first('email')); ?></p>
                <?php endif; ?>
            </div>
            <div class="input-div">
                <label for="telephone">Telefoon</label><br>
                <input id="telephone" type="text" name="telephone" value="<?php echo e(checkValue($form,"telephone",$adminuser)); ?>">
                <?php if($errors->has('telephone')): ?>
                    <p class="error"><?php echo e($errors->first('telephone')); ?></p>
                <?php endif; ?>
            </div>
            <div class="input-div">
                <label for="street_name">Straatnaam</label><br>
                <input id="street_name" type="text" name="street_name" value="<?php echo e(checkValue($form,"street_name",$adminuser)); ?>">
                <?php if($errors->has('street_name')): ?>
                    <p class="error"><?php echo e($errors->first('street_name')); ?></p>
                <?php endif; ?>
            </div>
            <div class="input-div">
                <label for="house_number">Huisnummer</label><br>
                <input id="house_number" type="text" name="house_number" value="<?php echo e(checkValue($form,"house_number",$adminuser)); ?>">
                <?php if($errors->has('house_number')): ?>
                    <p class="error"><?php echo e($errors->first('house_number')); ?></p>
                <?php endif; ?>
            </div>
            <div class="input-div">
                <label for="postal_code">Postcode</label><br>
                <input id="postal_code" type="text" name="postal_code" value="<?php echo e(checkValue($form,"postal_code",$adminuser)); ?>">
                <?php if($errors->has('postal_code')): ?>
                    <p class="error"><?php echo e($errors->first('postal_code')); ?></p>
                <?php endif; ?>
            </div>
            <div class="input-div">
                <label for="admin">Admin</label><br>
                <select id="admin" name="admin">
                    <option value="false">Niet</option>
                    <?php if(($form === "edit" && $adminuser->isAdmin) || old('admin') === "true"): ?>
                        <option value="true" selected>Wel</option>
                    <?php else: ?>
                        <option value="true">Wel</option>
                    <?php endif; ?>
                </select>
                <?php if($errors->has('admin')): ?>
                    <p class="error"><?php echo e($errors->first('admin')); ?></p>
                <?php endif; ?>
            </div>
            <div class="input-div">
                <label for="newPassword">Wachtwoord <?php echo e($form === "edit" ? "(Niet verplicht)" : ""); ?></label><br>
                <input id="newPassword" type="password" name="newPassword" value="<?php echo e(old("newPassword")); ?>">
                <?php if($errors->has('newPassword')): ?>
                    <p class="error"><?php echo e($errors->first('newPassword')); ?></p>
                <?php endif; ?>
            </div>
            <div class="input-div">
                <label for="passwordRepeat">Herhaal wachtwoord <?php echo e($form === "edit" ? "(Niet verplicht)" : ""); ?></label><br>
                <input id="passwordRepeat" type="password" name="passwordRepeat" value="<?php echo e(old("passwordRepeat")); ?>">
            </div>
            <?php if($form === "create"): ?>
                <input type="submit" value="Gebruiker aanmaken">
            <?php elseif($form === "edit"): ?>
                <input type="submit" value="Gebruiker aanpassen">
            <?php endif; ?>
        </form>
    </main>
<?php $__env->stopSection(); ?>


<?php
    function checkValue($form, $name, $adminuser) {
        if($form === "edit"){
            if(empty(old($name))){
                return $adminuser[$name];
            } else {
                return old($name);
            }
        }
        return old($name);
    }
    ?>


<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Phpstorm Code\b1-dogeplanner\resources\views/admin/admin-user/form.blade.php ENDPATH**/ ?>