    <script src="<?php echo e(asset('backend/assets/static/js/components/dark.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>

    <script src="<?php echo e(asset('backend/assets/compiled/js/app.js')); ?>"></script>
    

    <!-- Need: Apexcharts -->
    <script src="<?php echo e(asset('backend/assets/extensions/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/static/js/pages/dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/extensions/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/static/js/pages/summernote.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/extensions/summernote/summernote-lite.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/extensions/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/static/js/pages/datatables.js')); ?>"></script>
    

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,
                callbacks: {
                    onImageUpload: function(files) {
                        uploadImage(files[0]);
                    }
                }
            });

            function uploadImage(file) {
                let data = new FormData();
                data.append("file", file);
                data.append("_token", "<?php echo e(csrf_token()); ?>");

                $.ajax({
                    url: "<?php echo e(route('summernote.upload')); ?>",
                    method: "POST",
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $('#summernote').summernote('insertImage', response.url);
                    },
                    error: function(err) {
                        console.error(err);
                        alert('Upload gambar gagal');
                    }
                });
            }
        });
    </script>
<?php /**PATH D:\OneDrive - MSFT\02. Pekerjaan\11. Kemenkes BKK Kelas I Pontianak\bkkpontianak\resources\views/includes/backend/script.blade.php ENDPATH**/ ?>