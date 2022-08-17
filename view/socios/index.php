<?php include '../template/header.php' ?>

<section class="content">
    <div class='container'>

        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col align-self-start">
                        <h2>Socios Registrados</h2>
                    </div>
                    <div class="col align-self-center">

                    </div>
                    <div class="col align-self-end">
                        <button type="button" class="btn btn-success">Agregar</button>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="d-flex justify-content-center"></div>
        <div class="col-sm-12 bg-light p-3 border">

            <div class="p-2 w-100">


                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"># Numero</th>
                            <th scope="col">ID</th>
                            <th scope="col">Cedula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"> </th>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>

                            <td>

                                <div>
                                    <div class="row row-cols-auto">
                                        <div class="col">
                                            <button class="border border-0 rounded-top">
                                                <img src="../../img/editar.png" type="button" width="30" height="30">
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button class="border border-0 rounded-top">
                                                <img src="../../img/lupa.png" type="button" width="30" height="30">
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button class="border border-0 rounded-top">
                                                <img src="../../img/eliminar.png" type="button" width="30" height="30">
                                            </button>
                                        </div>
                                    </div>
                                </div>


                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
    </div>
    </div>
    </div>
</section>

<?php include '../template/footer.php' ?>