<?php
if (!isset($_SESSION)) exit("<script>window.location.href = '../';</script>");
?>
<div class="container">
    <div class="col-xs-12">
        <div class="form-group">
            <label for="cantidad">Cantidad de dinero a guardar:</label>
            <input type="number" id="cantidad" class="form-control" placeholder="Cantidad de dinero a guardar">
        </div>
    </div>
    <div class="col-md-4 text-center col-md-offset-4">
        <button id="ingresar_dinero" class="form-control btn-success btn-md">
            Ingresar dinero a la caja
        </button>
    </div>
</div>
<script src="./js/caja.js"></script>