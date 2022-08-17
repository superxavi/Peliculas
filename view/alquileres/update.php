<?php include '../template/header.php' ?>

<section class="content">

    <div class="container p-3">
        <h2>Actualizar Alquiler</h2>
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
                <label for="pel_input" class="form-label">Película</label>
                <select class="form-select" id="pel_id" name="pel_id" required>
                    <option selected disabled value="">Elija una película</option>
                    <option>...</option>
                </select>
                <div class="invalid-feedback">
                    Seleccione una película.
                </div>
            </div>
            <div class="col-md-6">
                <label for="soc_input" class="form-label">Socio</label>
                <select class="form-select" id="soc_id" name="soc_id" required>
                    <option selected disabled value="">Elija una película</option>
                    <option>...</option>
                </select>
                <div class="invalid-feedback">
                    Seleccione un socio.
                </div>
            </div>
            <div class="col-md-6">
                <label for="fecha_desde" class="form-label">Desde</label>
                <input type="date" class="form-control " id="alq_fecha_desde" name="alq_fecha_desde" placeholder="Ingrese una fecha" required>
                <div  class="invalid-feedback">
                    Ingrese una fecha.
                </div>
            </div>
            <div class="col-md-6">
                <label for="fecha_hasta" class="form-label">Hasta</label>
                <input type="date" class="form-control " id="alq_fecha_hasta" name="alq_fecha_hasta" placeholder="Ingrese una fecha" required>
                <div  class="invalid-feedback">
                    Ingrese una fecha.
                </div>
            </div>
            <div class="col-md-6">
                <label for="input_valor" class="form-label">Valor</label>
                <input type="number" class="form-control" id="alq_valor" name="alq_valor"
                    placeholder="Ingrese una cantidad numérica" required>
                <div id="inputEmail" class="invalid-feedback">
                    Ingrese una cantidad numérica.
                </div>
            </div>
            <div class="col-md-6">
                <label for="fecha_entrega" class="form-label">Entrega</label>
                <input type="date" class="form-control " id="alq_fecha_entrega" name="alq_fecha_entrega"
                    placeholder="Ingrese una fecha" required>
                <div class="invalid-feedback">
                    Ingrese una fecha.
                </div>
            </div>

            <div class="col-12">
            <br><button class="btn btn-primary" type="submit"><img src="../../img/update.png" alt="" width="30" height="30" >Grabar</button>
            </div>
        </form>
    </div>
</section>
<script>
(function() {
    'use strict'


    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
</script>
<?php include '../template/footer.php' ?>