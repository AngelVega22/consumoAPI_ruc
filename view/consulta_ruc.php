<div class="col-lg-6 col-md-12 col-xl-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title "> CONSULTA RUC</h3>
        </div>
        <div class="card-body">

            <div class="form-group">
                <label> RUC</label>
                <div class="input-group">
                    <input class="form-control" type="text" name="ruc" id="ruc">
                    <div class="input-group-addon">

                        <button class="btn btn-primary" type="button" onclick="buscarRUC()">
                            <i class="fa fa-search"></i></button>
                    </div>
                </div>


            </div>
            <div class="form-group">

                <label> Razón Social</label>
                <input class="form-control" type="text" name="razon_social" id="razon_social">

            </div>
            <div class="form-group">

                <label> Estado</label>
                <input class="form-control" type="text" name="estado" id="estado">

            </div>
            <div class="form-group">

                <label> Condición</label>
                <input class="form-control" type="text" name="condicion" id="condicion">

            </div>


        </div>
    </div>
</div>

<script>
function buscarRUC() {
    $.ajax({
            method: "POST",
            url: "controller/controlador.php",
            data: {
                "accion": "CONSULTA_RUC",
                "ruc": $('#ruc').val()
            }
        }

    ).done(
        function(r_json) {
            json = JSON.parse(r_json);
            $('#razon_social').val(json.result.razon_social);
            $('#estado').val(json.result.estado);
            $('#condicion').val(json.result.condicion);

        }
    )
}
</script>