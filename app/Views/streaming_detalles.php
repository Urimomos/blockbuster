<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?= base_url() ?>"><i class="fa fa-home"></i> Inicio</a>
                        <a href="<?= base_url('categorias/peliculas') ?>">Categorías</a>
                        <span>Detalles</span>
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
                        <div class="anime__details__pic set-bg" data-setbg="<?= base_url('img/anime/details-pic.jpg') ?>">
                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>Fate Stay Night: Unlimited Blade</h3>
                                <span>Título Alternativo o Tagline</span>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votos</span>
                            </div>
                            <p>Every human inhabiting the world of Alcia is branded by a “Count” or a number written on
                                their body. For Hina’s mother, her total drops to 0 and she’s pulled into the Abyss,
                                never to be seen again. But her mother’s last words send Hina on a quest to find a
                            legendary hero from the Waste War - the fabled Ace!</p>
                            
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Tipo:</span> Película/Serie</li>
                                            <li><span>Género:</span> Acción, Aventura</li>
                                            <li><span>Estreno:</span> Oct 02, 2019</li>
                                            <li><span>Clasificación:</span> B15</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Duración:</span> 24 min/ep (o tiempo total)</li>
                                            <li><span>Calidad:</span> HD</li>
                                            <li><span>Vistas:</span> 131,541</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Favorito</a>
                                <a href="#" class="watch-btn"><span>Alquilar Ahora</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>Reseñas</h5>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="<?= base_url('img/anime/review-1.jpg') ?>" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Chris Curry - <span>Hace 1 Hora</span></h6>
                                <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                "demons" LOL</p>
                            </div>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="<?= base_url('img/anime/review-2.jpg') ?>" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Lewis Mann - <span>Hace 5 Horas</span></h6>
                                <p>Finally it came out ages ago</p>
                            </div>
                        </div>
                        </div>
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>Deja tu Comentario</h5>
                        </div>
                        <form action="#">
                            <textarea placeholder="Tu comentario..."></textarea>
                            <button type="submit"><i class="fa fa-location-arrow"></i> Enviar</button>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4">
                    <div class="anime__details__sidebar">
                        <div class="section-title">
                            <h5>Te podría gustar...</h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/sidebar/tv-1.jpg') ?>">
                            <div class="ep">18 / ?</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">Boruto: Naruto next generations</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/sidebar/tv-2.jpg') ?>">
                            <div class="ep">18 / ?</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/sidebar/tv-3.jpg') ?>">
                            <div class="ep">18 / ?</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?= $this->endSection() ?>  