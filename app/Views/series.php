<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<style>
    /* Estilo para que el título sea visible sobre el fondo oscuro */
    .product__page__title h4 { color: #FFCC00 !important; font-weight: 800; text-transform: uppercase; }

    .product__item__pic, .product__sidebar__view__item { 
        cursor: pointer; 
        transition: transform 0.3s ease, box-shadow 0.3s ease !important; 
    }
    .product__item__pic:hover { 
        transform: scale(1.05); 
        box-shadow: 0px 0px 15px #FFCC00; 
        border: 2px solid #FFCC00 !important; 
    }
    .bb-search-bar {
        background-color: #001A5E; border: 2px solid #FFCC00; color: white;
        border-radius: 5px; padding: 10px 15px; width: 100%; font-weight: bold;
    }
    .nav-tabs.bb-custom-tabs { border-bottom: none !important; justify-content: flex-end; }
    .nav-tabs.bb-custom-tabs .nav-link { color: #b3b3b3 !important; border: none !important; background: transparent !important; font-weight: 600; }
    .nav-tabs.bb-custom-tabs .nav-link.active { color: #FFCC00 !important; border-bottom: 2px solid #FFCC00 !important; }
    
    /* Estilos de Modales */
    .modal-content { background-color: #001A5E; color: white; border: 2px solid #FFCC00; }
    .modal-body p { margin-bottom: 5px; font-size: 14px; }
    .modal-body strong { color: #FFCC00; }
</style>

<section class="product-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="product__page__title">
                    <div class="row align-items-center">
                        <div class="col-lg-6"><h4>Catálogo de Series</h4></div>
                        <div class="col-lg-6"><input type="text" id="buscadorSeries" class="bb-search-bar" placeholder="🔍 Buscar por título o género (comedia, drama...)"></div>
                    </div>
                </div>
                <div class="row" id="contenedorSeries">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="drake y josh comedia adolescente">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/Drake_josh.jpg') ?>" data-toggle="modal" data-target="#modalDrake"><div class="ep">T. 1-4</div></div>
                            <div class="product__item__text"><h5 style="color:white;">Drake y Josh</h5></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="friends amigos comedia sitcom">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/friends.jpg') ?>" data-toggle="modal" data-target="#modalFriends"><div class="ep">T. 1-10</div></div>
                            <div class="product__item__text"><h5 style="color:white;">Friends</h5></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="malcolm comedia familiar">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/malcom.jpg') ?>" data-toggle="modal" data-target="#modalMalcolm"><div class="ep">T. 1-7</div></div>
                            <div class="product__item__text"><h5 style="color:white;">Malcolm</h5></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="principe del rap comedia clasico">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/principe.jpg') ?>" data-toggle="modal" data-target="#modalPrincipe"><div class="ep">CLÁSICO</div></div>
                            <div class="product__item__text"><h5 style="color:white;">El Príncipe del Rap</h5></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="la casa de papel accion suspenso robo">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/caratula_casa_de_papel.png') ?>" data-toggle="modal" data-target="#modalLCDP"><div class="ep">T. 1-5</div></div>
                            <div class="product__item__text"><h5 style="color:white;">La Casa de Papel</h5></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="breaking bad drama suspenso crimen">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/break.jpg') ?>" data-toggle="modal" data-target="#modalBB"><div class="ep">HOT</div></div>
                            <div class="product__item__text"><h5 style="color:white;">Breaking Bad</h5></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="the office comedia documental">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/the_office.jpg') ?>" data-toggle="modal" data-target="#modalOffice"><div class="ep">T. 1-9</div></div>
                            <div class="product__item__text"><h5 style="color:white;">The Office</h5></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="game of thrones fantasia drama epico">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/game_of_thrones.jpg') ?>" data-toggle="modal" data-target="#modalGOT"><div class="ep">ÉPICO</div></div>
                            <div class="product__item__text"><h5 style="color:white;">Game of Thrones</h5></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="stranger things ciencia ficcion terror misterio">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/stranger_things.jpg') ?>" data-toggle="modal" data-target="#modalStranger"><div class="ep">SCI-FI</div></div>
                            <div class="product__item__text"><h5 style="color:white;">Stranger Things</h5></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="los simpson animacion comedia">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/los_simpson.jpg') ?>" data-toggle="modal" data-target="#modalSimpsons"><div class="ep">T. 1-15</div></div>
                            <div class="product__item__text"><h5 style="color:white;">Los Simpson</h5></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="product__sidebar">
                    <div class="section-title"><h5>MÁS MARATONEADAS</h5></div>
                    <ul class="nav nav-tabs bb-custom-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#s-dia" role="tab">Día</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#s-sem" role="tab">Semana</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#s-mes" role="tab">Mes</a></li>
                    </ul>
                    <div class="tab-content mt-3">
                        <div class="tab-pane active" id="s-dia" role="tabpanel">
                            <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/Peliculas/caratula_casa_de_papel.png') ?>" data-toggle="modal" data-target="#modalLCDP">
                                <div class="ep">TOP 1</div><div class="view"><i class="fa fa-eye"></i> 15k</div>
                                <h5><a href="javascript:void(0)">La Casa de Papel</a></h5>
                            </div>
                        </div>
                        <div class="tab-pane" id="s-sem" role="tabpanel">
                            <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/series/break.jpg') ?>" data-toggle="modal" data-target="#modalBB">
                                <div class="ep">TOP 1</div><div class="view"><i class="fa fa-eye"></i> 45k</div>
                                <h5><a href="javascript:void(0)">Breaking Bad</a></h5>
                            </div>
                        </div>
                        <div class="tab-pane" id="s-mes" role="tabpanel">
                            <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/series/the_office.jpg') ?>" data-toggle="modal" data-target="#modalOffice">
                                <div class="ep">TOP 1</div><div class="view"><i class="fa fa-eye"></i> 120k</div>
                                <h5><a href="javascript:void(0)">The Office</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade bb-video-modal" id="modalOffice" tabindex="-1"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">The Office</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3" style="border: 2px solid #FFCC00;"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/gO8N3L_aERg" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Falso documental sobre la vida en la oficina de Scranton.</p><p><strong>Género:</strong> Comedia | <strong>Temporadas:</strong> 9</p><p><strong>Precio:</strong> $3.50</p><button class="btn btn-warning btn-block" style="font-weight:bold;">ALQUILAR AHORA</button></div></div></div></div>

<div class="modal fade bb-video-modal" id="modalLCDP" tabindex="-1"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">La Casa de Papel</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/hMANIarjT50" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Un grupo de ladrones planea el mayor atraco de la historia.</p><p><strong>Género:</strong> Acción / Suspenso | <strong>Temporadas:</strong> 5</p><p><strong>Precio:</strong> $4.00</p><button class="btn btn-warning btn-block" style="font-weight:bold;">ALQUILAR AHORA</button></div></div></div></div>

<div class="modal fade bb-video-modal" id="modalBB" tabindex="-1"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">Breaking Bad</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/HhesaQXLuRY" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Un profesor de química entra al mundo del narcotráfico.</p><p><strong>Género:</strong> Drama / Crimen | <strong>Temporadas:</strong> 5</p><p><strong>Precio:</strong> $4.50</p><button class="btn btn-warning btn-block" style="font-weight:bold;">ALQUILAR AHORA</button></div></div></div></div>

<div class="modal fade bb-video-modal" id="modalDrake" tabindex="-1"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">Drake y Josh</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/xgeoy7DB9nY" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Dos hermanastros opuestos aprenden a convivir.</p><p><strong>Género:</strong> Comedia | <strong>Temporadas:</strong> 4</p><p><strong>Precio:</strong> $2.50</p><button class="btn btn-warning btn-block" style="font-weight:bold;">ALQUILAR AHORA</button></div></div></div></div>

<div class="modal fade bb-video-modal" id="modalFriends" tabindex="-1"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">Friends</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/ki6Mbtnl_9I" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Las aventuras de seis amigos en Nueva York.</p><p><strong>Género:</strong> Comedia / Sitcom | <strong>Temporadas:</strong> 10</p><p><strong>Precio:</strong> $3.00</p><button class="btn btn-warning btn-block" style="font-weight:bold;">ALQUILAR AHORA</button></div></div></div></div>

<div class="modal fade bb-video-modal" id="modalMalcolm" tabindex="-1"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">Malcolm</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/PfID_33TL_A" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Un niño genio en una familia disfuncional.</p><p><strong>Género:</strong> Comedia | <strong>Temporadas:</strong> 7</p><p><strong>Precio:</strong> $2.50</p><button class="btn btn-warning btn-block" style="font-weight:bold;">ALQUILAR AHORA</button></div></div></div></div>

<div class="modal fade bb-video-modal" id="modalPrincipe" tabindex="-1"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">El Príncipe del Rap</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/1nCqRmx3Dnw" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Un joven de Filadelfia se muda con sus tíos ricos.</p><p><strong>Género:</strong> Comedia | <strong>Temporadas:</strong> 6</p><p><strong>Precio:</strong> $2.00</p><button class="btn btn-warning btn-block" style="font-weight:bold;">ALQUILAR AHORA</button></div></div></div></div>

<div class="modal fade bb-video-modal" id="modalGOT" tabindex="-1"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">Game of Thrones</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/KPLWWIOCOOQ" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Familias nobles luchan por el Trono de Hierro.</p><p><strong>Género:</strong> Fantasía / Drama | <strong>Temporadas:</strong> 8</p><p><strong>Precio:</strong> $5.00</p><button class="btn btn-warning btn-block" style="font-weight:bold;">ALQUILAR AHORA</button></div></div></div></div>

<div class="modal fade bb-video-modal" id="modalStranger" tabindex="-1"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">Stranger Things</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/R1ZXOOLMJ8s" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Misterios sobrenaturales en el pueblo de Hawkins.</p><p><strong>Género:</strong> Sci-Fi / Terror | <strong>Temporadas:</strong> 4</p><p><strong>Precio:</strong> $4.00</p><button class="btn btn-warning btn-block" style="font-weight:bold;">ALQUILAR AHORA</button></div></div></div></div>

<div class="modal fade bb-video-modal" id="modalSimpsons" tabindex="-1"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" style="color:#FFCC00;">Los Simpson</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/Y0iI8_fS-m0" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> La vida satírica de la familia amarilla.</p><p><strong>Género:</strong> Animación / Comedia | <strong>Temporadas:</strong> 35</p><p><strong>Precio:</strong> $2.50</p><button class="btn btn-warning btn-block" style="font-weight:bold;">ALQUILAR AHORA</button></div></div></div></div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var searchInput = document.getElementById('buscadorSeries');
        var series = document.querySelectorAll('.serie-card');
        if(searchInput) {
            searchInput.addEventListener('keyup', function() {
                var filtro = searchInput.value.toLowerCase();
                series.forEach(function(serie) {
                    var titulo = serie.getAttribute('data-titulo');
                    serie.style.display = (titulo && titulo.includes(filtro)) ? '' : 'none';
                });
            });
        }
        $('.bb-video-modal').on('show.bs.modal', function () {
            var iframe = $(this).find('iframe');
            iframe.attr('src', iframe.data('src'));
        });
        $('.bb-video-modal').on('hidden.bs.modal', function () {
            $(this).find('iframe').attr('src', '');
        });
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('.set-bg').each(function () {
                var bg = $(this).data('setbg');
                $(this).css('background-image', 'url(' + bg + ')');
            });
        });
    });
</script>

<?= $this->endSection() ?>