<?php  include '../template/header.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Actualizar Alquileres</b>
                </div>
            </div>
            <form>
                <div>
                <div class="mb-3">
                    <label for="valorPagar" class="form-label">Socio ID</label>
                    <input type="number" class="form-control" id="valorPagar" readonly>
                </div>
                <div id="emailHelp" class="form-text">No compartiremos sus datos personales con nadie.</div>
                </div>
                <div class="mb-3">
                    <label for="valorPagar" class="form-label">Pelicula ID</label>
                    <input type="number" class="form-control" id="valorPagar" readonly>
                </div>
                <div class="mb-3">
                    <label for="valorPagar" class="form-label">Fecha de Inicio del Alquiler</label>
                    <input type="number" class="form-control" id="valorPagar" readonly>
                </div>
                <div class="mb-3">
                    <label for="valorPagar" class="form-label">Fecha Final del Alquiler</label>
                    <input type="number" class="form-control" id="valorPagar" readonly>
                </div>
                <div class="mb-3">
                    <label for="valorPagar" class="form-label">Valor a Pagar</label>
                    <input type="number" class="form-control" id="valorPagar" readonly>
                </div>
                <div class="mb-3">
                    <label for="valorPagar" class="form-label">Fecha de Entrega del Alquiler</label>
                    <input type="number" class="form-control" id="valorPagar" readonly>
                </div>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>