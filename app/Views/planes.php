<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

    <style>
        /* ================================================== */
        /* --- ESTILOS PARA LAS TARJETAS DE PLANES        --- */
        /* ================================================== */
        .pricing-section {
            background-color: #070e20;
            padding: 80px 0;
            color: white;
            font-family: 'Mulish', sans-serif;
        }

        .pricing-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .pricing-header h2 {
            font-family: 'Oswald', sans-serif;
            color: #FFCC00;
            font-size: 3rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .pricing-card {
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 204, 0, 0.2);
            border-radius: 15px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.4s ease;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .pricing-card:hover {
            transform: translateY(-15px);
            border-color: #FFCC00;
            background: rgba(0, 26, 94, 0.6);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        }

        /* Tarjeta Destacada (La del medio) */
        .pricing-card.popular {
            border-color: #FFCC00;
            background: rgba(0, 26, 94, 0.8);
            transform: scale(1.05);
            box-shadow: 0 15px 35px rgba(255, 204, 0, 0.15);
        }

        .pricing-card.popular:hover {
            transform: scale(1.05) translateY(-10px);
            box-shadow: 0 25px 45px rgba(255, 204, 0, 0.25);
        }

        .popular-badge {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #FFCC00;
            color: #001A5E;
            padding: 5px 20px;
            border-radius: 20px;
            font-weight: 900;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .plan-name {
            font-family: 'Oswald', sans-serif;
            font-size: 1.8rem;
            color: #ffffff;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .plan-price {
            font-size: 3.5rem;
            font-weight: 900;
            color: #FFCC00;
            margin-bottom: 20px;
            line-height: 1;
        }

        .plan-price span {
            font-size: 1rem;
            color: #b3b3b3;
            font-weight: 400;
        }

        .plan-features {
            list-style: none;
            padding: 0;
            margin: 0 0 40px 0;
            text-align: left;
            flex-grow: 1;
        }

        .plan-features li {
            margin-bottom: 15px;
            font-size: 1.05rem;
            color: #e0e0e0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .plan-features li i {
            color: #FFCC00;
            font-size: 1.2rem;
        }

        .plan-features li.disabled {
            color: #666666;
        }
        .plan-features li.disabled i {
            color: #666666;
        }

        .btn-plan {
            background: transparent;
            color: #FFCC00;
            border: 2px solid #FFCC00;
            padding: 12px 0;
            width: 100%;
            border-radius: 5px;
            font-weight: 800;
            font-size: 1.1rem;
            text-transform: uppercase;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-plan:hover, .pricing-card.popular .btn-plan {
            background: #FFCC00;
            color: #001A5E !important;
            text-decoration: none;
        }

        .pricing-card.popular .btn-plan:hover {
            background: #ffffff;
            border-color: #ffffff;
        }
    </style>

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