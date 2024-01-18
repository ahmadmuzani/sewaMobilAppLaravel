<?php $__env->startSection('title', 'profile'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="/css/profile.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page" target="__blank">Billing</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Security</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"  target="__blank">Notifications</a>
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                </div>
                <form method="post" action="/logout">
                    <?php echo csrf_field(); ?>
                  <button type="submit" class="btn btn-outline-secondary"><i class="bi bi-box-arrow-left"></i> Logout</button>
                  </form>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username</label>
                            <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e(auth()->user()->username); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Name</label>
                            <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e(auth()->user()->name); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Email</label>
                            <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e(auth()->user()->email); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Email</label>
                            <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e(auth()->user()->role_user); ?>">
                        </div>
                        <a href="" class="btn btn-primary" type="button">Edit</a>
                    </form>
                </div>
            </div>
            <?php if(auth()->user()->role_user == 'User'): ?>
            <div class="card mb-4">
                <div class="card-header">Peminjaman Mobil Anda</div>
                <?php $no = 1;  ?>
                <?php $__currentLoopData = $peminjaman_mobils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($p->user_id == auth()->user()->id): ?>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <h5><?php echo e($no++); ?></h5>
                        <div class="mb-3">
                            
                            <label class="small mb-1" for="inputUsername">Status</label>
                            <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e($p->status); ?>">
                                                       
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Tanggal Peminjaman</label>
                            <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e($p->tanggal_peminjaman); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Tanggal Pengembalian</label>
                            <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e($p->tanggal_pengembalian); ?>">
                        </div>
                        <?php $__currentLoopData = $mobils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($p->mobil_id == $m->id): ?>
                        <div class="mb-3">
                            
                            <label class="small mb-1" for="inputUsername">Nama Mobil</label>
                            <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e($m->nama_mobil); ?>">
                                                       
                        </div>
                        <div class="mb-3">
                            
                            <label class="small mb-1" for="inputUsername">Model Mobil</label>
                            <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e($m->model_mobil); ?>">
                                                       
                        </div>
                        <div class="mb-3">
                            
                            <label class="small mb-1" for="inputUsername">Plat Mobil</label>
                            <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e($m->plat_mobil); ?>">
                                                       
                        </div>
                        <div class="mb-3">
                            
                            <label class="small mb-1" for="inputUsername">Tarif Mobil</label>
                            <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e($m->tarif_sewa); ?>">
                                                       
                        </div>
                        <?php 
                                    $tanggalAwal = \Carbon\Carbon::parse($p->tanggal_peminjaman);

                                    // Tanggal akhir
                                    $tanggalAkhir = \Carbon\Carbon::parse($p->tanggal_pengembalian);

                                    // Hitung selisih tanggal
                                    $perbandinganJarak = $tanggalAwal->diffInDays($tanggalAkhir);
                            ?>
                            <p>Jarak antara tanggal <?php echo e($tanggalAwal->format('Y-m-d')); ?> dan <?php echo e($tanggalAkhir->format('Y-m-d')); ?> adalah <?php echo e($perbandinganJarak); ?> hari.</p>
                            <p>Jadi Total Pembayaran : <?php echo e($m->tarif_sewa * $perbandinganJarak); ?></p>
                        <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            
                            
                            <?php if($p->status == 'sedang dipinjam'): ?>
                                <a href="/pengembalian/<?php echo e($p->id); ?>"  class="btn btn-primary">Kembalikan</a>
                            <?php else: ?>
                            <h5 style="color: rgb(255, 191, 0)">SUDAH SELESAI !</h5>
                            <?php endif; ?>
                        <hr>

                    </form>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
            <?php else: ?>
            <?php $no = 1;  ?>
            <?php $__currentLoopData = $peminjaman_mobils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card-body">
                <form>
                    <!-- Form Group (username)-->
                    <h5><?php echo e($no++); ?></h5>
                    <div class="mb-3">
                        
                        <label class="small mb-1" for="inputUsername">Status</label>
                        <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e($p->status); ?>">
                                                   
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="inputUsername">Tanggal Peminjaman</label>
                        <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e($p->tanggal_peminjaman); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="inputUsername">Tanggal Pengembalian</label>
                        <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e($p->tanggal_pengembalian); ?>">
                    </div>
                    <?php $__currentLoopData = $mobils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    <div class="mb-3">
                        
                        <label class="small mb-1" for="inputUsername">Nama Mobil</label>
                        <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e($m->nama_mobil); ?>">
                                                   
                    </div>
                    <div class="mb-3">
                        
                        <label class="small mb-1" for="inputUsername">Model Mobil</label>
                        <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e($m->model_mobil); ?>">
                                                   
                    </div>
                    <div class="mb-3">
                        
                        <label class="small mb-1" for="inputUsername">Plat Mobil</label>
                        <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e($m->plat_mobil); ?>">
                                                   
                    </div>
                    <div class="mb-3">
                        
                        <label class="small mb-1" for="inputUsername">Tarif Mobil</label>
                        <input class="form-control" id="inputUsername" type="text" readonly value="<?php echo e($m->tarif_sewa); ?>">
                                                   
                    </div>
                    <?php 
                                $tanggalAwal = \Carbon\Carbon::parse($p->tanggal_peminjaman);

                                // Tanggal akhir
                                $tanggalAkhir = \Carbon\Carbon::parse($p->tanggal_pengembalian);

                                // Hitung selisih tanggal
                                $perbandinganJarak = $tanggalAwal->diffInDays($tanggalAkhir);
                        ?>
                        <p>Jarak antara tanggal <?php echo e($tanggalAwal->format('Y-m-d')); ?> dan <?php echo e($tanggalAkhir->format('Y-m-d')); ?> adalah <?php echo e($perbandinganJarak); ?> hari.</p>
                        <p>Jadi Total Pembayaran : <?php echo e($m->tarif_sewa * $perbandinganJarak); ?></p>
                   
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        
                        
                        <?php if($p->status == 'sedang dipinjam'): ?>
                        <h5 style="color: rgb(255, 191, 0)">SEDANG BERLANGSUNG !</h5>                        <?php else: ?>
                        <h5 style="color: rgb(255, 191, 0)">SUDAH SELESAI !</h5>
                        <?php endif; ?>
                    <hr>

                </form>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/SewaMobilApp/resources/views/profile.blade.php ENDPATH**/ ?>