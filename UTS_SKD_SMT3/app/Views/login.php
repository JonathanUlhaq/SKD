<?= $this->extend('Layout'); ?>
<?= $this->section('isinya'); ?>
<style>
    .alert {
        padding: 20px;
        background-color: #f44336;
        /* Red */
        color: white;
        margin-bottom: 15px;
    }
</style>



<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="<?= base_url(); ?>/images/signin-image.jpg" alt="sing up image"></figure>
                <a href="/Register" class="signup-image-link">Buat Akun</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Login</h2>
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="valid">
                        <div class="alert" role="alert">
                            <h4>Harap Periksa Lagi</h4>

                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <form method="POST" class="register-form" id="login-form" action="/login/proses">
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="text" name="email" id="email" placeholder="Masukkan Email" />
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Masukkan Password" />
                    </div>

                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>