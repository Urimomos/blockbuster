<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>

<div class="row mb-4">
    <div class="col-12">
        <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, #001a57 0%, #003399 100%); color: white; border-left: 6px solid #ffcc00 !important; border-radius: 8px;">
            <div class="card-body p-4 d-flex align-items-center">
                <div class="mr-4 d-none d-md-block">
                    <i class="fa fa-user-circle-o fa-4x" style="color: #ffcc00;"></i>
                </div>
                <div>
                    <h2 class="font-weight-bold mb-2" style="color: #ffcc00;">¡Hola, <?= session()->get('nombre') ?>!</h2>
                    <p class="mb-0 text-light" style="font-size: 1.1rem;">
                        Bienvenido al centro de control principal de <strong>Blockbuster</strong>. 
                        Desde aquí tienes el control total para gestionar el catálogo, los usuarios y los planes de la plataforma.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow-sm h-100 py-2 card-hover" style="border-left: 4px solid #17a2b8 !important;" onclick="window.location.href='<?= base_url('admin/usuarios') ?>'">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Módulo de</div>
                        <div class="h5 mb-0 font-weight-bold text-dark">Usuarios</div>
                        <span class="text-muted small mt-2 d-inline-block">Gestionar <i class="fa fa-arrow-right"></i></span>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-users fa-2x text-muted" style="opacity: 0.3;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow-sm h-100 py-2 card-hover" style="border-left: 4px solid #dc3545 !important;" onclick="window.location.href='<?= base_url('admin/streaming') ?>'">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Catálogo de</div>
                        <div class="h5 mb-0 font-weight-bold text-dark">Streaming</div>
                        <span class="text-muted small mt-2 d-inline-block">Gestionar <i class="fa fa-arrow-right"></i></span>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-film fa-2x text-muted" style="opacity: 0.3;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow-sm h-100 py-2 card-hover" style="border-left: 4px solid #28a745 !important;" onclick="window.location.href='<?= base_url('admin/videos') ?>'">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Archivos de</div>
                        <div class="h5 mb-0 font-weight-bold text-dark">Videos</div>
                        <span class="text-muted small mt-2 d-inline-block">Gestionar <i class="fa fa-arrow-right"></i></span>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-play-circle fa-2x text-muted" style="opacity: 0.3;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow-sm h-100 py-2 card-hover" style="border-left: 4px solid #ffcc00 !important;" onclick="window.location.href='<?= base_url('admin/planes') ?>'">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="color: #d39e00 !important;">Suscripciones y</div>
                        <div class="h5 mb-0 font-weight-bold text-dark">Planes</div>
                        <span class="text-muted small mt-2 d-inline-block">Gestionar <i class="fa fa-arrow-right"></i></span>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-credit-card fa-2x text-muted" style="opacity: 0.3;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                <h6 class="font-weight-bold text-secondary"><i class="fa fa-shield"></i> Información de Seguridad</h6>
            </div>
            <div class="card-body">
                <table class="table table-sm table-borderless mb-0">
                    <tr>
                        <td class="text-muted" style="width: 150px;">Usuario Actual:</td>
                        <td class="font-weight-bold"><?= session()->get('nombre') ?></td>
                    </tr>
                    <tr>
                        <td class="text-muted">Correo Electrónico:</td>
                        <td class="font-weight-bold"><?= session()->get('email') ?></td>
                    </tr>
                    <tr>
                        <td class="text-muted">Nivel de Acceso:</td>
                        <td><span class="badge badge-dark"><?= session()->get('rol_nombre') ?> (ID: <?= session()->get('id_rol') ?>)</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>