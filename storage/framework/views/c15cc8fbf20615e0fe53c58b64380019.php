<?php $__env->startSection('title', 'Sign Up - ArenaHub'); ?>

<?php $__env->startSection('content'); ?>
    <div class="mx-auto max-w-md px-4 py-12">
        <div class="mb-6 text-center">
            <h1 class="text-2xl font-bold">Sign Up</h1>
            <p class="mt-1 text-sm text-gray-400">Buat akun biar bisa ikut atau bikin turnamen.</p>
        </div>

        <form method="POST" action="<?php echo e(route('signup')); ?>" class="bg-gray-800 border border-gray-700 rounded-lg p-4 space-y-4">
            <?php echo csrf_field(); ?>

            <?php if($errors->any()): ?>
                <div class="text-sm text-red-400"><?php echo e($errors->first()); ?></div>
            <?php endif; ?>

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Nama</label>
                <input type="text" name="name" value="<?php echo e(old('name')); ?>" required placeholder="Nama lengkap"
                    class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Username</label>
                <input type="text" name="username" value="<?php echo e(old('username')); ?>" required placeholder="username"
                    class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Email</label>
                <input type="email" name="email" value="<?php echo e(old('email')); ?>" required placeholder="email@arenahub.id"
                    class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Password</label>
                <input type="password" name="password" required placeholder="password"
                    class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-300 mb-1">Role</label>
                <select name="role" class="w-full bg-gray-900 border border-gray-700 rounded-md px-3 py-2 text-sm outline-none focus:border-cyan-500">
                    <option value="peserta">Peserta</option>
                    <option value="organizer">Organizer</option>
                </select>
            </div>

            <button type="submit" class="w-full bg-cyan-600 text-white px-4 py-2 rounded-md hover:bg-cyan-700">
                Sign Up
            </button>

            <p class="text-center text-sm text-gray-400">
                Sudah punya akun? <a href="<?php echo e(route('signin')); ?>" class="text-cyan-400 hover:underline">Sign In</a>
            </p>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ASUS\Projects\turnamen-esport\project-semester-3-arena-hub\resources\views/pages/signup.blade.php ENDPATH**/ ?>