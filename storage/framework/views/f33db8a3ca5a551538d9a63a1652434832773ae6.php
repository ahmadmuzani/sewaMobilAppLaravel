<?php $__env->startSection('title', 'pengembalian'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="/css/index.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
<div class="container text-center" style="margin-top: 90px">
    <h1>Kembalikan</h1>
    <form action="" method="POST">
        <?php echo csrf_field(); ?>
  
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">tanggal peminjaman</label>
            <div class="col-sm-10">
                <input 
                      type="text"
                      name="nama_mobil" class=" form-control <?php $__errorArgs = ['nama_mobil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                      id="nama_mobil"
                      readonly
                      value="<?php echo e($pinjam->tanggal_peminjaman); ?>"
                      >
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">tanggal pengembalian</label>
            <div class="col-sm-10">
                <input 
                type="text"
                name="nama_mobil" class=" form-control <?php $__errorArgs = ['nama_mobil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="nama_mobil"
                readonly
                value="<?php echo e($pinjam->tanggal_pengembalian); ?>"
                >
               </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Plat Mobil yang dipinjam</label>
            <div class="col-sm-10">
                <input 
                type="text"
                name="plat_mobil" class=" form-control <?php $__errorArgs = ['plat_mobil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="plat_mobil"
                >  
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Kembalikan</button>
        </form>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/SewaMobilApp/resources/views/pengembalian.blade.php ENDPATH**/ ?>