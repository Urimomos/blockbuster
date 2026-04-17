<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?= base_url() ?>"><i class="fa fa-home"></i> Inicio</a>
                        <a href="<?= base_url('categorias/peliculas') ?>">Catálogo</a>
                        <span><?= esc($item['nombre_streaming']) ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="<?= base_url('img/' . $item['caratula_streaming']) ?>">
                            <div class="comment"><i class="fa fa-star text-warning"></i> <?= esc($item['clasificacion_streaming']) ?></div>
                            <div class="view"><i class="fa fa-eye"></i> 9,141</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3><?= esc($item['nombre_streaming']) ?></h3>
                                <span><?= esc($item['nombre_genero']) ?></span>
                            </div>
                            
                            <p><?= esc($item['sipnosis_streaming']) ?></p>
                            
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Género:</span> <?= esc($item['nombre_genero']) ?></li>
                                            <li><span>Estreno:</span> <?= date('d/m/Y', strtotime($item['fecha_lanzamiento_streaming'])) ?></li>
                                            <li><span>Clasificación:</span> <?= esc($item['clasificacion_streaming']) ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <?php if($item['duracion_streaming']): ?>
                                                <li><span>Duración:</span> <?= esc($item['duracion_streaming']) ?> min</li>
                                                <li><span>Tipo:</span> Película</li>
                                            <?php else: ?>
                                                <li><span>Temporadas:</span> <?= esc($item['temporadas_streaming']) ?></li>
                                                <li><span>Tipo:</span> Serie</li>
                                            <?php endif; ?>
                                            <li><span>Calidad:</span> HD / 4K</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <?php 
                                // Verificamos si el usuario ya tiene este título alquilado y activo
                                $ya_la_tengo = isset($mis_alquileres) && in_array($item['id_streaming'], $mis_alquileres); 
                                ?>

                                <?php if($ya_la_tengo): ?>
                                    <a href="<?= base_url('ver-pelicula/' . $item['id_streaming']) ?>" 
                                       class="btn font-weight-bold" 
                                       style="background-color: #00FF00; color: #000; padding: 14px 30px; box-shadow: 0 0 10px rgba(0,255,0,0.5); text-transform: uppercase; letter-spacing: 2px;">
                                        <i class="fa fa-play-circle mr-2"></i> Ver Película Ahora
                                    </a>
                                <?php else: ?>
                                    <a href="<?= base_url('alquilar/' . $item['id_streaming']) ?>" 
                                       class="btn" 
                                       style="background:#FFCC00; color:#001A5E; font-weight:bold; padding: 14px 30px; text-transform: uppercase; letter-spacing: 2px;"
                                       onclick="return confirm('¿Deseas gastar 1 ticket para alquilar este título por 48 horas?');">
                                       <i class="fa fa-ticket mr-2"></i> Alquilar Ahora
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Títulos Similares que te podrían gustar</h5>
                    </div>
                    <div class="row">
                        <?php if(!empty($recomendados)): foreach($recomendados as $rec): ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/' . $rec['caratula_streaming']) ?>" onclick="window.location.href='<?= base_url('detalles/' . $rec['id_streaming']) ?>'" style="cursor: pointer;">
                                        <div class="ep"><?= esc($rec['clasificacion_streaming']) ?></div>
                                    </div>
                                    <div class="product__item__text text-center">
                                        <h5 style="color: white; margin-top: 10px;">
                                            <a href="<?= base_url('detalles/' . $rec['id_streaming']) ?>"><?= esc($rec['nombre_streaming']) ?></a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; else: ?>
                            <div class="col-12"><p class="text-white">No hay recomendaciones por el momento.</p></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>