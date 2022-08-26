<?php include '../template/header.php' ?>
<?php include '../../controller/alquileres/update.php'?>
<section class="content">
    <?php $row = $result_alq->fetch_assoc() ?>
    <div class="container p-3">
        <h2>Actualizar Alquiler</h2>
        <form class="row g-3 needs-validation" action="../../controller/alquileres/update.php" method="post" novalidate>
            <div class="col-md-6">
                <label for="pel_input" class="form-label">Película</label>
                <select class="form-select form-control" id="pel_id" name="pel_id" required>
                    <option selected disabled value="">Elija una película</option>
                    <?php
                    if ($result_pel->num_rows > 0){
                        while($row_pel = $result_pel->fetch_assoc()) {
                            if($row["pel_id"]==$row_pel["pel_id"]){
                                echo '<option selected name="pel_id" value="'.$row_pel["pel_id"].'">'.$row_pel["pel_nombre"].'</option>';
                            }else{
                                echo '<option name="pel_id" value="'.$row_pel["pel_id"].'">'.$row_pel["pel_nombre"].'</option>';
                            }
                            
                        }
                    }a
                    ?>
                </select>
                <div class="invalid-feedback">
                    Seleccione una película.
                </div>
            </div>
            <div class="col-md-6">
                <label for="soc_input" class="form-label">Socio</label>
                <select class="form-select form-control" id="soc_id" name="soc_id" required>
                    <option selected disabled value="">Elija una película</option>
                    <?php
                    if ($result_soc->num_rows > 0){
                        while($row_soc = $result_soc->fetch_assoc()) {
                            if($row["soc_id"]==$row_soc["soc_id"]){
                                echo '<option selected name="soc_id" value="'.$row_soc["soc_id"].'">'.$row_soc["soc_nombre"].'</option>';
                            }else{
                                echo '<option name="soc_id" value="'.$row_soc["soc_id"].'">'.$row_soc["soc_nombre"].'</option>';
                            }
                        }
                    }
                    ?>
                </select>
                <div class="invalid-feedback">
                    Seleccione un socio.
                </div>
            </div>
            <div class="col-md-6">
                <label for="fecha_desde" class="form-label">Desde</label>
                <input type="date" class="form-control " id="alq_fecha_desde" name="alq_fecha_desde" placeholder="Ingrese una fecha" value="<?php echo $row['alq_fecha_desde']?>" required>
                <div  class="invalid-feedback">
                    Ingrese una fecha.
                </div>
            </div>
            <div class="col-md-6">
                <label for="fecha_hasta" class="form-label">Hasta</label>
                <input type="date" class="form-control " id="alq_fecha_hasta" name="alq_fecha_hasta" placeholder="Ingrese una fecha" value="<?php echo $row['alq_fecha_hasta']?>" required>
                <div  class="invalid-feedback">
                    Ingrese una fecha.
                </div>
            </div>
            <div class="col-md-6">
                <label for="input_valor" class="form-label">Valor</label>
                <input type="number" class="form-control" id="alq_valor" name="alq_valor"
                    placeholder="Ingrese una cantidad numérica" value='<?php echo $row['alq_valor']?>' required>
                <div id="inputEmail" class="invalid-feedback">
                    Ingrese una cantidad numérica.
                </div>
            </div>
            <div class="col-md-6">
                <label for="fecha_entrega" class="form-label">Entrega</label>
                <input type="date" class="form-control " id="alq_fecha_entrega" name="alq_fecha_entrega"
                    placeholder="Ingrese una fecha" value="<?php echo $row['alq_fecha_entrega']?>" required>
                <div class="invalid-feedback">
                    Ingrese una fecha.
                </div>
            </div>

            <div class="col-12">
                <input type="hidden" name="alq_id" value="<?php echo $row['alq_id'];?>">
                <br><button class="btn btn-primary" type="submit"><i class="fa-solid fa-pen p-1"></i>Actualizar</button>
            </div>
        </form>
    </div>
</section>
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
<?php include '../template/footer.php' ?>