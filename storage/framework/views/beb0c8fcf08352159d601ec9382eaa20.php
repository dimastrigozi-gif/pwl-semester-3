<?php $__env->startSection('title', 'ArenaHub - Platform Turnamen Esport'); ?>

<?php $__env->startSection('content'); ?>
    <section class="border-b border-gray-700">
        <div class="mx-auto max-w-6xl px-4 py-16 md:py-24">
            <div class="max-w-3xl">
                <span class="mb-4 inline-block rounded border border-gray-700 bg-gray-800 px-3 py-1 text-sm font-semibold text-cyan-400">
                    Platform Turnamen Esport
                </span>

                <h1 class="text-4xl font-extrabold leading-tight md:text-6xl">
                    Temukan Turnamenmu.<br>
                    <span class="text-cyan-500">Siap Bertanding?</span>
                </h1>

                <p class="mt-5 max-w-lg text-gray-400">
                    Cari, daftar, dan pantau turnamen esport dalam satu platform.
                </p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="<?php echo e(route('cari-turnamen')); ?>" class="bg-cyan-600 text-white px-4 py-2 rounded-md hover:bg-cyan-700 text-center">
                        Cari Turnamen
                    </a>
                    <button type="button" onclick="alert('Fitur Buat Turnamen masih dalam pengembangan')" class="bg-gray-700 text-gray-200 border border-gray-600 px-4 py-2 rounded-md hover:bg-gray-600 text-center">
                        Buat Turnamen
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-10">
        <h2 class="text-2xl font-bold mb-5">Game</h2>

        <div class="flex gap-3 overflow-x-auto pb-2">
            <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('cari-turnamen', ['game' => $game['id']])); ?>"
                    class="bg-gray-800 border border-gray-700 text-gray-200 px-4 py-2 rounded-lg text-sm hover:border-cyan-500 hover:text-cyan-400">
                    <?php echo e($game['name']); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <?php if(count($turnamenBerlangsung) > 0): ?>
        <section class="mx-auto max-w-6xl px-4 pb-10">
            <div class="mb-5 flex items-center justify-between gap-4">
                <h2 class="text-2xl font-bold">Turnamen Sedang Berlangsung</h2>
                <a href="<?php echo e(route('cari-turnamen')); ?>" class="text-sm font-semibold text-cyan-400 hover:underline">
                    Lihat Semua ->
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php $__currentLoopData = $turnamenBerlangsung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-gray-800 border border-gray-700 rounded-lg p-4">
                        <div class="flex items-center justify-between border-b border-gray-700 pb-3">
                            <span class="text-sm font-semibold text-cyan-400"><?php echo e($t['game']); ?></span>
                            <span class="bg-gray-700 text-gray-200 border border-gray-600 px-3 py-1 text-sm rounded">
                                <?php echo e($t['mode']); ?>

                            </span>
                        </div>

                        <h3 class="mt-3 text-lg font-bold leading-snug"><?php echo e($t['title']); ?></h3>

                        <div class="mt-3 space-y-1 text-sm text-gray-400">
                            <p>[Tgl] <?php echo e($t['date']); ?> - <?php echo e($t['time']); ?></p>
                            <p>[Lokasi] <?php echo e($t['location']); ?></p>
                            <p>[Peserta] <?php echo e($t['participants']); ?>/<?php echo e($t['quota']); ?> peserta</p>
                            <p>[Biaya] Rp <?php echo e(number_format($t['price'], 0, ',', '.')); ?></p>
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-2">
                            <span class="bg-gray-700 text-gray-200 border border-gray-600 px-3 py-1 text-sm rounded">
                                Sedang Berlangsung
                            </span>
                            <a href="<?php echo e(route('detail-turnamen', $t['id'])); ?>" class="bg-gray-700 text-gray-200 border border-gray-600 px-3 py-1 text-sm rounded hover:bg-gray-600">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>
    <?php endif; ?>

    <section class="mx-auto max-w-6xl px-4 pb-16">
        <div class="mb-5 flex items-center justify-between gap-4">
            <h2 class="text-2xl font-bold">Turnamen Akan Datang</h2>
            <a href="<?php echo e(route('cari-turnamen')); ?>" class="text-sm font-semibold text-cyan-400 hover:underline">
                Lihat Semua ->
            </a>
        </div>

        <?php if(count($turnamen) === 0): ?>
            <div class="border border-dashed border-gray-700 rounded-lg p-8 text-center text-gray-500">
                [ Belum ada turnamen untuk saat ini ]
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php $__currentLoopData = $turnamen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-gray-800 border border-gray-700 rounded-lg p-4">
                        <h3 class="text-lg font-bold"><?php echo e($t->title); ?></h3>
                        <p class="mt-2 text-sm text-gray-400"><?php echo e($t->game); ?></p>
                        <a href="<?php echo e(route('detail-turnamen', $t->id)); ?>" class="mt-3 inline-block text-sm font-semibold text-cyan-400 hover:underline">
                            Lihat Detail
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ASUS\Projects\turnamen-esport\project-semester-3-arena-hub\resources\views/pages/home.blade.php ENDPATH**/ ?>