<?php if(has_category('oferta')): ?>
  <div class="flex w-fit my-4 rounded-full bg-[#ffb300] px-7.5 py-2.5 text-[#242424] hover:text-white duration-300 ease-in-out hover:bg-sky-400">
    <a href="https://solid-code.pl/" class="font-bold">
      <?php echo e(get_field('oferta_contact') ?: 'Brak danych'); ?>

    </a>
  </div>
<?php endif; ?><?php /**PATH C:\Users\krzys\Local Sites\gnstudio\app\public\wp-content\themes\gnstudio\resources\views/components/offer.blade.php ENDPATH**/ ?>