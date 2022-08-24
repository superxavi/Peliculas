<?php  include '../template/header.php'?>

<?php include '../../controller/socios/update.php' ?>


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

            <?php
                $row = $result->fetch_assoc();
            ?>
            <form action="../../controller/socios/update.php" method='POST'>
            <div class="mb-3 mt-3">
                <label for="soc_cedula" class="form-label">Cédula</label>
                <input type="number" class="form-control" id="soc_cedula" name="soc_cedula" aria-describedby="emailHelp" required 
                value="<?php  echo $row['soc_cedula']?>">
                <div id="emailHelp" class="form-text">No compartiremos sus datos personales con nadie.</div>
            </div>
            <div class="mb-3">
                <label for="soc_nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="soc_nombre" name="soc_nombre" required
                value="<?php  echo $row['soc_nombre']?>">
            </div>
            <div class="mb-3">
                <label for="soc_direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="soc_direccion" name="soc_direccion" required
                value="<?php  echo $row['soc_direccion']?>">
            </div>
            <div class="mb-3">
                <label for="soc_telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="soc_telefono" name="soc_telefono" required
                value="<?php  echo $row['soc_telefono']?>">
            </div>
            <div class="mb-3">
                <label for="soc_correo" class="form-label">Correo</label>
                <input type="text" class="form-control" id="soc_correo" name="soc_correo" required
                value="<?php  echo $row['soc_correo']?>">
            </div>
            <input type="hidden" name='soc_id' value="<?php  echo $row['soc_id']?>">

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