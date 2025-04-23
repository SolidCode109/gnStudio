<!doctype html>
<html <?php (language_attributes()); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

    <?php (do_action('get_header')); ?>
    <?php (wp_head()); ?>

  </head>

  <body <?php (body_class()); ?>>
    <?php (wp_body_open()); ?>

    <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        <?php echo e(__('Skip to content', 'sage')); ?>

      </a>

      <?php echo $__env->make('sections.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

      <main id="main" class="main">
        <?php echo $__env->yieldContent('content'); ?>
      </main>

      <?php if (! empty(trim($__env->yieldContent('sidebar')))): ?>
        <aside class="sidebar">
          <?php echo $__env->yieldContent('sidebar'); ?>
        </aside>
      <?php endif; ?>

      <?php echo $__env->make('sections.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

    <?php (do_action('get_footer')); ?>
    <?php (wp_footer()); ?>
  </body>
</html>
<?php /**PATH C:\Users\krzys\Local Sites\gnstudio\app\public\wp-content\themes\gnstudio\resources\views/layouts/app.blade.php ENDPATH**/ ?>