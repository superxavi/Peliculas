<?php include '../template/header.php' ?>

<section class="content">
    <div>
        <H3>Eliminar actor</H3>
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
                        <th scope="row" id="act_id">ID</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row" id="act_nombre">Nombre</th>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <button type="button" class="btn btn-danger"> <img src="../../img/bote-de-basura-abierto.png" width="30px" heigth="30px">
            Eliminar</button>

    </div>

</section>
<?php include '../template/footer.php' ?>