<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<section class="spad" style="background-color: #070e20; min-height: 70vh; display: flex; align-items: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="background-color: #001a57; border: 2px solid #FFCC00; border-radius: 10px;">
                    <div class="card-body p-5">
                        <h3 class="text-center mb-4" style="color: #FFCC00; font-weight: bold;">Finalizar Compra</h3>
                        
                        <div class="alert alert-info" style="background-color: rgba(255,255,255,0.1); border: none; color: white;">
                            <strong>Plan Seleccionado:</strong> <?= esc($plan['nombre_plan']) ?><br>
                            <strong>Total a pagar:</strong> $<?= esc($plan['precio_plan']) ?> MXN
                        </div>

                        <form action="<?= base_url('checkout/procesar') ?>" method="POST">
                            <input type="hidden" name="id_plan" value="<?= $plan['id_plan'] ?>">
                            
                            <div class="form-group">
                                <label style="color: white;">Nombre en la tarjeta</label>
                                <input type="text" class="form-control" required placeholder="Ej: Fanni Gutierrez">
                            </div>
                            
                            <div class="form-group">
                                <label style="color: white;">Número de Tarjeta (16 dígitos)</label>
                                <input type="text" name="tarjeta_pago" class="form-control" required pattern="\d{16}" maxlength="16" placeholder="1234567890123456">
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label style="color: white;">Vencimiento (MM/AA)</label>
                                    <input type="text" class="form-control" required placeholder="12/26">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label style="color: white;">CVV</label>
                                    <input type="text" class="form-control" required maxlength="3" placeholder="123">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block mt-4" style="background-color: #FFCC00; color: #001a57; font-weight: bold; padding: 12px;">
                                <i class="fa fa-lock"></i> Pagar Seguro y Activar
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>