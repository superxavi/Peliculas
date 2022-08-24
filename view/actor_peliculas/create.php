<?php  include '../template/header.php'?>

<?php include '../../controller/actor_pelicula/create.php'?>


    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Registrar Actor-Pelicula</b>
                </div>
            </div>

            <form action='../../controller/actor_pelicula/create.php' method="POST" novalidate>
                <div class="mb-3 mt-3">
                    <label for="act_id" class="form-label">Nombre Actor</label>
                    <select name="act_id" id="act_id" required class="form-control">
                        <?php
                            while($row = $result_act->fetch_assoc())
                            {
                                echo '<option name="act_id" value="'.$row['act_id'].'">'.$row['act_nombre'].'</option>';
                            }
                        ?>
                    </select>
                    <div id="emailHelp" class="form-text">No compartiremos sus datos personales con nadie.</div>
                </div>
                <div class="mb-3 mt-3">
                    <label for="pel_id" class="form-label">Nombre Pelicula</label>
                    <select name="pel_id" id="pel_id" required class="form-control">
                        <?php
                            while($row = $result_pel->fetch_assoc())
                            {
                                echo '<option name="pel_id" value="'.$row['pel_id'].'">'.$row['pel_nombre'].'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="apl_papel" class="form-label">Papel de la Pelicula</label>
                    <input type="text" class="form-control" id="apl_papel" required name="apl_papel">

            <form>
                <div>
                    <label for="ActorId" class="form-label mb-3 mt-3">Actor ID</label>
                    <select class="form-select" aria-label="Default select example" id="ActorId">
                        <option selected>Seleccione</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div id="emailHelp" class="form-text">No compartiremos sus datos personales con nadie.</div>
                </div>
                <div>
                    <label for="PeliculaId" class="form-label mb-3 mt-3">Pelicula ID</label>
                    <select class="form-select mb-3" aria-label="Default select example" id="PeliculaId">
                        <option selected>Seleccione</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="correoSocio" class="form-label">Papel de la Pelicula</label>
                    <input type="text" class="form-control" id="correoSocio">

                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>

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


    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>