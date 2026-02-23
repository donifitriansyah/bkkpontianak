<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: url("<?php echo e(asset('frontend/img/kantor.png')); ?>") no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.85);
            /* transparan */
            backdrop-filter: blur(6px);
            border-radius: 20px;
            max-width: 420px;
            width: 100%;
        }

        .login-logo img {
            max-width: 180px;
        }
    </style>
</head>

<body>

    <div class="card login-card shadow-lg p-4">
        <!-- Logo -->
        <div class="login-logo text-center">
            <img src="<?php echo e(asset('frontend/img/logokemenkes.png')); ?>" alt="Logo">
        </div>

        <h4 class="text-center fw-semibold">Login</h4>

        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control"  value="<?php echo e(old('email')); ?>" placeholder="Masukkan email" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control"
                        placeholder="Masukkan password" required>
                    <span class="input-group-text" style="cursor:pointer" onclick="togglePassword()">
                        <i id="eyeIcon" class="bi bi-eye"></i>
                    </span>
                </div>
            </div>

            <a href="">Lupa Password</a>

            <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary btn-lg rounded-pill">
                    Login
                </button>
            </div>
        </form>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Show / Hide Password -->
    <script>
        function togglePassword() {
            const password = document.getElementById("password");
            const icon = document.getElementById("eyeIcon");

            if (password.type === "password") {
                password.type = "text";
                icon.classList.replace("bi-eye", "bi-eye-slash");
            } else {
                password.type = "password";
                icon.classList.replace("bi-eye-slash", "bi-eye");
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php if($errors->any()): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Login Gagal',
                text: '<?php echo e($errors->first()); ?>',
                confirmButtonColor: '#0d6efd'
            });
        </script>
    <?php endif; ?>

</body>


</html>
<?php /**PATH D:\Koding\bkkpontianak\resources\views/pages/backend/auth/login.blade.php ENDPATH**/ ?>