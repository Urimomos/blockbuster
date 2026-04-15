<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>

<div class="row mb-4">
    <div class="col-md-8">
        <h3 style="color: #001a57; font-weight: bold;"><i class="fa fa-play-circle mr-2"></i> Gestión de Videos</h3>
    </div>
    <div class="col-md-4 text-right">
        <a href="<?= base_url('admin/videos/crear') ?>" class="btn shadow-sm" style="background-color: #ffcc00; color: #001a57; font-weight: bold;">
            <i class="fa fa-plus"></i> Subir Video
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
                        <th>Pertenece a</th>
                        <th>Archivo Video</th>
                        <th>Detalles (Si es Serie)</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($videos)): foreach($videos as $vid): ?>
                        <tr>
                            <td class="align-middle"><?= $vid['id_video'] ?></td>
                            
                            <td class="align-middle font-weight-bold" style="color: #001a57;">
                                <?= esc($vid['nombre_streaming']) ?>
                                <?php if($vid['temporadas_streaming']): ?>
                                    <br><small class="text-muted">(Serie)</small>
                                <?php else: ?>
                                    <br><small class="text-muted">(Película)</small>
                                <?php endif; ?>
                            </td>
                            
                            <td class="align-middle text-primary"><?= esc($vid['video']) ?></td>
                            
                            <td class="align-middle">
                                <?php if($vid['capitulo_temporada']): ?>
                                    <span class="badge badge-dark">T<?= $vid['video_temporada'] ?> - Ep. <?= $vid['capitulo_temporada'] ?></span>
                                    <br><small><?= esc($vid['nombre_temporada']) ?></small>
                                <?php else: ?>
                                    <span class="text-muted">- Único -</span>
                                <?php endif; ?>
                            </td>
                            
                            <td class="align-middle">
                                <?php if($vid['estatus_video'] == 1): ?>
                                    <span class="badge badge-success">Disponible</span>
                                <?php else: ?>
                                    <span class="badge badge-danger">Oculto</span>
                                <?php endif; ?>
                            </td>
                            
                            <td class="align-middle">
                                <a href="<?= base_url('admin/videos/editar/'.$vid['id_video']) ?>" class="btn btn-sm btn-outline-primary" title="Editar"><i class="fa fa-edit"></i></a>
                                
                                <?php if($vid['estatus_video'] == 1): ?>
                                    <a href="<?= base_url('admin/videos/cambiar_estatus/'.$vid['id_video'].'/-1') ?>" class="btn btn-sm btn-outline-warning" title="Ocultar"><i class="fa fa-ban"></i></a>
                                <?php else: ?>
                                    <a href="<?= base_url('admin/videos/cambiar_estatus/'.$vid['id_video'].'/1') ?>" class="btn btn-sm btn-outline-success" title="Mostrar"><i class="fa fa-check"></i></a>
                                <?php endif; ?>
                                
                                <a href="<?= base_url('admin/videos/eliminar/'.$vid['id_video']) ?>" class="btn btn-sm btn-outline-danger" title="Eliminar" onclick="return confirm('¿Eliminar este archivo de video?');">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; else: ?>
                        <tr><td colspan="6" class="text-center py-5 text-muted">No hay videos subidos.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>