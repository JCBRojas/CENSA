<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="<?php echo e(route('storeEmpleado')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label for="employee">Nombres</label>
        <input type="text" name="name" class="form-control">

        <label for="">Apellidos</label>
        <input type="text" name="lastname" class="form-control">

        <label for="email">Correo</label>
        <input type="email" name="email" class="form-control">

        <label for="Area">Area</label>
        <select name="area_id" id="area_id">
            <option value="1"> Areas</option>
            <option value="1"> Areas</option>
            <option value="1"> Areas</option>
        </select>

        <label for="rol">Rol</label>
        <select name="role_id" id="role_id">
            <option value="1"> Roles</option>
            <option value="1"> Roles</option>
            <option value="1"> Roles</option>
        </select>

        <button type="submit">Guardar</button>
        
    </form>
    
</body>
</html><?php /**PATH C:\Users\administrador\Desktop\projects\reports\resources\views/empleado/formCrear.blade.php ENDPATH**/ ?>