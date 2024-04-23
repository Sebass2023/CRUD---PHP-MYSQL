
<body>
<a href="RegistrosController.php?accion=crudtable" class="btn btn-primary">Registros<i class="bi bi-arrow-left-short"></i></a>
<center>
    <div class="container mt-3" style="position:relative; top:100px;">    
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Agregar registros</h4>
                <form action="RegistrosController.php?accion=registro" method="POST">
                    <input type="text" class="form-control" name="nombre" placeholder="Su nombre" required><br>
                    <input type="text" class="form-control" name="apellido" placeholder="Su apellido" required><br>
                    <input type="text" class="form-control" name="edad" placeholder="Su edad" required><br>
                    <input type="email" class="form-control" name="email" placeholder="Su email" required><br>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" value="Añadir">
                    </div>
                </form>
            </div>
        </div>
    </div>
</center>

    
</body>
</html>