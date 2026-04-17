<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>

<div class="row mb-4">
    <div class="col-md-12">
        <h3 style="color: #001a57; font-weight: bold;">
            <i class="fa fa-users mr-2"></i> Base de Clientes
        </h3>
        <p class="text-muted">Directorio exclusivo de usuarios con membresía (Rol: 58).</p>
    </div>
</div>

<?php if(session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <?= session()->getFlashdata('mensaje') ?>
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
<?php endif; ?>

<div class="card shadow-sm border-0" style="border-top: 4px solid #001a57 !important;">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover table-striped mb-0 text-center">
                <thead style="background-color: #001a57; color: white;">
                    <tr>
                        <th>ID</th>
                        <th>Nombre del Cliente</th>
                        <th>Correo Electrónico</th>
                        <th>Estatus de Cuenta</th>
                        <th>Soporte / Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($clientes)): foreach($clientes as $c): ?>
                    <tr>
                        <td class="align-middle"><?= $c['id_usuario'] ?></td>
                        <td class="align-middle font-weight-bold text-left px-4">
                            <?php if(!empty($c['imagen_usuario'])): ?>
                                <img src="<?= base_url('img/perfiles/'.$c['imagen_usuario']) ?>" class="rounded-circle mr-2" style="width:30px; height:30px; object-fit:cover;">
                            <?php else: ?>
                                <i class="fa fa-user-circle text-muted mr-2" style="font-size:25px; vertical-align:middle;"></i>
                            <?php endif; ?>
                            <?= esc($c['nombre_usuario'].' '.$c['ap_usuario'].' '.$c['am_usuario']) ?>
                        </td>
                        <td class="align-middle text-primary"><?= esc($c['email_usuario']) ?></td>
                        
                        <td class="align-middle">
                            <?php if($c['estatus_usuario'] == 1): ?>
                                <span class="badge badge-success px-2 py-1"><i class="fa fa-check-circle"></i> Activa</span>
                            <?php else: ?>
                                <span class="badge badge-danger px-2 py-1"><i class="fa fa-times-circle"></i> Suspendida</span>
                            <?php endif; ?>
                        </td>
                        
                        <td class="align-middle">
                            <button class="btn btn-sm btn-outline-info btn-edit" 
                                data-id="<?= $c['id_usuario'] ?>" 
                                data-nom="<?= esc($c['nombre_usuario']) ?>" 
                                data-ap="<?= esc($c['ap_usuario']) ?>"
                                data-am="<?= esc($c['am_usuario']) ?>"
                                data-email="<?= esc($c['email_usuario']) ?>"
                                data-toggle="modal" data-target="#modalEditar" title="Editar / Soporte">
                                <i class="fa fa-edit"></i>
                            </button>
                            
                            <?php if($c['estatus_usuario'] == 1): ?>
                                <a href="<?= base_url('admin/clientes/cambiar_estatus/'.$c['id_usuario'].'/-1') ?>" class="btn btn-sm btn-outline-warning" title="Suspender Cuenta" onclick="return confirm('¿Suspender el acceso a este cliente?');">
                                    <i class="fa fa-ban"></i>
                                </a>
                            <?php else: ?>
                                <a href="<?= base_url('admin/clientes/cambiar_estatus/'.$c['id_usuario'].'/1') ?>" class="btn btn-sm btn-outline-success" title="Reactivar Cuenta">
                                    <i class="fa fa-check"></i>
                                </a>
                            <?php endif; ?>
                            
                            <a href="<?= base_url('admin/clientes/eliminar/'.$c['id_usuario']) ?>" class="btn btn-sm btn-outline-danger ml-1" title="Eliminar Cliente" onclick="return confirm('¿Estás seguro de eliminar permanentemente a este cliente?');">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; else: ?>
                        <tr><td colspan="5" class="text-center py-5 text-muted">Aún no hay clientes registrados en la plataforma.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditar" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('admin/clientes/actualizar') ?>" method="POST">
                <div class="modal-header" style="background:#001a57; color:white;">
                    <h5 class="modal-title"><i class="fa fa-wrench"></i> Soporte de Cuenta</h5>
                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id_usuario" id="edit_id">
                    
                    <div class="form-group"><label class="font-weight-bold">Nombre</label><input type="text" name="nombre_usuario" id="edit_nom" class="form-control" required></div>
                    
                    <div class="row">
                        <div class="col-md-6 form-group"><label class="font-weight-bold">Ap. Paterno</label><input type="text" name="ap_usuario" id="edit_ap" class="form-control" required></div>
                        <div class="col-md-6 form-group"><label class="font-weight-bold">Ap. Materno</label><input type="text" name="am_usuario" id="edit_am" class="form-control"></div>
                    </div>
                    
                    <div class="form-group"><label class="font-weight-bold">Correo (Usuario)</label><input type="email" name="email_usuario" id="edit_email" class="form-control" required></div>
                    
                    <div class="alert alert-warning mt-3 border-warning">
                        <i class="fa fa-lock"></i> <strong>Resetear Contraseña</strong><br>
                        <small>Escribe una nueva contraseña solo si el cliente la olvidó y la solicitó. Si no, déjalo en blanco.</small>
                        <input type="password" name="password_usuario" class="form-control mt-2" placeholder="Nueva contraseña...">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info font-weight-bold">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.btn-edit').forEach(btn => {
            btn.addEventListener('click', function() {
                document.getElementById('edit_id').value = this.dataset.id;
                document.getElementById('edit_nom').value = this.dataset.nom;
                document.getElementById('edit_ap').value = this.dataset.ap;
                document.getElementById('edit_am').value = this.dataset.am;
                document.getElementById('edit_email').value = this.dataset.email;
            });
        });
    });
</script>

<?= $this->endSection() ?>