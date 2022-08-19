<?php  include '../template/header.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Actualizar socio</b>
                </div>
            </div>
            <form>
            <div class="mb-3 mt-3">
                <label for="cedulaSocio" class="form-label">Cédula</label>
                <input type="number" class="form-control" id="cedulaSocio" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">No compartiremos sus datos personales con nadie.</div>
            </div>
            <div class="mb-3">
                <label for="nombreSocio" class="form-label">Nombre</label>
                <input type="password" class="form-control" id="nombreSocio">
            </div>
            <div class="mb-3">
                <label for="direccionSocio" class="form-label">Direccion</label>
                <input type="password" class="form-control" id="direccionSocio">
            </div>
            <div class="mb-3">
                <label for="telefonoSocio" class="form-label">Telefono</label>
                <input type="password" class="form-control" id="telefonoSocio">
            </div>
            <div class="mb-3">
                <label for="correoSocio" class="form-label">Correo</label>
                <input type="password" class="form-control" id="correoSocio">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>