<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/main.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
  <div><?php echo $__env->yieldContent('css'); ?></div>
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <script src="/js/jquery.js"></script>
  
</head>

<body>
  
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="border: solid 0px; box-shadow: 5px 6px 7px 5px #ccc;">
    <div class="container">
      <a class="navbar-brand " href=""><b class="text_header">SEWA MOBIL APP</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center">
          
        </ul>
        
        <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/daftarmobil')); ?>">Daftar Mobil</a>
          </li>
          <?php if(auth()->guard()->check()): ?>
          <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li>
          <?php endif; ?>
            <li class="nav-item">
              <a class="nav-link" href=""></a>
           </li>
          <?php if(auth()->guard()->check()): ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/profile')); ?>"><i class="bi bi-person-circle"></i> Profile</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/login')); ?>"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li> 
            <?php endif; ?> 
        </ul>
        
      </div>
    </div>
  </nav>


  <?php echo $__env->yieldContent('container'); ?>


  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
    

<div><?php echo $__env->yieldContent('js'); ?></div>
</body>

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/SewaMobilApp/resources/views/layout/main.blade.php ENDPATH**/ ?>