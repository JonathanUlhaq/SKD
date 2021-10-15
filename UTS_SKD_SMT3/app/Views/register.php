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

<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>

                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="valid">
                        <div class="alert" role="alert">
                            <h4>Harap Periksa Lagi</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <form method="POST" class="register-form" id="register-form" action="/Register/proses">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="nama" id="alamat" placeholder="Nama Lengkap" />
                    </div>
                    <div class="form-group">
                        <label for="alamat"><i class="zmdi zmdi-home"></i></label>
                        <input type="text" name="alamat" id="alamat" placeholder="Alamat" />
                    </div>
                    <div class="form-group">
                        <label for="lahir"><i class="zmdi zmdi-calendar"></i></label>
                        <input type="date" name="lahir" id="lahir" placeholder="Tanggal Lahir" />
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="text" name="email" id="email" placeholder="E-mail" />
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="pass" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="password2" id="re_pass" placeholder="Ulangi Password" />
                    </div>

                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="<?= base_url(); ?>/images/signup-image.jpg" alt="sing up image"></figure>
                <a href="/Login/index" class="signup-image-link">Saya sudah punya akun</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>