<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>

<div class="row mb-4">
    <div class="col-md-12">
        <a href="<?= base_url('admin/planes') ?>" class="btn btn-secondary mb-3"><i class="fa fa-arrow-left"></i> Regresar</a>
        <h3 style="color: #001a57;"><i class="fa fa-plus-circle"></i> Crear Nuevo Plan</h3>
    </div>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="<?= base_url('admin/planes/guardar') ?>" method="POST">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Nombre del Plan</label>
                    <input type="text" name="nombre_plan" class="form-control" placeholder="Ej: Básico, Premium..." required>
                </div>
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Precio ($)</label>
                    <input type="number" step="0.01" name="precio_plan" class="form-control" placeholder="Ej: 99.99" required>
                </div>
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Cantidad Límite de Cuentas/Pantallas</label>
                    <input type="number" name="cantidad_limite_plan" class="form-control" placeholder="Ej: 2, 4, 10..." required>
                </div>
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Tipo de Plan (Ciclo)</label>
                    <select name="tipo_plan" class="form-control" required>
                        <option value="">Seleccione una opción...</option>
                        <option value="8">Semanal</option>
                        <option value="16">Mensual</option>
                        <option value="32">Anual</option>
                    </select>
                </div>
            </div>
            <div class="text-right mt-3">
                <button type="submit" class="btn" style="background-color: #ffcc00; color: #000; font-weight: bold;">
                    <i class="fa fa-save"></i> Guardar Plan
                </button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>