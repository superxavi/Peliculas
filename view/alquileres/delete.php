<?php include '../template/header.php' ?>

<section class="content">
    <div>
        <H3>Eliminar alquiler</H3>
        <br><br>
        <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Datos</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <th scope="row" id="alq_id">ID</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" id="soc_id">ID socio</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" id="pel_id">ID pelicula</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" id="alq_fecha_desde">Fecha del alquiler</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" id="alq_fecha_hasta">Fecha de vencimiento</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" id="alq_valor">Valor</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" id="alq_fecha_entrega">Fecha de entrega</th>
                    <td></td>
                </tr>
            </tbody>
        </table>
        </div>
        
        <button type="button" class="btn btn-danger"> <img src="../../img/bote-de-basura-abierto.png" width="30px" heigth="30px"> Eliminar</button>

    </div>

</section>
<?php include '../template/footer.php' ?>