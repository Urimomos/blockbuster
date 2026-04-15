<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>

<div class="row mb-4">
    <div class="col-md-12">
        <a href="<?= base_url('admin/streaming') ?>" class="btn btn-secondary mb-3"><i class="fa fa-arrow-left"></i> Regresar</a>
        <h3 style="color: #001a57;"><i class="fa fa-plus-circle"></i> Agregar Título al Catálogo</h3>
    </div>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="<?= base_url('admin/streaming/guardar') ?>" method="POST">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label class="font-weight-bold">Nombre / Título</label>
                    <input type="text" name="nombre_streaming" class="form-control" required>
                </div>
                <div class="col-md-3 form-group">
                    <label class="font-weight-bold">Lanzamiento Original</label>
                    <input type="date" name="fecha_lanzamiento_streaming" class="form-control" required>
                </div>
                <div class="col-md-3 form-group">
                    <label class="font-weight-bold">Estreno en Plataforma</label>
                    <input type="date" name="fecha_estreno_streaming" class="form-control" required>
                </div>

                <div class="col-md-4 form-group">
                    <label class="font-weight-bold">Género</label>
                    <select name="id_genero" class="form-control" required>
                        <option value="">Seleccione un género...</option>
                        <?php foreach($generos as $g): ?>
                            <option value="<?= $g['id_genero'] ?>"><?= esc($g['nombre_genero']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label class="font-weight-bold">Clasificación</label>
                    <select name="clasificacion_streaming" class="form-control" required>
                        <option value="AA">AA (Infantil)</option>
                        <option value="A">A (Todo Público)</option>
                        <option value="B">B (Mayores de 12)</option>
                        <option value="B15">B15 (Mayores de 15)</option>
                        <option value="C">C (Mayores de 18)</option>
                        <option value="D">D (Exclusiva Adultos)</option>
                    </select>
                </div>
                
                <div class="col-md-4 form-group">
                    <label class="font-weight-bold">Formato</label>
                    <select id="tipo_formato" class="form-control" onchange="cambiarFormato()">
                        <option value="pelicula">Película</option>
                        <option value="serie">Serie</option>
                    </select>
                </div>

                <div class="col-md-6 form-group" id="div_duracion">
                    <label class="font-weight-bold text-primary">Duración (HH:MM:SS)</label>
                    <input type="time" step="1" name="duracion_streaming" class="form-control" value="01:30:00">
                </div>
                <div class="col-md-6 form-group" id="div_temporadas" style="display: none;">
                    <label class="font-weight-bold text-success">Total de Temporadas</label>
                    <input type="number" name="temporadas_streaming" class="form-control">
                </div>

                <div class="col-md-6 form-group mt-3">
                    <label class="font-weight-bold">Nombre del Archivo de Portada (Ej: peli.jpg)</label>
                    <input type="text" name="caratula_streaming" class="form-control" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                    <label class="font-weight-bold">Archivo del Tráiler (Ej: trailer.mp4)</label>
                    <input type="text" name="trailer_streaming" class="form-control" required>
                </div>

                <div class="col-md-12 form-group mt-3">
                    <label class="font-weight-bold">Sinopsis</label>
                    <textarea name="sipnosis_streaming" class="form-control" rows="4" required></textarea>
                </div>
            </div>
            
            <div class="text-right mt-3">
                <button type="submit" class="btn" style="background-color: #ffcc00; color: #000; font-weight: bold;">
                    <i class="fa fa-save"></i> Guardar Título
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function cambiarFormato() {
        var formato = document.getElementById('tipo_formato').value;
        if(formato === 'pelicula') {
            document.getElementById('div_duracion').style.display = 'block';
            document.getElementById('div_temporadas').style.display = 'none';
        } else {
            document.getElementById('div_duracion').style.display = 'none';
            document.getElementById('div_temporadas').style.display = 'block';
        }
    }
</script>

<?= $this->endSection() ?>