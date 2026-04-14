<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>

<div class="row mb-4">
    <div class="col-md-6"><h3 style="color: #001a57;">Tipos de Géneros</h3></div>
    <div class="col-md-6 text-right">
        <button class="btn btn-warning font-weight-bold" data-toggle="modal" data-target="#modalNuevo">
            <i class="fa fa-plus"></i> Nuevo Género
        </button>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover">
            <thead style="background-color: #001a57; color: white;">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($generos as $g): ?>
                <tr>
                    <td><?= esc($g['nombre_genero']) ?></td>
                    <td><?= esc($g['descripcion_genero']) ?></td>
                    <td>
                        <span class="badge badge-<?= $g['estatus_genero'] == 1 ? 'success' : 'danger' ?>">
                            <?= $g['estatus_genero'] == 1 ? 'Activo' : 'Inactivo' ?>
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-info btn-edit" 
                            data-id="<?= $g['id_genero'] ?>" 
                            data-nombre="<?= $g['nombre_genero'] ?>" 
                            data-desc="<?= $g['descripcion_genero'] ?>"
                            data-estatus="<?= $g['estatus_genero'] ?>"
                            data-toggle="modal" data-target="#modalEditar"><i class="fa fa-edit"></i></button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?= base_url('admin/generos/guardar') ?>" method="POST">
                <div class="modal-header" style="background:#001a57; color:white;"><h5>Nuevo Género</h5></div>
                <div class="modal-body">
                    <div class="form-group"><label>Nombre</label><input type="text" name="nombre_genero" class="form-control" required></div>
                    <div class="form-group"><label>Descripción</label><textarea name="descripcion_genero" class="form-control"></textarea></div>
                </div>
                <div class="modal-footer"><button type="submit" class="btn btn-warning">Guardar</button></div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?= base_url('admin/generos/actualizar') ?>" method="POST">
                <div class="modal-header" style="background:#001a57; color:white;"><h5>Editar Género</h5></div>
                <div class="modal-body">
                    <input type="hidden" name="id_genero" id="edit_id">
                    <div class="form-group"><label>Nombre</label><input type="text" name="nombre_genero" id="edit_nombre" class="form-control" required></div>
                    <div class="form-group"><label>Descripción</label><textarea name="descripcion_genero" id="edit_desc" class="form-control"></textarea></div>
                    <div class="form-group">
                        <label>Estatus</label>
                        <select name="estatus_genero" id="edit_estatus" class="form-control">
                            <option value="1">Activo</option>
                            <option value="-1">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer"><button type="submit" class="btn btn-info">Actualizar</button></div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.btn-edit').forEach(btn => {
            btn.addEventListener('click', function() {
                document.getElementById('edit_id').value = this.dataset.id;
                document.getElementById('edit_nombre').value = this.dataset.nombre;
                document.getElementById('edit_desc').value = this.dataset.desc;
                document.getElementById('edit_estatus').value = this.dataset.estatus;
            });
        });
    });
</script>

<?= $this->endSection() ?>