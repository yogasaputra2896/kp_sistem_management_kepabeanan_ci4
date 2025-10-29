<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<?= $this->section('title') ?>Register<?= $this->endSection() ?>
<div class="row h-100">
    <!-- FORM KIRI -->
    <div class="col-lg-5 col-12">
        <div id="auth-left">

            <div class="auth-logo">
                <a href="<?= base_url(); ?>">
                    <img src="<?= base_url('assets/images/logo/logo.png'); ?>" alt="Logo">
                </a>
            </div>

            <h1 class="auth-title">Daftar Akun</h1>
            <p class="auth-subtitle mb-5">
                Isi data di bawah untuk membuat akun baru.
            </p>

            <!-- FORM REGISTER -->
            <form action="<?= url_to('register') ?>" method="post">
                <?= csrf_field() ?>

                <div class="form-group position-relative mb-4">
                    <input type="text"
                           class="form-control form-control-xl <?= session('errors.username') ? 'is-invalid' : '' ?>"
                           name="username"
                           placeholder="Username"
                           value="<?= old('username') ?>" required>
                    <div class="invalid-feedback"><?= session('errors.username') ?></div>
                </div>

                <div class="form-group position-relative mb-4">
                    <input type="email"
                           class="form-control form-control-xl <?= session('errors.email') ? 'is-invalid' : '' ?>"
                           name="email"
                           placeholder="Email"
                           value="<?= old('email') ?>" required>
                    <div class="invalid-feedback"><?= session('errors.email') ?></div>
                </div>

                <div class="form-group position-relative mb-4">
                    <input type="password"
                           class="form-control form-control-xl <?= session('errors.password') ? 'is-invalid' : '' ?>"
                           name="password"
                           placeholder="Password" required>
                    <div class="invalid-feedback"><?= session('errors.password') ?></div>
                </div>

                <div class="form-group position-relative mb-4">
                    <input type="password"
                           class="form-control form-control-xl <?= session('errors.pass_confirm') ? 'is-invalid' : '' ?>"
                           name="pass_confirm"
                           placeholder="Konfirmasi Password" required>
                    <div class="invalid-feedback"><?= session('errors.pass_confirm') ?></div>
                </div>

                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Daftar</button>
            </form>

            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">
                    Sudah punya akun?
                    <a href="<?= url_to('login') ?>" class="font-bold">Login</a>.
                </p>
            </div>
        </div>
    </div>

    <!-- BACKGROUND KANAN -->
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right"></div>
    </div>
</div>
<?= $this->endSection() ?>
