<?= $this->extend('main') ?>

<?= $this->section('content') ?>
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="login_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <a href = "/"><img src="images/logo.png" class="brand_logo" alt="Logo" /></a>
                </div>
            </div>
            <div class="d-flex justify-content-center form_container mt-0">
                <form action="/login" method="POST">
                    <div class="input_field">
                        <div class="input-group mb-4">
                            <div>
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control input_user" value="" placeholder="Email" />
                        </div>
                        <div class="input-group mb-3">
                            <div>
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control input_pass" value="" placeholder="Password" />
                        </div>

                        <?php if (session()->getFlashdata('msg')) : ?>
                            <div class="input-group mb-3">
                                <div>
                                    <span class="input-group-text"><i class="fas fa-exclamation-circle"></i></span>
                                </div>
                                <h6 class="center mt-2 ml-3" style="color: #3a0808">
                                    <?= session()->getFlashdata('msg') ?>
                                </h6>
                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="buttons mt-4">
                        <div class="row">
                            <div class="col">
                                <a href="#">
                                    <input type="submit" class="btn btn-login" value="Login">
                                </a>
                            </div>

                            <div class="col">
                                <a href="register">
                                    <div class="btn btn-login">Register</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <h1 class="login-footer">Scholar Portal</h1>
    </div>
</div>

<?= $this->endSection() ?>

