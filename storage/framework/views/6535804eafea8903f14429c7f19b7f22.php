<?php $__env->startSection('title', 'Cari Turnamen - ArenaHub'); ?>

<?php $__env->startSection('content'); ?>
    <div class="mx-auto max-w-6xl px-4 py-10">
        <h1 class="text-2xl font-bold mb-1">Cari Turnamen</h1>
        <p class="text-gray-400 mb-6">Cari turnamen berdasarkan nama atau pilih game yang mau dimainkan.</p>

        <form method="GET" action="<?php echo e(route('cari-turnamen')); ?>" class="bg-gray-800 border border-gray-700 rounded-lg p-4 mb-6">
            <div class="flex flex-col gap-3 md:flex-row">
                <input type="text" name="q" value="<?php echo e($q); ?>" placeholder="Ketik nama turnamen..."
                    class="flex-1 bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">

                <?php if($game): ?>
                    <input type="hidden" name="game" value="<?php echo e($game); ?>">
                <?php endif; ?>

                <button type="submit" class="bg-cyan-600 text-white px-4 py-2 rounded-md hover:bg-cyan-700">
                    Cari
                </button>
            </div>
        </form>

        <div class="flex gap-3 overflow-x-auto pb-2 mb-6">
            <a href="<?php echo e(route('cari-turnamen', ['q' => $q])); ?>"
                class="shrink-0 bg-gray-800 border border-gray-700 text-gray-200 px-4 py-2 rounded-lg text-sm">
                Semua
            </a>

            <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('cari-turnamen', ['q' => $q, 'game' => $g['id']])); ?>"
                    class="shrink-0 bg-gray-800 border <?php echo e($game === $g['id'] ? 'border-cyan-500 text-cyan-400' : 'border-gray-700 text-gray-200'); ?> px-4 py-2 rounded-lg text-sm">
                    <?php echo e($g['name']); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php if($q): ?>
            <p class="text-sm text-gray-400 mb-4">Hasil pencarian untuk: <span class="text-white"><?php echo e($q); ?></span></p>
        <?php endif; ?>

        <?php if(count($turnamen) === 0): ?>
            <div class="border border-dashed border-gray-700 rounded-lg p-8 text-center text-gray-500">
                [ Turnamen tidak ditemukan ]
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php $__currentLoopData = $turnamen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-gray-800 border border-gray-700 rounded-lg p-4">
                        <h2 class="text-lg font-bold"><?php echo e($t->title); ?></h2>
                        <p class="mt-2 text-sm text-gray-400"><?php echo e($t->game); ?></p>
                        <p class="text-sm text-gray-400">Kuota: <?php echo e($t->quota); ?></p>
                        <a href="<?php echo e(route('detail-turnamen', $t->id)); ?>" class="mt-3 inline-block text-sm font-semibold text-cyan-400 hover:underline">
                            Lihat Detail
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ASUS\Projects\turnamen-esport\project-semester-3-arena-hub\resources\views/pages/cari-turnamen.blade.php ENDPATH**/ ?>