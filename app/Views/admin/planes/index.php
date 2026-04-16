<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>

<div class="row mb-4">
    <div class="col-md-8">
        <h3 style="color: #001a57; font-weight: bold;">
            <i class="fa fa-credit-card mr-2"></i> Gestión de Planes
        </h3>
    </div>
    <div class="col-md-4 text-right">
        <a href="<?= base_url('admin/planes/crear') ?>" class="btn shadow-sm" style="background-color: #ffcc00; color: #001a57; font-weight: bold;">
            <i class="fa fa-plus"></i> Nuevo Plan
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
            <table class="table table-hover table-striped mb-0 text-center">
                <thead style="background-color: #001a57; color: white;">
                    <tr>
                        <th>ID</th>
                        <th>Nombre del Plan</th>
                        <th>Precio</th>
                        <th>Pantallas</th>
                        <th>Ciclo</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($planes)): foreach($planes as $plan): ?>
                        <tr>
                            <td class="align-middle"><?= $plan['id_plan'] ?></td>
                            <td class="align-middle font-weight-bold" style="color: #001a57;"><?= esc($plan['nombre_plan']) ?></td>
                            <td class="align-middle text-success font-weight-bold">$<?= number_format($plan['precio_plan'], 2) ?></td>
                            <td class="align-middle"><?= $plan['cantidad_limite_plan'] ?></td>
                            
                            <td class="align-middle">
                                <?php 
                                    if($plan['tipo_plan'] == 8) echo "Semanal";
                                    elseif($plan['tipo_plan'] == 16) echo "Mensual";
                                    elseif($plan['tipo_plan'] == 32) echo "Anual";
                                    else echo "Otro";
                                ?>
                            </td>
                            
                            <td class="align-middle">
                                <?php if($plan['estatus_plan'] == 1): ?>
                                    <span class="badge badge-success px-2 py-1">Habilitado</span>
                                <?php else: ?>
                                    <span class="badge badge-danger px-2 py-1">Deshabilitado</span>
                                <?php endif; ?>
                            </td>
                            
                            <td class="align-middle">
                                <a href="<?= base_url('admin/planes/editar/'.$plan['id_plan']) ?>" class="btn btn-sm btn-outline-primary" title="Editar">
                                    <i class="fa fa-edit"></i>
                                </a>
                                
                                <?php if($plan['estatus_plan'] == 1): ?>
                                    <a href="<?= base_url('admin/planes/cambiar_estatus/'.$plan['id_plan'].'/-1') ?>" class="btn btn-sm btn-outline-warning" title="Deshabilitar">
                                        <i class="fa fa-ban"></i>
                                    </a>
                                <?php else: ?>
                                    <a href="<?= base_url('admin/planes/cambiar_estatus/'.$plan['id_plan'].'/1') ?>" class="btn btn-sm btn-outline-success" title="Habilitar">
                                        <i class="fa fa-check"></i>
                                    </a>
                                <?php endif; ?>

                                <a href="<?= base_url('admin/planes/eliminar/'.$plan['id_plan']) ?>" class="btn btn-sm btn-danger" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este plan? Esta acción no se puede deshacer.');">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; else: ?>
                        <tr>
                            <td colspan="7" class="text-center py-5 text-muted">
                                <i class="fa fa-folder-open-o fa-3x mb-3 d-block"></i>
                                No hay planes registrados en el sistema.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>