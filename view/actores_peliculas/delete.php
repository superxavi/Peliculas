<?php include '../template/header.php' ?>

<section class="content">
    <div>
        <H3>Eliminar actor-pelicula</H3>
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
                        <th scope="row" id="apl_id">ID</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row" id="act_id">ID actor</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row" id="pel_id">ID pelicula</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row" id="apl_papel">Papel</th>
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