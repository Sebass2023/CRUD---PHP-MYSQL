<a href="RegistrosController.php?accion=crudtable" class="btn btn-primary">Registros<i class="bi bi-arrow-left-short"></i></a>
<?php
 foreach ($editar as $edit) {
?>
<center>
    <div class="container mt-3" style="position:relative; top:100px;">    
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Editar registros</h4>
                
                
                    <form action="RegistrosController.php?accion=editar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $edit['id'] ?>">
                    <input type="text" class="form-control" name="nombre" value="<?php echo $edit['nombre'] ?>" required><br>
                    <input type="text" class="form-control" name="apellido" value="<?php echo $edit['apellido'] ?>"  required><br>
                    <input type="text" class="form-control" name="edad" value="<?php echo $edit['edad'] ?>" required><br>
                    <input type="email" class="form-control" name="email" value="<?php echo $edit['email'] ?>" required><br>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" value="editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</center>

<?php } ?>
