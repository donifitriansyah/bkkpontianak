<div class="accordion mt-3" id="accordionGabungan">

    <?php $__empty_1 = true; $__currentLoopData = $struktur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?php echo e($item->id); ?>">
                <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse<?php echo e($item->id); ?>">

                    <?php echo e($item->judul); ?>

                </button>
            </h2>

            <div id="collapse<?php echo e($item->id); ?>"
                 class="accordion-collapse collapse"
                 data-bs-parent="#accordionGabungan">

                <div class="accordion-body text-center">

                    <?php if($item->path): ?>
                        <img src="<?php echo e(asset('storage/' . $item->path)); ?>"
                             class="img-fluid"
                             style="max-height:500px;">
                    <?php else: ?>
                        <p>Gambar belum tersedia.</p>
                    <?php endif; ?>

                </div>
            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="text-center p-4">
            Data struktur organisasi belum tersedia.
        </div>
    <?php endif; ?>

</div>
<?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/components/ppid/struktur-organisasi.blade.php ENDPATH**/ ?>