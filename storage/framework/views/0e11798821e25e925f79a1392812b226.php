<div class="accordion mt-3" id="accordionGabungan">

    
    <div class="accordion-item">
        <h2 class="accordion-header" id="gHeading1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#gCollapse1">
                Visi
            </button>
        </h2>
        <div id="gCollapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionGabungan">

            <div class="accordion-body">
                <?php if($data && $data->visi): ?>
                    <?php echo $data->visi; ?>

                <?php else: ?>
                    <p>Data visi belum tersedia.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    
    <div class="accordion-item">
        <h2 class="accordion-header" id="gHeading2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#gCollapse2">
                Misi
            </button>
        </h2>
        <div id="gCollapse2" class="accordion-collapse collapse" data-bs-parent="#accordionGabungan">

            <div class="accordion-body">
                <?php if($data && $data->misi): ?>
                    <?php echo $data->misi; ?>

                <?php else: ?>
                    <p>Data misi belum tersedia.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>
<?php /**PATH D:\Koding\bkkpontianak\resources\views/components/ppid/visi-misi.blade.php ENDPATH**/ ?>