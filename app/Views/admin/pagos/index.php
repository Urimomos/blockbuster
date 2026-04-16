<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>

<div class="row mb-4">
    <div class="col-md-12">
        <h3 style="color: #001a57; font-weight: bold;">
            <i class="fa fa-university mr-2"></i> Validación de Transacciones
        </h3>
        <p class="text-muted">Revisa los pagos registrados mediante tarjeta para activar las suscripciones.</p>
    </div>
</div>

<?php if(session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <?= session()->getFlashdata('mensaje') ?>
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
<?php endif; ?>

<div class="card shadow-sm border-0" style="border-top: 4px solid #28a745 !important;">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover table-striped mb-0 text-center">
                <thead style="background-color: #001a57; color: white;">
                    <tr>
                        <th>Fecha Registro</th>
                        <th>Cliente</th>
                        <th>Plan</th>
                        <th>Monto</th>
                        <th>Tarjeta / Ref.</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($pagos)): foreach($pagos as $p): ?>
                    <tr>
                        <td class="align-middle small"><?= date('d/m/Y H:i', strtotime($p['fecha_registro_pago'])) ?></td>
                        <td class="align-middle text-left">
                            <strong><?= esc($p['nombre_usuario'].' '.$p['ap_usuario']) ?></strong>
                        </td>
                        <td class="align-middle text-info font-weight-bold"><?= esc($p['nombre_plan']) ?></td>
                        <td class="align-middle font-weight-bold text-success">$<?= number_format($p['monto_pago'], 2) ?></td>
                        <td class="align-middle">
                            <code class="text-dark">**** <?= esc($p['tarjeta_pago']) ?></code>
                        </td>
                        <td class="align-middle">
                            <?php if($p['estatus_pago'] == 1): ?>
                                <span class="badge badge-success px-2 py-1">Aprobado</span>
                            <?php elseif($p['estatus_pago'] == -1): ?>
                                <span class="badge badge-danger px-2 py-1">Rechazado</span>
                            <?php else: ?>
                                <span class="badge badge-warning px-2 py-1 text-dark">Pendiente</span>
                            <?php endif; ?>
                        </td>
                        <td class="align-middle">
                            <?php if($p['estatus_pago'] == 0 || $p['estatus_pago'] == null): ?>
                                <a href="<?= base_url('admin/pagos/cambiar_estatus/'.$p['id_pago'].'/1') ?>" class="btn btn-sm btn-success" title="Aprobar" onclick="return confirm('¿Aprobar este pago?');">
                                    <i class="fa fa-check"></i>
                                </a>
                                <a href="<?= base_url('admin/pagos/cambiar_estatus/'.$p['id_pago'].'/-1') ?>" class="btn btn-sm btn-danger" title="Rechazar" onclick="return confirm('¿Rechazar esta transacción?');">
                                    <i class="fa fa-times"></i>
                                </a>
                            <?php else: ?>
                                <a href="<?= base_url('admin/pagos/cambiar_estatus/'.$p['id_pago'].'/0') ?>" class="btn btn-sm btn-outline-secondary" title="Resetear">
                                    <i class="fa fa-undo"></i>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; else: ?>
                        <tr><td colspan="7" class="text-center py-5 text-muted">No hay pagos registrados.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>