<?php $__env->startSection('title', $t['title'] . ' - ArenaHub'); ?>

<?php $__env->startSection('content'); ?>
    <div class="mx-auto max-w-4xl px-4 py-10">
        <a href="<?php echo e(route('cari-turnamen')); ?>" class="text-sm text-gray-400 hover:text-white">&lt;- Kembali ke Cari Turnamen</a>

        <div class="mt-4 bg-gray-800 border border-gray-700 rounded-lg p-4">
            <div class="flex items-center justify-between gap-3 border-b border-gray-700 pb-3">
                <span class="text-sm font-semibold text-cyan-400"><?php echo e($t['game']); ?></span>
                <span class="bg-gray-700 text-gray-200 border border-gray-600 px-3 py-1 text-sm rounded">
                    <?php echo e($t['mode']); ?>

                </span>
            </div>

            <h1 class="mt-4 text-2xl font-bold"><?php echo e($t['title']); ?></h1>

            <div class="mt-4 grid grid-cols-1 gap-2 text-sm text-gray-400 md:grid-cols-2">
                <p>[Tgl] <?php echo e($t['date']); ?> - <?php echo e($t['time']); ?></p>
                <p>[Lokasi] <?php echo e($t['location']); ?></p>
                <p>[Peserta] <?php echo e($t['participants']); ?>/<?php echo e($t['quota']); ?> peserta</p>
                <p>[Biaya] Rp <?php echo e(number_format($t['price'], 0, ',', '.')); ?></p>
            </div>

            <div class="mt-6">
                <h2 class="font-semibold mb-2">Deskripsi</h2>
                <p class="text-sm text-gray-400"><?php echo e($t['description']); ?></p>
            </div>

            <div class="mt-6">
                <h2 class="font-semibold mb-2">Peraturan</h2>
                <ul class="list-disc pl-5 space-y-1 text-sm text-gray-400">
                    <?php $__currentLoopData = $t['rules']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($rule); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

            <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                <a href="<?php echo e(route('pendaftaran', $t['id'])); ?>" class="bg-cyan-600 text-white px-4 py-2 rounded-md hover:bg-cyan-700 text-center">
                    Daftar Sekarang
                </a>
                <a href="<?php echo e(route('jadwal')); ?>" class="bg-gray-700 text-gray-200 border border-gray-600 px-3 py-1 text-sm rounded text-center">
                    Lihat Jadwal
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ASUS\Projects\turnamen-esport\project-semester-3-arena-hub\resources\views/pages/detail-turnamen.blade.php ENDPATH**/ ?>