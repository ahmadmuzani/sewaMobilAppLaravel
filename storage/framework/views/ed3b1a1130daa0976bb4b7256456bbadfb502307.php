<?php $__env->startSection('title', 'pinjam'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="/css/index.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
<div class="container text-center" style="margin-top: 90px">
    <h1>pinjam</h1>
    <form action="" method="POST">
        <?php echo csrf_field(); ?>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Mobil </label>
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
                      value="<?php echo e($mobil->nama_mobil); ?>"
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
              readonly
              value="<?php echo e($mobil->model_mobil); ?>"
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
              readonly
              value="<?php echo e($mobil->plat_mobil); ?>"
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
              readonly
              value="<?php echo e($mobil->tarif_sewa); ?>"
              >      </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">pilih tanggal peminjaman</label>
            <div class="col-sm-10">
              <input 
              type="date"
              name="tanggal_sewa" class=" form-control <?php $__errorArgs = ['tanggal_sewa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
              id="tanggal_sewa" min="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d')); ?>" 
              required
              >      </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">pilih tanggal pengembalian</label>
            <div class="col-sm-10">
              <input 
              type="date"
              name="tanggal_kembali" class=" form-control <?php $__errorArgs = ['tanggal_kembali'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
              id="tanggal_kembali" min="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d')); ?>" 
              required
              >      </div>
          </div>
          <div class="row mb-3" style="display: none">
            <label for="inputPassword3" class="col-sm-2 col-form-label">id</label>
            <div class="col-sm-10">
              <input 
              type="text"
              name="mobil_id" class=" form-control <?php $__errorArgs = ['tanggal_kembali'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
              id="tanggal_kembali"
              required value="<?php echo e($mobil->id); ?>"
              >      </div>
          </div>
      
          <button type="submit" class="btn btn-primary">Sewa</button>
        </form>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/SewaMobilApp/resources/views/peminjaman.blade.php ENDPATH**/ ?>