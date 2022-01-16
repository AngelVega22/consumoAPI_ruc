<div class="col-lg-6 col-md-12 col-xl-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title "> CONSULTA DNI</h3>
        </div>
        <div class="card-body">

            <div class="form-group">
                <label> DNI</label>
                <div class="input-group">
                    <input class="form-control" type="text" name="dni" id="dni">
                    <div class="input-group-addon">

                        <button class="btn btn-primary" type="button" onclick="buscarDNI()">
                            <i class="fa fa-search"></i></button>
                    </div>
                </div>


            </div>
            <div class="form-group">

                <label> Nombres y Apellidos</label>
                <input class="form-control" type="text" name="nombres_apellidos" id="nombres_apellidos">

            </div>

        </div>
    </div>
</div>

<script>
function buscarDNI() {
    $.ajax({
            method: "POST",
            url: "controller/controlador.php",
            data: {
                "accion": "CONSULTA_DNI",
                "dni": $('#dni').val()
            }
        }

    ).done(
        function(r_json) {
            json = JSON.parse(r_json);
            $('#nombres_apellidos').val(json.result.Nombre + ' ' + json.result.Paterno + ' ' + json.result.Materno);
        }
    )
}
</script>