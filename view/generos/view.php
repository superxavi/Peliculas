<?php include '../template/header.php' ?>
<?php include '../../controller/generos/view.php'?>
<section class="content">
    <div>
        <H3>Datos de genero</H3>
        <br><br>
        <div class="container">
        <?php
                $row = $result->fetch_assoc();
            ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Datos</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <th scope="row" id="gen_id">ID</th>
                    <td><?php echo $row['gen_id'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="gen_nombre">Nombre</th>
                    <td><?php echo $row['gen_nombre'];?></td>

            </tbody>
        </table>
        </div>
        <form action="../../controller/generos/view.php" method="post">
            <input type="hidden" name="gen_id" value="<?php echo $row['gen_id'];?>">
        </form>
    </div>

</section>
<?php include '../template/footer.php' ?>