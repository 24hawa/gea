<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('main') ?>
<div class="container d-flex justify-content-center p-5">
    <div class="card col-12 col-md-5 shadow-sm">
        <div class="card-body">
            <h5 class="card-title mb-4">Create Account</h5>
            <?php if (session()->getFlashdata('message')) : ?>
                <div class="alert alert-success small" role="alert">
                    <?= session()->getFlashdata('message') ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger small" role="alert">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>
            <p class="text-muted small mb-4">Enter your email and we'll send you a temporary password to log in.</p>

            <form action="<?= url_to('register') ?>" method="post">
                <?= csrf_field() ?>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?= old('email') ?>" required>
                    <label>Email Address</label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
            </form>

            <div class="text-center mt-3 small">
                Already have an account? <a href="<?= url_to('login') ?>">Login</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>