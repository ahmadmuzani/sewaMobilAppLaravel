    
    
    <?php $__env->startSection('title', 'login'); ?>
    <?php $__env->startSection('css'); ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    <?php $__env->stopSection(); ?>
      
    
  <?php $__env->startSection('container'); ?> 
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img style="border-radius: 30px 30px 30px 30px" src="https://plus.unsplash.com/premium_photo-1682125840276-f47b511bf58c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image" id="img-login" class="img-fluid">
        </div>

        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
  
              <h3>Login</h3>
              <br>
              <p class="mb-4">Selamat datang di website sewa mobil.</p>
            </div>
            <form action="/login" method="POST">
              <?php echo csrf_field(); ?>
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="username" name="username" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  id="username" required  >
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="invalid-feedback" id="pesan-error">
                        <?php echo e($message); ?>

                      </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
              </div>
              <div class="form-group last mb-2">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
              </div>
                <button class="btn btn-block btn-primary">Login</button>
                <p>Daftar disini <a href="<?php echo e(url('/register')); ?>">Register!</a></p>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  <?php $__env->stopSection(); ?> 
  <?php $__env->startSection('js'); ?>
  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/main.js"></script>
  <script src="/js/alertsession.js"></script>
  <?php $__env->stopSection(); ?>







            
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/SewaMobilApp/resources/views/login.blade.php ENDPATH**/ ?>