<?php $__env->startSection('title', 'tambah mobil'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="/css/tambahmobil.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
<div class="container" style="margin-top: 90px">
  
<h2>tambahmobil</h2>
<form action="/tambahmobil" method="POST">
  <?php echo csrf_field(); ?>
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Mobil</label>
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
                required
                value="<?php echo e(old('nama_mobil')); ?>"
                >
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Model Mobil</label>
      <div class="col-sm-10">
        <input 
        type="text"
        name="model_mobil" class=" form-control <?php $__errorArgs = ['model_mobil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
        id="model_mobil"
        required
        value="<?php echo e(old('model_mobil')); ?>"
        >      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Plat Mobil</label>
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
        required
        value="<?php echo e(old('plat_mobil')); ?>"
        >      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Tarif Mobil</label>
      <div class="col-sm-10">
        <input 
        type="number"
        name="tarif_sewa" class=" form-control <?php $__errorArgs = ['tarif_sewa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
        id="tarif_sewa"
        required
        value="<?php echo e(old('tarif_sewa')); ?>"
        >      </div>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/SewaMobilApp/resources/views/tambahmobil.blade.php ENDPATH**/ ?>