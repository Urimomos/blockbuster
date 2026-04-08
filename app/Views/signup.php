<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

    <section class="normal-breadcrumb set-bg" data-setbg="<?= base_url('img/normal-breadcrumb.jpg') ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Registro</h2>
                        <p>Únete a la plataforma de Blockbuster.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="signup spad">
        <center>
                    <div class="login__form">
                        <h3 class="text-center">Crea una cuenta</h3>
                        <form action="<?= base_url('registro/guardar') ?>" method="POST">
                            <div class="input__item">
                                <input type="text" name="nombre_usuario" placeholder="Nombre(s)" required>
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" name="ap_usuario" placeholder="Apellido Paterno" required>
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" name="am_usuario" placeholder="Apellido Materno" required>
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input type="email" name="email_usuario" placeholder="Correo electrónico" required>
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" name="password_usuario" placeholder="Contraseña" required>
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn">Registrarse</button>
                        </form>
                        <h5>¿Ya tienes una cuenta? <a href="<?= base_url('login') ?>">¡Inicia sesión!</a></h5>
                    </div>
                </div>
            </div>
        </div>
        </center>
    </section>

<?= $this->endSection() ?>