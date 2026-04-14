<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
    <div class="breadcrumb-option" style="background-color: #000c2b; border-bottom: 1px solid #FFCC00;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?= base_url() ?>"><i class="fa fa-home"></i> Inicio</a>
                        <span style="color: #FFCC00;">Planes de Membresía</span> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pricing-section spad">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <div class="pricing-header">
                        <h2 style="color: white;">Membresías Blockbuster</h2>
                        <p style="color: #b7b7b7;">Desbloquea el acceso ilimitado al mejor catálogo de entretenimiento. Cancela cuando quieras.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                
                <?php if(!empty($planes)): foreach($planes as $index => $plan): 
                    // Traducimos el número de tipo_plan a texto
                    $periodo = '';
                    if($plan['tipo_plan'] == 8) $periodo = '/semana';
                    elseif($plan['tipo_plan'] == 16) $periodo = '/mes';
                    elseif($plan['tipo_plan'] == 32) $periodo = '/año';

                    // Hacemos que la segunda tarjeta resalte como "Recomendado"
                    $is_popular = ($index == 1) ? 'popular' : '';
                    $btn_color = ($index == 1) ? 'background-color: #FFCC00; color: #000;' : 'background-color: #fff; color: #000;';
                ?>
                
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="pricing-card <?= $is_popular ?>" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 15px; padding: 40px 30px; text-align: center; position: relative;">
                        
                        <?php if($is_popular): ?>
                            <div class="popular-badge" style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: #FFCC00; color: #000; padding: 5px 15px; border-radius: 20px; font-weight: bold; font-size: 14px;">Recomendado</div>
                        <?php endif; ?>
                        
                        <h3 class="plan-name" style="color: #FFCC00; font-weight: 700; margin-bottom: 20px;"><?= esc($plan['nombre_plan']) ?></h3>
                        <div class="plan-price" style="font-size: 40px; font-weight: bold; color: white; margin-bottom: 30px;">
                            $<?= esc($plan['precio_plan']) ?><span style="font-size: 16px; font-weight: normal; color: #b7b7b7;"><?= $periodo ?></span>
                        </div>
                        
                        <ul class="plan-features list-unstyled" style="color: #e0e0e0; text-align: left; margin-bottom: 40px;">
                            <li class="mb-3"><i class="fa fa-check-circle" style="color: #FFCC00; margin-right: 10px;"></i> Límite de <?= esc($plan['cantidad_limite_plan']) ?> pantallas</li>
                            <li class="mb-3"><i class="fa fa-check-circle" style="color: #FFCC00; margin-right: 10px;"></i> Catálogo completo</li>
                            <li class="mb-3"><i class="fa fa-check-circle" style="color: #FFCC00; margin-right: 10px;"></i> Estrenos recientes</li>
                        </ul>
                        
                       <?php 
                         // Lógica para el botón: Si hay sesión iniciada, va al pago. Si no, al registro.
                        $enlace_boton = session()->get('is_logged_in') ? base_url('checkout/' . $plan['id_plan']) : base_url('registro');?>
                        <a href="<?= $enlace_boton ?>" class="btn-plan d-block" style="<?= $btn_color ?> padding: 12px; border-radius: 5px; font-weight: bold; text-decoration: none; transition: 0.3s;">
                        Elegir <?= esc($plan['nombre_plan']) ?>
                        </a>
                </div>
                </div>

                <?php endforeach; else: ?>
                    <div class="col-12 text-center text-white">
                        <p>No hay planes disponibles en este momento.</p>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

<?= $this->endSection() ?>