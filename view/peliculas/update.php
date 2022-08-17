<?php include '../template/header.php' ?>

<section class="content">

    <div class="container p-3">
    <h2>Actualizar Película</h2>
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-12">
                <label for="inputNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="pel_nombre" name="pel_nombre" placeholder="Ingrese el nombre de la película" required>
                <div class="valid-feedback">
                    Válido!
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Costo</label>

                <input type="number" class="form-control" id="pel_costo" name="pel_costo" placeholder="Ingrese una cantidad numérica" required>
                <div id="inputEmail" class="invalid-feedback">
                    Ingrese una cantidad numérica.
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputDireccion" class="form-label">Fecha de estreno</label>
                <input type="date" class="form-control " id="pel_fecha_estreno" name="pel_fecha_estreno" placeholder="Ingrese una fecha" required>
                <div  class="invalid-feedback">
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
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
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