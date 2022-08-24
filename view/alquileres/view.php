<?php  include '../template/header.php'?>

<?php  include '../../controller/alquileres/view.php'?>


    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <p class="lead"><b>Ver datos de Alquileres</b></p>

            <?php
            $row = $result->fetch_assoc();
            ?>
            <table class="table table-hover align-middle table-success">
                <tbody>
                        <tr>
                            <th scope="row">Socio</th>
                            <td><?php echo $row['soc_nombre']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Película</th>
                            <td><?php echo $row['pel_nombre']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Fecha Inicio Alquiler</th>
                            <td><?php echo $row['alq_fecha_desde']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Fecha Fin Alquiler</th>
                            <td><?php echo $row['alq_fecha_hasta']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Valor a Pagar</th>
                            <td><?php echo $row['alq_valor']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Fecha entrega Alquiler</th>
                            <td><?php echo $row['alq_fecha_entrega']?></td>

            <table class="table table-hover align-middle table-success">
                <tbody>
                        <tr>
                            <th scope="row">Socio ID</th>
                            <td>171523256</td>
                        </tr>
                        <tr>
                            <th scope="row">Película ID</th>
                            <td>233232332</td>
                        </tr>
                        <tr>
                            <th scope="row">Fecha Inicio Alquiler</th>
                            <td>2002-12-01</td>
                        </tr>
                        <tr>
                            <th scope="row">Fecha Fin Alquiler</th>
                            <td>2002-08-11</td>
                        </tr>
                        <tr>
                            <th scope="row">Valor a Pagar</th>
                            <td>12</td>
                        </tr>
                        <tr>
                            <th scope="row">Fecha entrega Alquiler</th>
                            <td>2002-02-12</td>

                        </tr>
                </tbody>
            </table>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>
    