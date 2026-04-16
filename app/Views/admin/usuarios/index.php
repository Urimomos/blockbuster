<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>

<div class="row mb-4">
    <div class="col-md-6"><h3 style="color: #001a57; font-weight: 700;">Gestión de Usuarios</h3></div>
    <div class="col-md-6 text-right">
        <button class="btn font-weight-bold" style="background-color: #ffcc00; color: #001a57;" data-toggle="modal" data-target="#modalNuevo">
            <i class="fa fa-user-plus"></i> Nuevo Usuario
        </button>
    </div>
</div>

<?php if(session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <?= session()->getFlashdata('mensaje') ?>
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
<?php endif; ?>

<div class="card shadow-sm border-0" style="border-top: 4px solid #001a57 !important;">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead style="background-color: #001a57; color: white;">
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Email</th>
                        <th>Sexo</th>
                        <th>Rol</th>
                        <th>Estatus</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($usuarios)): foreach($usuarios as $u): ?>
                    <tr>
                        <td class="font-weight-bold"><?= esc($u['nombre_usuario'].' '.$u['ap_usuario'].' '.$u['am_usuario']) ?></td>
                        <td><?= esc($u['email_usuario']) ?></td>
                        <td><?= $u['sexo_usuario'] == 1 ? 'Masculino' : 'Femenino' ?></td>
                        <td><span class="badge badge-dark"><?= esc($u['nombre_rol']) ?></span></td>
                        <td>
                            <span class="badge badge-<?= $u['estatus_usuario'] == 1 ? 'success' : 'danger' ?>">
                                <?= $u['estatus_usuario'] == 1 ? 'Habilitado' : 'Deshabilitado' ?>
                            </span>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-info btn-edit" 
                                data-id="<?= $u['id_usuario'] ?>" 
                                data-nom="<?= esc($u['nombre_usuario']) ?>" 
                                data-ap="<?= esc($u['ap_usuario']) ?>"
                                data-am="<?= esc($u['am_usuario']) ?>"
                                data-sexo="<?= $u['sexo_usuario'] ?>"
                                data-email="<?= esc($u['email_usuario']) ?>"
                                data-rol="<?= $u['id_rol'] ?>"
                                data-estatus="<?= $u['estatus_usuario'] ?>"
                                data-toggle="modal" data-target="#modalEditar" title="Editar"><i class="fa fa-edit"></i></button>
                            
                            <a href="<?= base_url('admin/usuarios/eliminar/'.$u['id_usuario']) ?>" class="btn btn-sm btn-danger" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este usuario? Esta acción no se puede deshacer.');">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; else: ?>
                        <tr><td colspan="6" class="text-center">No hay usuarios.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modalNuevo" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="<?= base_url('admin/usuarios/guardar') ?>" method="POST">
                <div class="modal-header" style="background:#001a57; color:white;">
                    <h5 class="modal-title">Registrar Usuario</h5>
                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 form-group"><label>Nombre(s)</label><input type="text" name="nombre_usuario" class="form-control" required></div>
                        <div class="col-md-4 form-group"><label>Ap. Paterno</label><input type="text" name="ap_usuario" class="form-control" required></div>
                        <div class="col-md-4 form-group"><label>Ap. Materno</label><input type="text" name="am_usuario" class="form-control"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group"><label>Email</label><input type="email" name="email_usuario" class="form-control" required></div>
                        <div class="col-md-6 form-group"><label>Contraseña</label><input type="password" name="password_usuario" class="form-control" required></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Sexo</label>
                            <select name="sexo_usuario" class="form-control" required>
                                <option value="1">Masculino</option>
                                <option value="0">Femenino</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Rol del Sistema</label>
                            <select name="id_rol" class="form-control" required>
                                <option value="745">Administrador</option>
                                <option value="125">Operador</option>
                                <option value="58">Cliente</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn font-weight-bold" style="background-color: #ffcc00; color: #001a57;">Guardar Usuario</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditar" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="<?= base_url('admin/usuarios/actualizar') ?>" method="POST">
                <div class="modal-header" style="background:#001a57; color:white;">
                    <h5 class="modal-title">Editar Usuario</h5>
                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id_usuario" id="edit_id">
                    <div class="row">
                        <div class="col-md-4 form-group"><label>Nombre(s)</label><input type="text" name="nombre_usuario" id="edit_nom" class="form-control" required></div>
                        <div class="col-md-4 form-group"><label>Ap. Paterno</label><input type="text" name="ap_usuario" id="edit_ap" class="form-control" required></div>
                        <div class="col-md-4 form-group"><label>Ap. Materno</label><input type="text" name="am_usuario" id="edit_am" class="form-control"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group"><label>Email</label><input type="email" name="email_usuario" id="edit_email" class="form-control" required></div>
                        <div class="col-md-6 form-group"><label>Nueva Contraseña (Opcional)</label><input type="password" name="password_usuario" class="form-control" placeholder="Dejar en blanco para no cambiar"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label>Sexo</label>
                            <select name="sexo_usuario" id="edit_sexo" class="form-control" required>
                                <option value="1">Masculino</option>
                                <option value="0">Femenino</option>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Rol</label>
                            <select name="id_rol" id="edit_rol" class="form-control" required>
                                <option value="745">Administrador</option>
                                <option value="125">Operador</option>
                                <option value="58">Cliente</option>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Estatus</label>
                            <select name="estatus_usuario" id="edit_estatus" class="form-control" required>
                                <option value="1">Habilitado</option>
                                <option value="-1">Deshabilitado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info font-weight-bold">Actualizar Cambios</button>
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
                document.getElementById('edit_sexo').value = this.dataset.sexo;
                document.getElementById('edit_email').value = this.dataset.email;
                document.getElementById('edit_rol').value = this.dataset.rol;
                document.getElementById('edit_estatus').value = this.dataset.estatus;
            });
        });
    });
</script>

<script src="<?= base_url('js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

<?= $this->endSection() ?>