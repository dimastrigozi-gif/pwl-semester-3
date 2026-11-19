<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'ArenaHub'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen bg-gray-900 text-white">
    <header class="sticky top-0 z-40 border-b border-gray-700 bg-gray-900">
        <div class="mx-auto flex h-16 max-w-6xl items-center justify-between px-4">
            <a href="<?php echo e(route('home')); ?>" class="text-xl font-extrabold tracking-tight">
                Arena<span class="text-cyan-500">Hub</span>
            </a>

            <nav class="hidden items-center gap-6 text-sm md:flex">
                <a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'text-cyan-400' : 'text-gray-300 hover:text-white'); ?>">Home</a>
                <a href="<?php echo e(route('cari-turnamen')); ?>" class="<?php echo e(request()->routeIs('cari-turnamen') ? 'text-cyan-400' : 'text-gray-300 hover:text-white'); ?>">Cari Turnamen</a>
                <a href="<?php echo e(route('tentang')); ?>" class="<?php echo e(request()->routeIs('tentang') ? 'text-cyan-400' : 'text-gray-300 hover:text-white'); ?>">Tentang</a>
            </nav>

            <div class="hidden items-center gap-3 text-sm md:flex">
                <?php if(session('user')): ?>
                    <span class="text-gray-400"><?php echo e(session('user')['name']); ?></span>

                    <?php if(session('user')['role'] === 'organizer'): ?>
                        <a href="<?php echo e(route('organizer.dashboard')); ?>" class="text-cyan-400 hover:underline">Dashboard</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('profil')); ?>" class="text-gray-300 hover:text-white">Profil</a>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="text-gray-400 hover:text-white">Logout</button>
                    </form>
                <?php else: ?>
                    <a href="<?php echo e(route('signin')); ?>" class="text-gray-300 hover:text-white">Sign In</a>
                    <a href="<?php echo e(route('signup')); ?>" class="bg-cyan-600 text-white px-4 py-2 rounded-md hover:bg-cyan-700">Sign Up</a>
                <?php endif; ?>
            </div>
        </div>

        <div class="border-t border-gray-800 px-4 py-2 md:hidden">
            <nav class="flex flex-wrap items-center gap-4 text-sm">
                <a href="<?php echo e(route('home')); ?>" class="text-gray-300">Home</a>
                <a href="<?php echo e(route('cari-turnamen')); ?>" class="text-gray-300">Cari Turnamen</a>
                <a href="<?php echo e(route('tentang')); ?>" class="text-gray-300">Tentang</a>

                <?php if(session('user')): ?>
                    <a href="<?php echo e(route('profil')); ?>" class="text-gray-300">Profil</a>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="text-gray-400">Logout</button>
                    </form>
                <?php else: ?>
                    <a href="<?php echo e(route('signin')); ?>" class="text-gray-300">Sign In</a>
                    <a href="<?php echo e(route('signup')); ?>" class="text-cyan-400">Sign Up</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="mt-10 border-t border-gray-700 px-4 py-8">
        <div class="mx-auto max-w-6xl text-center text-sm text-gray-500">
            ArenaHub - Platform Turnamen Esport &copy; 2026
        </div>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\ASUS\Projects\turnamen-esport\project-semester-3-arena-hub\resources\views/layouts/app.blade.php ENDPATH**/ ?>