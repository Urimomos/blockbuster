<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>

<div class="row mb-4">
    <div class="col-md-12">
        <h3 style="color: #001a57; font-weight: bold;"><i class="fa fa-user-circle-o mr-2"></i> Mi Perfil</h3>
        <p class="text-muted small mb-0">Gestiona tu información personal y credenciales de acceso.</p>
    </div>
</div>

<?php if(session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
        <i class="fa fa-check-circle mr-2"></i> <?= session()->getFlashdata('mensaje') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm" role="alert">
        <i class="fa fa-exclamation-circle mr-2"></i> <?= session()->getFlashdata('error') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<div class="row">
    <!-- Columna de Foto de Perfil -->
    <div class="col-xl-4 col-lg-5 mb-4">
        <div class="card shadow-sm border-0 h-100" style="border-top: 4px solid #ffcc00 !important;">
            <div class="card-body text-center pb-5">
                <h5 class="font-weight-bold mb-4" style="color: #001a57;">Foto de Perfil</h5>
                
                <?php if(!empty($usuario['imagen_usuario'])): ?>
                    <img src="<?= base_url('img/perfiles/' . $usuario['imagen_usuario']) ?>" 
                         class="rounded-circle mb-3 shadow" 
                         style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #f8f9fa;">
                <?php else: ?>
                    <div class="rounded-circle d-inline-flex justify-content-center align-items-center mb-3 shadow-sm" 
                         style="width: 150px; height: 150px; background-color: #e9ecef; border: 4px solid #f8f9fa;">
                        <i class="fa fa-user fa-4x text-secondary"></i>
                    </div>
                <?php endif; ?>

                <h5 class="font-weight-bold text-dark mb-1"><?= esc($usuario['nombre_usuario'] . ' ' . $usuario['ap_usuario']) ?></h5>
                <p class="text-muted small mb-4"><?= session()->get('rol_nombre') ?></p>

                <form action="<?= base_url('admin/perfil/subir_foto') ?>" method="POST" enctype="multipart/form-data">
                    <div class="custom-file mb-3 text-left">
                        <input type="file" name="imagen_usuario" class="custom-file-input" id="customFile" accept="image/*" required>
                        <label class="custom-file-label" for="customFile" data-browse="Elegir">Seleccionar imagen...</label>
                    </div>
                    <button type="submit" class="btn btn-block" style="background-color: #001a57; color: white; font-weight: bold;">
                        <i class="fa fa-upload mr-1"></i> Actualizar Foto
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Columna de Datos Personales -->
    <div class="col-xl-8 col-lg-7 mb-4">
        <div class="card shadow-sm border-0 h-100" style="border-top: 4px solid #001a57 !important;">
            <div class="card-header bg-white border-0 pt-4 pb-0">
                <h5 class="font-weight-bold" style="color: #001a57;">Detalles de la Cuenta</h5>
            </div>
            <div class="card-body">
                <form action="<?= base_url('admin/perfil/actualizar') ?>" method="POST">
                    
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="small font-weight-bold text-secondary">Nombre(s)</label>
                            <input type="text" name="nombre_usuario" class="form-control bg-light" value="<?= esc($usuario['nombre_usuario']) ?>" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="small font-weight-bold text-secondary">Apellido Paterno</label>
                            <input type="text" name="ap_usuario" class="form-control bg-light" value="<?= esc($usuario['ap_usuario']) ?>" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="small font-weight-bold text-secondary">Apellido Materno</label>
                            <input type="text" name="am_usuario" class="form-control bg-light" value="<?= esc($usuario['am_usuario']) ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="small font-weight-bold text-secondary">Correo Electrónico</label>
                            <input type="email" name="email_usuario" class="form-control bg-light" value="<?= esc($usuario['email_usuario']) ?>" required>
                        </div>
                    </div>

                    <hr class="mt-2 mb-4">

                    <h6 class="font-weight-bold mb-3" style="color: #001a57;">Cambio de Contraseña</h6>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label class="small font-weight-bold text-secondary">Nueva Contraseña <span class="text-muted font-weight-normal">(Déjalo en blanco si no deseas cambiarla)</span></label>
                            <input type="password" name="password_usuario" class="form-control bg-light" placeholder="••••••••">
                        </div>
                    </div>

                    <div class="text-right mt-3">
                        <button type="submit" class="btn px-4" style="background-color: #ffcc00; color: #001a57; font-weight: bold;">
                            <i class="fa fa-save mr-1"></i> Guardar Cambios
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Pequeño script para que al elegir un archivo, su nombre se muestre en el campo (Bootstrap feature)
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = document.getElementById("customFile").files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });
</script>

<?= $this->endSection() ?>