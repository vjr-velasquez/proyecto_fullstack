<?php echo $this->extend('layout/template');?>

<?php echo $this->section('content');?>

    <link rel="stylesheet" href="<?php echo base_url('css/form_agregar_vehiculos.css');?>">

    <form action="">
        <label for="txt_matricula" class="form-label">Matricula del Vehiculo</label>
        <input type="text" id="txt_matricula" name="txt_matricula" class="form-control" required maxlength="7">
        <label for="" class="form-label">Marca</label>
        <select name="" id="" class="form-select">
            <option value=""></option>
        </select>
        <label for="" class="form-label">Modelo</label>
        <input type="text" id="" name="" class="form-control">
        <label for="" class="form-label">Color</label>
        <input type="color" id="" name="" class="form-control">
        <br>
    </form>


<?php echo $this->endSection();?>


