<?php  include '../template/header.php'?>
<?php  include '../../controller/actores/delete.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Eliminar Actor</b>
                </div>
            </div>
            <form action="../../controller/actores/delete.php" method="post">
                <?php
                    $row = $result->fetch_assoc();
                ?>
                <div class="mb-3 mt-3">
                    <label for="IDActor" class="form-label">Actor ID</label>
                    <input type="number" class="form-control" readonly id="IDActor"
                    value="<?php echo $row['act_id']?>">
                </div>
                <div class="mb-3">
                    <label for="act_nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" readonly id="act_nombre"
                    value="<?php echo $row['act_nombre']?>">
                    <br>
                </div>
                    <input type="hidden" name="act_id" value="<?php echo $row['act_id']?>">
                    <input type="submit" class="btn btn-danger" value="Eliminar"></input>
            </form>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>