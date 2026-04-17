<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>

<div class="row mb-4 align-items-center">
    <div class="col-md-8">
        <h3 style="color: #001a57; font-weight: bold;">
            <i class="fa fa-film mr-2"></i> Catálogo de Streaming
        </h3>
        <p class="text-muted small mb-0">Gestiona tus películas, series y enlaces de YouTube.</p>
    </div>
    <div class="col-md-4 text-right">
        <a href="<?= base_url('admin/streaming/crear') ?>" class="btn shadow-sm" style="background-color: #ffcc00; color: #001a57; font-weight: bold;">
            <i class="fa fa-plus-circle"></i> Agregar Título
        </a>
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

<div class="card shadow-sm border-0" style="border-top: 4px solid #001a57 !important;">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 text-center align-middle">
                <thead style="background-color: #001a57; color: white;">
                    <tr>
                        <th style="width: 50px;">ID</th>
                        <th>Carátula</th>
                        <th>Título y Video</th>
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
                            <td class="align-middle text-muted small">#<?= $item['id_streaming'] ?></td>
                            
                            <td class="align-middle">
                                <img src="<?= base_url('img/' . $item['caratula_streaming']) ?>" 
                                     alt="Portada" 
                                     style="width: 55px; height: 80px; object-fit: cover; border-radius: 6px; border: 1px solid #eaeaea; shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            </td>

                            <td class="align-middle text-left">
                                <div class="font-weight-bold" style="color: #001a57; font-size: 16px;">
                                    <?= esc($item['nombre_streaming']) ?>
                                </div>
                                <?php if(!empty($item['trailer_streaming'])): ?>
                                    <a href="<?= $item['trailer_streaming'] ?>" target="_blank" class="badge badge-danger mt-1" style="font-weight: 400;">
                                        <i class="fa fa-youtube-play"></i> YouTube Embed
                                    </a>
                                <?php else: ?>
                                    <span class="badge badge-light text-muted mt-1" style="font-weight: 400;">Sin video</span>
                                <?php endif; ?>
                            </td>

                            <td class="align-middle text-muted">
                                <?= esc($item['nombre_genero']) ?>
                            </td>

                            <td class="align-middle">
                                <span class="badge badge-warning text-dark px-2 py-1" style="font-size: 11px;">
                                    <?= $item['clasificacion_streaming'] ?>
                                </span>
                            </td>

                            <td class="align-middle">
                                <?php if(!empty($item['temporadas_streaming']) && $item['temporadas_streaming'] > 0): ?>
                                    <div class="text-primary font-weight-bold">
                                        <i class="fa fa-tv mr-1"></i> <?= $item['temporadas_streaming'] ?> Temp.
                                    </div>
                                <?php else: ?>
                                    <div class="text-muted">
                                        <i class="fa fa-film mr-1"></i> <?= $item['duracion_streaming'] ?: '--:--' ?>
                                    </div>
                                <?php endif; ?>
                            </td>

                            <td class="align-middle">
                                <?php if($item['estatus_streaming'] == 1): ?>
                                    <span class="badge badge-success px-3" style="border-radius: 20px;">Habilitado</span>
                                <?php else: ?>
                                    <span class="badge badge-danger px-3" style="border-radius: 20px;">Inactivo</span>
                                <?php endif; ?>
                            </td>

                            <td class="align-middle">
                                <div class="btn-group" role="group">
                                    <a href="<?= base_url('admin/streaming/editar/'.$item['id_streaming']) ?>" 
                                       class="btn btn-sm btn-outline-primary mx-1" title="Editar">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    
                                    <?php if($item['estatus_streaming'] == 1): ?>
                                        <a href="<?= base_url('admin/streaming/cambiar_estatus/'.$item['id_streaming'].'/-1') ?>" 
                                           class="btn btn-sm btn-outline-warning mx-1" title="Deshabilitar">
                                            <i class="fa fa-eye-slash"></i>
                                        </a>
                                    <?php else: ?>
                                        <a href="<?= base_url('admin/streaming/cambiar_estatus/'.$item['id_streaming'].'/1') ?>" 
                                           class="btn btn-sm btn-outline-success mx-1" title="Habilitar">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    <?php endif; ?>
                                    
                                    <a href="<?= base_url('admin/streaming/eliminar/'.$item['id_streaming']) ?>" 
                                       class="btn btn-sm btn-outline-danger mx-1" title="Eliminar" 
                                       onclick="return confirm('¿Estás totalmente seguro de eliminar este título?');">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; else: ?>
                        <tr>
                            <td colspan="8" class="text-center py-5">
                                <i class="fa fa-folder-open-o fa-3x text-muted mb-3"></i>
                                <p class="text-muted">No se encontraron títulos en el catálogo.</p>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>