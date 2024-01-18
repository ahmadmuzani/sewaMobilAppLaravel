<?php $__env->startSection('title', 'daftarmobil'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="/css/daftarmobil.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
<div class="container text-center" style="margin-top: 90px">
    <?php if(Auth::user()->role_user == 'Admin'): ?>
    <a href="/tambahmobil" class="btn btn-primary">
        tambahmobil
      </a>
      <?php endif; ?>
      <div class="row g-3">
        <div class="col-5">
            <form action="/daftarmobil" method="GET">
                <?php echo csrf_field(); ?>
                <input type="search" name="search" class="form-control" placeholder="Search" aria-label="search">
            </form>
        </div>
      </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Merek</th>
            <th scope="col">Model</th>
            <th scope="col">Nomer Plat</th>
            <th scope="col">Tarif</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <?php $no = 1; ?>
        <?php $__currentLoopData = $mobils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody class="table-group-divider">
          <tr>
            <th scope="row"><?php echo e($no++); ?></th>
            <td><?php echo e($mobil->nama_mobil); ?></td>
            <td><?php echo e($mobil->model_mobil); ?></td>
            <td><?php echo e($mobil->plat_mobil); ?></td>
            <td><?php echo e($mobil->tarif_sewa); ?></td>
            <td>
                <?php if(Auth::user()->role_user == 'User'): ?>
                <a href="/peminjaman/<?php echo e($mobil->id); ?>" class="btn btn-primary">sewa</a>
                <?php else: ?>
                <a href="" class="btn btn-primary">edit</a>
                <?php endif; ?>
                <?php echo e($mobil->stock); ?>

            </td>
          </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/SewaMobilApp/resources/views/daftarmobil.blade.php ENDPATH**/ ?>