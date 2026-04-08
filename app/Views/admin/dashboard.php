<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-12">
        <div class="card shadow-sm border-0" style="border-top: 4px solid #001a57 !important;">
            <div class="card-body">
                <h3 class="card-title" style="color: #001a57;">Dashboard Principal</h3>
                <p class="card-text text-muted">
                    Selecciona un módulo en el menú lateral izquierdo para comenzar a gestionar la información de la plataforma.
                </p>
                <hr>
                <p><strong>Tu Información de Sesión:</strong></p>
                <ul>
                    <li>Email: <?= session()->get('email') ?></li>
                    <li>ID Rol: <?= session()->get('id_rol') ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>