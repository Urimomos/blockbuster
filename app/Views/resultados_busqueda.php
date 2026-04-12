<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

    <section class="normal-breadcrumb set-bg" style="background-color: #000c2b; padding: 60px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Resultados de Búsqueda</h2>
                        <p>Buscaste: <strong style="color: #FFCC00;">"<?= esc($termino_busqueda) ?>"</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="spad" style="min-height: 40vh; background-color: #0b0c2a;">
        <div class="container text-center">
            <h4 style="color: white;">Aquí aparecerán las películas o series que coincidan con tu búsqueda.</h4>
            <p style="color: #b3b3b3; margin-top: 20px;">(Próximamente conectaremos esto a tu base de datos)</p>
        </div>
    </section>

<?= $this->endSection() ?>