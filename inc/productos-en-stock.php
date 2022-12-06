<?php
if (!isset($_SESSION)) exit("<script>window.location.href = '../';</script>");
?>
<?php if ($_SESSION["administrador"] !== 1) exit('<h1 class="text-center">Lo sentimos, solamente el administrador puede ver esta sección<br><br><i class="fa fa-hand-paper-o fa-4x"></i></h1>'); ?>
<div class="col-xs-12">
    <h1 class="text-center">Productos en stock</h1>
    <h3>Productos que están por agotarse</h3>
    <div class="container form-group">

        <label for="familia">Proveedor</label>
        <select name="familia" id="familia" class="form-control">
        </select>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-condensed">
            <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Existencia</th>
                <th>Existencia permitida</th>
                <th>Proveedor</th>
            </tr>
            </thead>
            <tbody id="cuerpo_tabla">

            </tbody>
        </table>
    </div>
</div>
<script src="./js/productos-en-stock.js" type="text/javascript"></script>