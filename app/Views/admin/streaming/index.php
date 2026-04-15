<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>

<div class="row mb-4">
    <div class="col-md-8">
        <h3 style="color: #001a57; font-weight: bold;"><i class="fa fa-film mr-2"></i> Catálogo Streaming</h3>
    </div>
    <div class="col-md-4 text-right">
        <a href="<?= base_url('admin/streaming/crear') ?>" class="btn shadow-sm" style="background-color: #ffcc00; color: #001a57; font-weight: bold;">
            <i class="fa fa-plus"></i> Agregar Título
        </a>
    </div>
</div>

<?php if(session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <?= session()->getFlashdata('mensaje') ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
<?php endif; ?>

<div class="card shadow-sm border-0" style="border-top: 4px solid #001a57 !important;">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover table-striped mb-0 text-center align-middle">
                <thead style="background-color: #001a57; color: white;">
                    <tr>
                        <th>ID</th>
                        <th>Carátula</th>
                        <th>Título</th>
                        <th>Género</th>
                        <th>Clasif.</th>
                        <th>Formato</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($streamings)): foreach($streamings as $item): ?>
                        <tr>
                            <td class="align-middle"><?= $item['id_streaming'] ?></td>
                            <td class="align-middle">
                                <img src="<?= base_url('img/' . $item['caratula_streaming']) ?>" alt="Portada" style="width: 50px; height: 75px; object-fit: cover; border-radius: 4px; border: 1px solid #ddd;">
                            </td>
                            <td class="align-middle font-weight-bold" style="color: #001a57;"><?= esc($item['nombre_streaming']) ?></td>
                            <td class="align-middle"><?= esc($item['nombre_genero']) ?></td>
                            <td class="align-middle"><span class="badge badge-warning text-dark"><?= $item['clasificacion_streaming'] ?></span></td>
                            <td class="align-middle">
                                <?php if($item['duracion_streaming']): ?>
                                    <i class="fa fa-film text-muted" title="Película"></i> <?= $item['duracion_streaming'] ?>
                                <?php else: ?>
                                    <i class="fa fa-tv text-muted" title="Serie"></i> <?= $item['temporadas_streaming'] ?> Temp.
                                <?php endif; ?>
                            </td>
                            <td class="align-middle">
                                <?php if($item['estatus_streaming'] == 1): ?>
                                    <span class="badge badge-success">Habilitado</span>
                                <?php else: ?>
                                    <span class="badge badge-danger">Deshabilitado</span>
                                <?php endif; ?>
                            </td>
                            <td class="align-middle">
                                <a href="<?= base_url('admin/streaming/editar/'.$item['id_streaming']) ?>" class="btn btn-sm btn-outline-primary" title="Editar">
                                    <i class="fa fa-edit"></i>
                                </a>
                                
                                <?php if($item['estatus_streaming'] == 1): ?>
                                    <a href="<?= base_url('admin/streaming/cambiar_estatus/'.$item['id_streaming'].'/-1') ?>" class="btn btn-sm btn-outline-warning" title="Deshabilitar"><i class="fa fa-ban"></i></a>
                                <?php else: ?>
                                    <a href="<?= base_url('admin/streaming/cambiar_estatus/'.$item['id_streaming'].'/1') ?>" class="btn btn-sm btn-outline-success" title="Habilitar"><i class="fa fa-check"></i></a>
                                <?php endif; ?>
                                
                                <a href="<?= base_url('admin/streaming/eliminar/'.$item['id_streaming']) ?>" class="btn btn-sm btn-outline-danger" title="Eliminar" onclick="return confirm('¿Estás totalmente seguro de eliminar este título? Esta acción no se puede deshacer.');">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; else: ?>
                        <tr><td colspan="8" class="text-center py-5 text-muted">No hay títulos registrados.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>