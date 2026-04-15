<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<div class="row mb-4">
    <div class="col-md-12">
        <a href="<?= base_url('admin/videos') ?>" class="btn btn-secondary mb-3"><i class="fa fa-arrow-left"></i> Regresar</a>
        <h3 style="color: #001a57;"><i class="fa fa-plus-circle"></i> Vincular Nuevo Video</h3>
    </div>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="<?= base_url('admin/videos/guardar') ?>" method="POST">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Seleccionar Película o Serie</label>
                    <select name="id_streaming" id="id_streaming" class="form-control" required onchange="verificarTipo()">
                        <option value="">Elegir...</option>
                        <?php foreach($streamings as $s): ?>
                            <option value="<?= $s['id_streaming'] ?>" data-es-serie="<?= $s['temporadas_streaming'] ? 'si' : 'no' ?>">
                                <?= esc($s['nombre_streaming']) ?> (<?= $s['temporadas_streaming'] ? 'Serie' : 'Pelicula' ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Nombre del Archivo (Ej: mufasa_final.mp4)</label>
                    <input type="text" name="video" class="form-control" required>
                </div>

                <div id="campos_serie" style="display:none;" class="col-12 border-top pt-3 mt-2">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label>Nombre Parte/Temporada (Ej: PARTE 1)</label>
                            <input type="text" name="nombre_temporada" class="form-control">
                        </div>
                        <div class="col-md-4 form-group">
                            <label># Temporada (Número)</label>
                            <input type="number" name="video_temporada" class="form-control">
                        </div>
                        <div class="col-md-4 form-group">
                            <label># Capítulo</label>
                            <input type="number" name="capitulo_temporada" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-md-12 form-group mt-3">
                    <label class="font-weight-bold">Descripción del Capítulo (Opcional)</label>
                    <textarea name="descripcion_capitulo_temporada" class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="text-right mt-3">
                <button type="submit" class="btn" style="background-color: #ffcc00; color: #000; font-weight: bold;">
                    <i class="fa fa-save"></i> Guardar Video
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function verificarTipo() {
    var select = document.getElementById('id_streaming');
    var selectedOption = select.options[select.selectedIndex];
    var esSerie = selectedOption.getAttribute('data-es-serie');
    
    document.getElementById('campos_serie').style.display = (esSerie === 'si') ? 'block' : 'none';
}
</script>
<?= $this->endSection() ?>