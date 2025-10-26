<?php echo $this->extend('layout/template');?>

<?php echo $this->section('content');?>

    <link rel="stylesheet" href="<?php echo base_url('css/form_agregar_vehiculos.css');?>">

    <form action="<?php echo base_url('agregar_vehiculo');?>" method="post">
        <label for="txt_matricula" class="form-label">Matricula del Vehiculo</label>
        <input type="text" id="txt_matricula" name="txt_matricula" class="form-control" required maxlength="7">
        <label for="txt_marca" class="form-label">Marca</label>
        <select name="txt_marca" id="txt_marca" class="form-select">
            
        </select>
        <label for="txt_modelo" class="form-label">Modelo</label>
        <input type="text" id=txt_modelo"" name="txt_modelo" class="form-control">
        <label for="txt_color" class="form-label">Color</label>
        <input type="color" id="txt_color" name="txt_color" class="form-control">
        <br>
        <button type="submit" class="btn btn-outline-warning">AGREGAR VEHICULO</button>
    </form>


<?php echo $this->endSection();?>


