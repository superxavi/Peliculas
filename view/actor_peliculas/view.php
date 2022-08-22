<?php  include '../template/header.php'?>
<?php  include '../../controller/actor_pelicula/view.php'?>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 mt-5">
            <p class="lead"><b>Ver datos Actor-Pelicula</b></p>
            <?php
            $row = $result->fetch_assoc();
            ?>
            <table class="table table-hover align-middle table-success">
                    <tbody>
                        <tr>
                            <th scope="row">Actor</th>
                            <td><?php echo $row['act_nombre']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Película</th>
                            <td><?php echo $row['pel_nombre']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Papel Actor</th>
                            <td><?php echo $row['apl_papel']?></td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
    </section>
    <!-- /.content -->
    <?php  include '../template/footer.php'?>