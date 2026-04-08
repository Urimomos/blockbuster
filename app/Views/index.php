<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="<?= base_url('img/hero/hero-1.jpg') ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night</h2>
                                <p>After 30 days of travel...</p>
                                <a href="#"><span>Ver Ahora</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hero__items set-bg" data-setbg="<?= base_url('img/hero/hero-1.jpg') ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night</h2>
                                <p>After 30 days of travel...</p>
                                <a href="#"><span>Ver Ahora</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            
            
        </div>
    </section>
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="section-title">
                            <h4>Streaming Recién Agregados</h4>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <?= $this->endSection() ?>