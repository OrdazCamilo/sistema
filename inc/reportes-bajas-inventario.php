<?php
if (!isset($_SESSION)) exit("<script>window.location.href = '../';</script>");
?>
<?php if ($_SESSION["administrador"] !== 1) exit('<h1 class="text-center">Lo sentimos, solamente el administrador puede ver esta sección<br><br><i class="fa fa-hand-paper-o fa-4x"></i></h1>'); ?>
<div class="row visible-print-block">
    <h1 class="text-center">Reporte sobre gastos</h1>
</div>
<div class="container hidden-print">
    <div class="col-xs-12">
        <h4 class="h5 text-justify">Seleccione el lapso de tiempo</h4>
    </div>
</div>
<div class="container hidden-print">
    <div class="col-xs-4 text-center">
        <h4>Del</h4>
        <input id="fecha_inicio" type="datetime-local" class="form-control">
    </div>
    <div class="col-xs-4 text-center">
        <h4>Hasta</h4>
        <input id="fecha_fin" type="datetime-local" class="form-control">
    </div>
    <div class="col-xs-4 text-center">
        <h4>Vendedor</h4>
        <select class="form-control" name="usuarios" id="usuarios">
        </select>
    </div>
</div>
<br>
<div class="row hidden-print">
    <div class="col-xs-6 col-md-offset-3 col-xs-12">
        <button class="btn btn-info form-control" id="generar_reporte">Generar reporte <i class="fa fa-file-pdf-o"></i>
        </button>
    </div>
</div>
<div class="container"><br>
    <div class="col-xs-12">
        <div id="contenedor_tabla" class="table-responsive">
        </div>
    </div>
</div>
<script src="./js/reporte-bajas-inventario.js"></script>