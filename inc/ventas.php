
<link rel="stylesheet" href="./css/abc.css">
<div class="container-fluid">
    <div class="container">
        <h2 class="text-center"><strong>Iniciar Venta</strong></h2>
        <div class="col-xs-12">

        <div id="al"></div>
        <div id="texto"></div>
        
            <div class="container form-group">
                <input class="form-control" type="text" id="codigo_producto"
               placeholder="Ingrese el nombre o código del producto">
            </div>
            
        </div>
    </div>
    <br>
    <div class="container">
        <div class="col-xs-12 table-responsive" id="contenedor_tabla">


        </div>
        <h3 hidden="hidden">Total: <span id="contenedor_total"></span></h3>
    </div>
</div>
<div class="container">
<div class="btn-group btn-group-justified">
    <div class="btn-group">
        <button id="quitar_ultimo_producto" type="button" class="btn btn-warning">
            <i class="fa-minus fa visible-xs"></i>
            <span class="hidden-xs"><kbd>-</kbd> Quitar último producto</span>
        </button>
        </div>
        <div class="btn-group">
            <button id="preparar_venta" type="button" class="btn btn-success">
                <i class="fa-check-circle-o fa visible-xs"></i>
                <span class="hidden-xs"><kbd>F1</kbd> Terminar venta</span>
            </button>
        </div>
        <div class="btn-group">
            <button id="cancelar_toda_la_venta" type="button" class="btn btn-danger">
                <i class="fa-ban fa visible-xs"></i>
                <span class="hidden-xs"><kbd>F2</kbd> Cancelar venta</span>
            </button>
        </div>
    </div>
<div>
    

<div id="modal_procesar_venta" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-center">Realizar venta</h3>
            </div>
            <div class="modal-body">
                <h5 hidden="hidden"><strong>Total de la venta: </strong><span id="contenedor_total_modal"></span></h5>
                <div class="row">
                    <div class="form-group">
                        <div class="col-xs-12 col-md-10">
                            <input placeholder="Monto recibido por parte del cliente" type="number" id="pago_usuario"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="checkbox checkbox-primary checkbox-circle">
                            <input type="checkbox" id="imprimir_ticket" checked>
                            <label for="imprimir_ticket">
                                Imprimir factura
                            </label>
                        </div>
                    </div>
                </div>
                <h5 hidden="hidden"><strong>Cambio:</strong> <span id="contenedor_cambio"></span></h5>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-12">
                        <div hidden="hidden" class="alert">
                            <span id="mostrar_resultados_eliminar"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button id="realizar_venta" class="form-control btn btn-success">Vender</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="./css/eac.css">
<script src="./js/ventas.js"></script>
<script src="./lib/eac.js"></script>
<script>
//https://s3.amazonaws.com/dolartoday/data.json
$.getJSON("https://s3.amazonaws.com/dolartoday/data.json",function(data){
  console.log(data)
  $('#texto').html('Paralelo: '+data.USD.transferencia+ 'BS' + '<br> BCV: ' + data.USD.sicad2 + 'BS');
  $('#al').html('Promedio del Dolar: '+data._timestamp.fecha);
    }); 
</script>
