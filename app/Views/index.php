<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<style>
    .hero { padding-top: 30px; background-color: #070e20; }
    .section-title { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; }
    .section-title h4 { 
        color: #ffffff; font-weight: 700; text-transform: uppercase; 
        border-left: 5px solid #FFCC00; padding-left: 15px; margin: 0;
    }
    
    /* Botones de Navegación */
    .btn-nav-custom {
        background-color: transparent; color: #FFCC00; border: 2px solid #FFCC00;
        padding: 8px 20px; border-radius: 5px; font-weight: bold; transition: 0.3s; margin-left: 10px;
        display: inline-block;
    }
    .btn-nav-custom:hover { background-color: #FFCC00; color: #001A5E; text-decoration: none; }

    /* Estilo Cristal Banner */
    .glass-box {
        position: relative; z-index: 2; background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.1); border-left: 8px solid #FFCC00;
        border-radius: 12px; padding: 30px; max-width: 480px; margin-left: 40px;
    }
    
    .product__item__pic { border: 2px solid #001A5E; border-radius: 10px; transition: 0.3s; cursor: pointer; height: 350px; position: relative; }
    .product__item__pic:hover { transform: translateY(-8px); border-color: #FFCC00 !important; box-shadow: 0 8px 20px rgba(255, 204, 0, 0.3); }
    .ep { background: #FFCC00; color: #000; font-weight: bold; padding: 2px 10px; border-radius: 3px; font-size: 12px; position: absolute; left: 10px; top: 10px; z-index: 10; }
    
    /* Estilos de Modales */
    .modal-content { background-color: #001A5E; border: 2px solid #FFCC00; color: white; border-radius: 15px; }
    .modal-header { border-bottom: 1px solid rgba(255,204,0,0.3); }
    .modal-body strong { color: #FFCC00; font-weight: bold; }
    .btn-alquilar { background-color: #FFCC00; color: #001A5E !important; font-weight: bold; text-transform: uppercase; border: none; padding: 12px; margin-top: 15px; border-radius: 5px; transition: 0.3s; width: 100%; }
    .btn-alquilar:hover { background-color: #ffffff; color: #001A5E !important; }
</style>

<section class="hero">
    <div class="container">
        <div class="section-title"><h4>Streaming Más Visitados</h4></div>
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="<?= base_url('img/Peliculas/The_matrix.jpg') ?>">
                <div class="glass-box">
                    <span class="ep">TOP 1</span>
                    <h2 style="color:white; font-weight:800;">THE MATRIX</h2>
                    <p style="color:#ddd;">La simulación ha terminado. Descubre la verdad.</p>
                    <a href="#" data-toggle="modal" data-target="#modalMatrix" class="primary-btn" style="background:#FFCC00; color:#000;">VER DETALLES</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product spad" style="background-color: #070e20;">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="section-title">
    <h4>Disponibles Ahora</h4>
    <div>
        <a href="<?= base_url('categorias/peliculas') ?>" class="btn-nav-custom">PELÍCULAS <i class="fa fa-film"></i></a>
        <a href="<?= base_url('categorias/series') ?>" class="btn-nav-custom">SERIES <i class="fa fa-tv"></i></a>
    </div>
</div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="product__item" data-toggle="modal" data-target="#modalJP">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/jurassic.jpg') ?>"><div class="ep">DISPONIBLE</div></div>
                            <div class="product__item__text"><h5 style="text-align:center; color:white;">Jurassic Park</h5></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="product__item" data-toggle="modal" data-target="#modalT2">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/terminator.jpg') ?>"><div class="ep">DISPONIBLE</div></div>
                            <div class="product__item__text"><h5 style="text-align:center; color:white;">Terminator 2</h5></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="product__item" data-toggle="modal" data-target="#modalMIB">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/Hombre_Negro.jpg') ?>"><div class="ep">DISPONIBLE</div></div>
                            <div class="product__item__text"><h5 style="text-align:center; color:white;">Hombres de Negro</h5></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="product__item" data-toggle="modal" data-target="#modalFriends">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/friends.jpg') ?>"><div class="ep">DISPONIBLE</div></div>
                            <div class="product__item__text"><h5 style="text-align:center; color:white;">Friends</h5></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="section-title"><h4>Recién Agregados</h4></div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="product__item" data-toggle="modal" data-target="#modalReyLeon">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/caratula_mufasa.png') ?>"><div class="ep" style="background:#00ff00; color:#000;">NUEVO</div></div>
                            <div class="product__item__text"><h5 style="text-align:center; color:white;">Mufasa: El Rey León</h5></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="product__item" data-toggle="modal" data-target="#modalIcarly">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/icarly.jpg') ?>"><div class="ep" style="background:#00ff00; color:#000;">NUEVO</div></div>
                            <div class="product__item__text"><h5 style="text-align:center; color:white;">iCarly</h5></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade bb-video-modal" id="modalMatrix" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">The Matrix</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/vKQi3bBA1y8" allowfullscreen></iframe></div>
                <p><strong>Descripción:</strong> Un experto en computadoras descubre que su mundo es una simulación total creada por máquinas.</p>
                <p><strong>Género:</strong> Acción / Ciencia Ficción | <strong>Duración:</strong> 136 min | <strong>Clasificación:</strong> B15</p>
                <p><strong>Precio Alquiler:</strong> $3.50</p>
                <button class="btn btn-alquilar">ALQUILAR</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bb-video-modal" id="modalJP" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">Jurassic Park</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/dLDkNge_AhE" allowfullscreen></iframe></div>
                <p><strong>Descripción:</strong> Un multimillonario logra clonar dinosaurios para un parque temático que se sale de control.</p>
                <p><strong>Género:</strong> Aventura / Ciencia Ficción | <strong>Duración:</strong> 127 min | <strong>Clasificación:</strong> B</p>
                <p><strong>Precio Alquiler:</strong> $2.50</p>
                <button class="btn btn-alquilar">ALQUILAR</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bb-video-modal" id="modalT2" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">Terminator 2</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/CRRlbK5w8AE" allowfullscreen></iframe></div>
                <p><strong>Descripción:</strong> Un cyborg protector es enviado para salvar al futuro líder de la humanidad.</p>
                <p><strong>Género:</strong> Acción / Sci-Fi | <strong>Duración:</strong> 137 min | <strong>Clasificación:</strong> C</p>
                <p><strong>Precio Alquiler:</strong> $3.00</p>
                <button class="btn btn-alquilar">ALQUILAR</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bb-video-modal" id="modalFriends" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">Friends</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/ki6Mbtnl_9I" allowfullscreen></iframe></div>
                <p><strong>Descripción:</strong> Las vidas, amores y risas de seis amigos que viven en Manhattan.</p>
                <p><strong>Género:</strong> Comedia | <strong>Temporadas:</strong> 10 | <strong>Clasificación:</strong> B</p>
                <p><strong>Precio Alquiler:</strong> $4.00 (Pack)</p>
                <button class="btn btn-alquilar">ALQUILAR</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bb-video-modal" id="modalReyLeon" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">Mufasa: El Rey León</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/lFzVJEksoDY" allowfullscreen></iframe></div>
                <p><strong>Descripción:</strong> Un pequeño león debe encontrar su lugar tras la pérdida de su padre, el Rey Mufasa.</p>
                <p><strong>Género:</strong> Infantil / Musical | <strong>Duración:</strong> 88 min | <strong>Clasificación:</strong> AA</p>
                <p><strong>Precio Alquiler:</strong> $2.50</p>
                <button class="btn btn-alquilar">ALQUILAR</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bb-video-modal" id="modalIcarly" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">iCarly</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/E-0rR-D8n_E" allowfullscreen></iframe></div>
                <p><strong>Descripción:</strong> Carly y sus amigos crean un webshow casero fenómeno mundial.</p>
                <p><strong>Género:</strong> Comedia | <strong>Temporadas:</strong> 6 | <strong>Clasificación:</strong> A</p>
                <p><strong>Precio Alquiler:</strong> $3.00 (Pack)</p>
                <button class="btn btn-alquilar">ALQUILAR</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bb-video-modal" id="modalMIB" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">Hombres de Negro</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/UxUTTrU6PA4" allowfullscreen></iframe></div>
                <p><strong>Descripción:</strong> Agentes de una organización secreta vigilan a los alienígenas.</p>
                <p><strong>Género:</strong> Comedia / Acción | <strong>Duración:</strong> 98 min | <strong>Clasificación:</strong> B</p>
                <p><strong>Precio Alquiler:</strong> $2.50</p>
                <button class="btn btn-alquilar">ALQUILAR</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Carga el video al abrir y lo quita al cerrar
        $('.bb-video-modal').on('show.bs.modal', function () {
            var iframe = $(this).find('iframe');
            iframe.attr('src', iframe.data('src'));
        });
        $('.bb-video-modal').on('hidden.bs.modal', function () {
            $(this).find('iframe').attr('src', '');
        });
    });
</script>

<?= $this->endSection() ?>