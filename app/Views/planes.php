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

    <section class="pricing-section">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing-header">
                        <h2>Membresías Blockbuster</h2>
                        <p>Desbloquea el acceso ilimitado al mejor catálogo de entretenimiento. Cancela cuando quieras.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="pricing-card">
                        <h3 class="plan-name">Socio Plata</h3>
                        <div class="plan-price">$99<span>/mes</span></div>
                        <ul class="plan-features">
                            <li><i class="fa fa-check-circle"></i> Calidad estándar (SD)</li>
                            <li><i class="fa fa-check-circle"></i> 1 pantalla a la vez</li>
                            <li><i class="fa fa-check-circle"></i> Catálogo de clásicos</li>
                            <li class="disabled"><i class="fa fa-times-circle"></i> Estrenos recientes</li>
                            <li class="disabled"><i class="fa fa-times-circle"></i> Descargas offline</li>
                        </ul>
                        <a href="<?= base_url('registro') ?>" class="btn-plan">Elegir Plata</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="pricing-card popular">
                        <div class="popular-badge">Recomendado</div>
                        <h3 class="plan-name">Socio Oro</h3>
                        <div class="plan-price">$149<span>/mes</span></div>
                        <ul class="plan-features">
                            <li><i class="fa fa-check-circle"></i> Calidad Alta Definición (HD)</li>
                            <li><i class="fa fa-check-circle"></i> 2 pantallas a la vez</li>
                            <li><i class="fa fa-check-circle"></i> Catálogo completo</li>
                            <li><i class="fa fa-check-circle"></i> Estrenos recientes</li>
                            <li class="disabled"><i class="fa fa-times-circle"></i> Descargas offline</li>
                        </ul>
                        <a href="<?= base_url('registro') ?>" class="btn-plan">Elegir Oro</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="pricing-card">
                        <h3 class="plan-name">Socio Platino</h3>
                        <div class="plan-price">$199<span>/mes</span></div>
                        <ul class="plan-features">
                            <li><i class="fa fa-check-circle"></i> Calidad Ultra HD (4K)</li>
                            <li><i class="fa fa-check-circle"></i> 4 pantallas a la vez</li>
                            <li><i class="fa fa-check-circle"></i> Catálogo completo</li>
                            <li><i class="fa fa-check-circle"></i> Estrenos recientes</li>
                            <li><i class="fa fa-check-circle"></i> Descargas para ver offline</li>
                        </ul>
                        <a href="<?= base_url('registro') ?>" class="btn-plan">Elegir Platino</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?= $this->endSection() ?>