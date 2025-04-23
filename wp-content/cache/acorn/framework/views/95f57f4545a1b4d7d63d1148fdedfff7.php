<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php (the_post()); ?>
  <article <?php (post_class()); ?>>
    <div class="container mx-auto px-4 py-4">
    <div class="my-4 bg-[#242424] hover:bg-[#000000] transition duration-300 ease-in-out rounded-lg px-6 py-8 ring shadow-xl ring-gray-900/5 text-white">

      <div class="flex items-center gap-x-4 text-xs">
        <p class="text-white">Title: <?php echo e(get_the_title()); ?></p>
        <p class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-[#242424] hover:bg-gray-100">Author: <?php echo e(get_the_author()); ?></p>
        <p class="text-white">Date: <?php echo e(get_the_date()); ?></p>
      </div>

    <div class="my-3 text-md font-semibold text-white">
      <p>Content: <?php echo get_the_content(); ?></p>
    </div>

    <?php if(view()->exists('components.offer')): ?>
        <?php if (isset($component)) { $__componentOriginald393a6a628541367cae7f811970f322e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald393a6a628541367cae7f811970f322e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.offer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('offer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald393a6a628541367cae7f811970f322e)): ?>
<?php $attributes = $__attributesOriginald393a6a628541367cae7f811970f322e; ?>
<?php unset($__attributesOriginald393a6a628541367cae7f811970f322e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald393a6a628541367cae7f811970f322e)): ?>
<?php $component = $__componentOriginald393a6a628541367cae7f811970f322e; ?>
<?php unset($__componentOriginald393a6a628541367cae7f811970f322e); ?>
<?php endif; ?>
    <?php else: ?>
        <p class="text-red-500">Komponent "Oferta" nie jest dostępny</p>
    <?php endif; ?>
  </div>
  </article>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\krzys\Local Sites\gnstudio\app\public\wp-content\themes\gnstudio\resources\views/single.blade.php ENDPATH**/ ?>