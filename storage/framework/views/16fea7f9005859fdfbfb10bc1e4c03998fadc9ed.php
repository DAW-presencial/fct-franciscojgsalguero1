<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $__env->yieldContent('title', 'Fitxa recollida de dades per conveni nou'); ?></title>
        <style>
        </style>
    </head>
    <body>
        <h1>Fitxa recollida de dades per conveni nou</h1>
        <h2>Empresa</h2>
        <form method="get" action="<?php echo e(route('formulario')); ?>">
            <?php echo csrf_field(); ?>
            <!--<?php echo e($errors); ?><br>
            <?php echo e(var_dump($errors->any())); ?><br>
            <?php if($errors->any()): ?>
            <p> Mostrar errores </p><br>
            <?php endif; ?>-->
            <input name="name" placeholder="Nombre... " value="<?php echo e(old('name')); ?>" required><br>
            <?php echo $errors->first('name', '<small> :message </small><br>'); ?>

            <input type="" name="cif" placeholder="CIF... " value="<?php echo e(old('cif')); ?>" required><br>
            <?php echo $errors->first('cif', '<small> :message </small><br>'); ?>

            <input name="address" placeholder="Dirección... " value="<?php echo e(old('address')); ?>"><br>
            <?php echo $errors->first('address', '<small> :message </small><br>'); ?>

            <input name="city" placeholder="Ciudad... " value="<?php echo e(old('city')); ?>"><br>
            <?php echo $errors->first('city', '<small> :message </small><br>'); ?>

            <input type="tel" name="telephone1" placeholder="Telefono primero... " value="<?php echo e(old('telephone1')); ?>"><br>
            <?php echo $errors->first('telephone1', '<small> :message </small><br>'); ?>

            <input type="tel" name="telephone2" placeholder="Telefono segundo... " value="<?php echo e(old('telephone2')); ?>"><br>
            <?php echo $errors->first('telephone2', '<small> :message </small><br>'); ?>

            <input type='email' type="email" name="email" placeholder="email" value="<?php echo e(old('email')); ?>"  required><br>
            <?php echo $errors->first('email', '<small> :message </small><br>'); ?>

            <input name="sector" placeholder="Sector... " value="<?php echo e(old('sector')); ?>"><br>
            <?php echo $errors->first('sector', '<small> :message </small><br>'); ?>

            <input name="activity" placeholder="Actividad productiva... " value="<?php echo e(old('activity')); ?>"><br>
            <?php echo $errors->first('activity', '<small> :message </small><br>'); ?>

            <p>Titularidad</p><br>
            <input type="radio" id="private" name="owner" value="private">
            <label for="private">Private</label><br>
            <input type="radio" id="public" name="owner" value="public">
            <label for="public">Public</label><br>
            
            <?php echo $errors->first('owner', '<small> :message </small><br>'); ?>

            <h1> Representant de l'empresa </h1>
            <input name="nameRepresentative" placeholder="Nombre del Representante... " value="<?php echo e(old('nameRepresentative')); ?>" required><br>
            <?php echo $errors->first('nameRepresentative', '<small> :message </small><br>'); ?>

            <input name="nif" placeholder="NIF... " value="<?php echo e(old('nif')); ?>" required><br>
            <h1> Centres de Treball </h1>
            <?php echo $errors->first('nif', '<small> :message </small><br>'); ?>

            <input name="centername" placeholder="Nombre del Centro... " value="<?php echo e(old('centername')); ?>"><br>
            <?php echo $errors->first('centername', '<small> :message </small><br>'); ?>

            <input name="centeradress" placeholder="Dirección del Centro... " value="<?php echo e(old('centeradress')); ?>"><br>
            <?php echo $errors->first('centeradress', '<small> :message </small><br>'); ?>

            <input name="poblation" placeholder="Población... " value="<?php echo e(old('poblation')); ?>"><br>
            <?php echo $errors->first('poblation', '<small> :message </small><br>'); ?>

            <input name="cp" placeholder="Codigo Postal... " value="<?php echo e(old('cp')); ?>"><br>
            <?php echo $errors->first('cp', '<small> :message </small><br>'); ?>

            <input name="activity" placeholder="Actividad... " value="<?php echo e(old('activity')); ?>"><br>
            <?php echo $errors->first('activity', '<small> :message </small><br>'); ?>

            <input type="number" name="workersnumber" placeholder="Numero de Trabajadores... " value="<?php echo e(old('workersnumber')); ?>"><br>
            <?php echo $errors->first('workersnumber', '<small> :message </small><br>'); ?>

            <input type="email" name="emailcenter" placeholder="Correo del Centro... " value="<?php echo e(old('emailcenter')); ?>" required><br>
            <?php echo $errors->first('emailcenter', '<small> :message </small><br>'); ?>

            <input type="tel" name="telephonecenter1" placeholder="Telefono 1... " value="<?php echo e(old('telephonecenter1')); ?>"><br>
            <?php echo $errors->first('telephonecenter1', '<small> :message </small><br>'); ?>

            <input type="tel" name="telephonecenter2" placeholder="Telefono 2... " value="<?php echo e(old('telephonecenter2')); ?>"><br>
            <?php echo $errors->first('telephonecenter2', '<small> :message </small><br>'); ?>

            <p>Tipo de jornada: </p><br>
            <input type="radio" id="continuada" name="workingtime" value="continuada">
            <label for="private">Continuada</label><br>
            <input type="radio" id="partida" name="workingtime" value="partida">
            <label for="public">Partida</label><br>
            <input name="schedule" placeholder="Horario... " value="<?php echo e(old('schedule')); ?>"><br>
            <?php echo $errors->first('schedule', '<small> :message </small><br>'); ?>

            <input name="namecoordinatorfct" placeholder="Coordinador de las FCT... " value="<?php echo e(old('namecoordinatorfct')); ?>" required><br>
            <?php echo $errors->first('namecoordinatorfct', '<small> :message </small><br>'); ?>

            <input name="coordinatorfctnif" placeholder="NIF coordinador de las FCT... " value="<?php echo e(old('coordinatorfctnif')); ?>" required><br>
            <?php echo $errors->first('coordinatorfctnif', '<small> :message </small><br>'); ?>

            <input name="nametutor" placeholder="Nombre del tutor de empresa... " value="<?php echo e(old('nametutor')); ?>" required><br>
            <?php echo $errors->first('nametutor', '<small> :message </small><br>'); ?>

            <input name="niftutor" placeholder="NIF del tutor de empresa... " value="<?php echo e(old('niftutor')); ?>" required><br>
            <?php echo $errors->first('niftutor', '<small> :message </small><br>'); ?>

            <input name="workplace" placeholder="Lugar de trabajo... " value="<?php echo e(old('workplace')); ?>"><br>
            <?php echo $errors->first('workplace', '<small> :message </small><br>'); ?>

            <button>Enviar</button>
        </form>
    </body>
</html><?php /**PATH C:\xampp\htdocs\cmd-laravel\resources\views/formulario.blade.php ENDPATH**/ ?>