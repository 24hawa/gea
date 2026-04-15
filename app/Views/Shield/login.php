<style>
    .btn-outline-dark:hover {
        background-color: #f8f9fa;
        color: #000;
    }
    .social-login-separator {
        display: flex;
        align-items: center;
        text-align: center;
        margin: 25px 0;
        color: #6c757d; /* Muted gray color */
        font-weight: 500;
    }
    .social-login-separator::before, .social-login-separator::after {
        content: '';
        flex: 1;
        border-bottom: 1px solid #dee2e6;
    }
   .social-login-separator:not(:empty)::before { margin-right: 1rem; }
.social-login-separator:not(:empty)::after { margin-left: 1rem; }
    .social-btn {
        transition: all 0.2s ease;
        border-radius: 8px;
    }
    .social-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
</style>
<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.login') ?> <?= $this->endSection() ?>

<?= $this->section('main') ?>

    <div class="container d-flex justify-content-center p-5">
        <div class="card col-12 col-md-5 shadow-sm">
            <div class="card-body">
                <h5 class="card-title mb-5"><?= lang('Auth.login') ?></h5>

                <?php if (session('error') !== null) : ?>
                    <div class="alert alert-danger" role="alert"><?= esc(session('error')) ?></div>
                <?php elseif (session('errors') !== null) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php if (is_array(session('errors'))) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?= esc($error) ?>
                                <br>
                            <?php endforeach ?>
                        <?php else : ?>
                            <?= esc(session('errors')) ?>
                        <?php endif ?>
                    </div>
                <?php endif ?>

                <?php if (session('message') !== null) : ?>
                    <div class="alert alert-success" role="alert"><?= esc(session('message')) ?></div>
                <?php endif ?>

<form action="<?= url_to('login') ?>" method="post">
    <?= csrf_field() ?>

<div class="form-floating mb-3">
    <input type="email" class="form-control" id="floatingEmailInput" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required>
    <label for="floatingEmailInput"><?= lang('Auth.email') ?></label>
</div>

    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPasswordInput" name="password" inputmode="text" autocomplete="current-password" placeholder="<?= lang('Auth.password') ?>" required>
        <label for="floatingPasswordInput"><?= lang('Auth.password') ?></label>
    </div>

    <div class="d-grid col-12 mx-auto mb-3">
        <button type="submit" class="btn btn-primary py-2"><?= lang('Auth.login') ?></button>
    </div>

    <div class="social-login-separator">or</div>

    <div class="d-grid gap-2 mb-3">
        <a href="<?= base_url('oauth/google') ?>" class="btn btn-outline-dark social-btn shadow-sm py-2" style="display: flex; align-items: center; justify-content: center; gap: 10px;">
            <img src="https://authjs.dev/img/providers/google.svg" width="20" height="20" alt="Google">
            <span style="font-weight: 500;">Continue with Google</span>
        </a>
    </div>

    <div class="text-center mt-4 small">
        <?php if (setting('Auth.allowRegistration')) : ?>
            <p class="mb-1"><?= lang('Auth.needAccount') ?> <a href="<?= url_to('register') ?>"><?= lang('Auth.register') ?></a></p>
        <?php endif ?>
        
    <div class="text-center mt-3">
        <a href="<?= url_to('magic-link') ?>" class="small">Forgot your password?</a>
    </div>
    </div>

</form>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>
