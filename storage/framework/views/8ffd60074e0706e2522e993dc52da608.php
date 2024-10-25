<h1>Crear Nueva Reserva</h1>

<form action="<?php echo e(route('bookings.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="room_id">ID de Habitación:</label>
    <input type="number" name="room_id" required>

    <label for="user_id">ID de Usuario:</label>
    <input type="number" name="user_id" required>

    <label for="date">Fecha:</label>
    <input type="date" name="date" required>

    <button type="submit">Crear Reserva</button>
</form>

<a href="<?php echo e(route('bookings.index')); ?>">Volver a la lista</a>
<?php /**PATH /home/kali/Miranda/resources/views/bookings/create.blade.php ENDPATH**/ ?>