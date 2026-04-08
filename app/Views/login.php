<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

    <section class="normal-breadcrumb set-bg" data-setbg="<?= base_url('img/normal-breadcrumb.jpg') ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Iniciar Sesión</h2>
                        <p>Bienvenido a la plataforma de Blockbuster.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Acceder</h3>
                        <form action="<?= base_url('login/autenticar') ?>" method="POST">
                            <div class="input__item">
                                <input type="email" name="email" placeholder="Correo electrónico" required>
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" name="password" placeholder="Contraseña" required>
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn">Entrar</button>
                        </form>
                       
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>¿No tienes una cuenta?</h3>
                        <a href="<?= base_url('registro') ?>" class="primary-btn">Regístrate ahora</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <?= $this->endSection() ?>