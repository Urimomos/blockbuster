<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<section class="normal-breadcrumb set-bg" data-setbg="<?= base_url('img/normal-breadcrumb.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2>Mi Perfil</h2>
                    <p>Gestiona tu cuenta y suscripción.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="spad" style="background-color: #0b0c2a;">
    <div class="container">
        
        <?php if(session()->getFlashdata('mensaje')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
        <?php endif; ?>
        <?php if(session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card" style="background-color: #1d1e3f; border: none; border-top: 4px solid #FFCC00;">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-4 text-center mb-4">
                                <?php if(!empty($usuario['imagen_usuario'])): ?>
                                    <img src="<?= base_url('img/perfiles/' . $usuario['imagen_usuario']) ?>" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover; border: 3px solid #FFCC00;">
                                <?php else: ?>
                                    <div class="rounded-circle d-inline-flex justify-content-center align-items-center mb-3" style="width: 150px; height: 150px; background-color: #2b2d5c; border: 3px solid #FFCC00;">
                                        <i class="fa fa-user fa-4x text-white"></i>
                                    </div>
                                <?php endif; ?>
                                
                                <form action="<?= base_url('perfil/subir_foto') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="file" name="imagen_usuario" class="form-control-file text-white mb-2" accept="image/*" required>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-block" style="background-color: #FFCC00; color: black; font-weight: bold;">Subir Foto</button>
                                </form>
                            </div>
                            
                            <div class="col-md-8">
                                <h4 class="text-white mb-4 border-bottom pb-2">Información Personal</h4>
                                <form action="<?= base_url('perfil/actualizar') ?>" method="POST">
                                    <div class="form-group">
                                        <label class="text-white">Nombre de Usuario</label>
                                        <input type="text" name="nombre_usuario" class="form-control" value="<?= esc($usuario['nombre_usuario'] ?? '') ?>" required style="background: #2b2d5c; border: none; color: white;">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white">Correo Electrónico</label>
                                        <input type="email" name="email_usuario" class="form-control" value="<?= esc($usuario['email_usuario'] ?? '') ?>" required style="background: #2b2d5c; border: none; color: white;">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white">Nueva Contraseña <small class="text-muted">(Déjalo en blanco si no deseas cambiarla)</small></label>
                                        <input type="password" name="password_usuario" class="form-control" placeholder="••••••••" style="background: #2b2d5c; border: none; color: white;">
                                    </div>
                                    <div class="text-right mt-4">
                                        <button type="submit" class="btn" style="background-color: #FFCC00; color: black; font-weight: bold;">Guardar Cambios</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card" style="background-color: #1d1e3f; border: none; border-top: 4px solid #17a2b8;">
                    <div class="card-body p-4 text-center">
                        <h4 class="text-white mb-3">Mi Suscripción</h4>
                        
                        <?php if(!empty($mi_plan)): ?>

                            <?php if($mi_plan['estatus_usuario_plan'] == 1): ?>
                                <div class="p-3 rounded mb-3" style="background-color: #2b2d5c; border: 1px solid #28a745;">
                                    <span class="badge badge-success mb-2">ACTIVA</span>
                                    <h3 class="text-white font-weight-bold text-success"><?= esc($mi_plan['nombre_plan']) ?></h3>
                                </div>
                                <ul class="list-unstyled text-left text-light mb-4" style="line-height: 2;">
                                    <li><i class="fa fa-check text-success mr-2"></i> Límite de <?= $mi_plan['cantidad_limite_plan'] ?> pantallas</li>
                                    <li><i class="fa fa-check text-success mr-2"></i> Acceso total al catálogo</li>
                                </ul>

                            <?php elseif($mi_plan['estatus_usuario_plan'] == 0): ?>
                                <div class="p-3 rounded mb-3" style="background-color: #2b2d5c; border: 1px dashed #ffcc00;">
                                    <span class="badge badge-warning mb-2 text-dark">EN REVISIÓN</span>
                                    <h3 class="text-white font-weight-bold" style="color: #ffcc00 !important;"><?= esc($mi_plan['nombre_plan']) ?></h3>
                                    <p class="text-muted small mb-0 mt-2">Un operador está validando tu pago. Pronto tendrás acceso.</p>
                                </div>

                            <?php else: ?>
                                <div class="p-3 rounded mb-3" style="background-color: #2b2d5c; border: 1px solid #dc3545;">
                                    <span class="badge badge-danger mb-2">PAGO RECHAZADO</span>
                                    <h3 class="text-white font-weight-bold text-danger"><?= esc($mi_plan['nombre_plan']) ?></h3>
                                    <p class="text-muted small mb-0 mt-2">Hubo un problema con tu pago. Contacta a soporte.</p>
                                </div>
                            <?php endif; ?>

                        <?php else: ?>
                            <div class="p-3 rounded mb-4" style="background-color: #2b2d5c; border: 1px dashed #6c757d;">
                                <i class="fa fa-frown-o fa-3x text-muted mb-2"></i>
                                <h5 class="text-muted mt-2">Aún no tienes un plan</h5>
                            </div>
                        <?php endif; ?>

                        <a href="<?= base_url('planes') ?>" class="btn btn-outline-info btn-block text-white mt-4">Ver Catálogo de Planes</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?= $this->endSection() ?>