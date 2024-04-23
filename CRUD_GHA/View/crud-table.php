
<body>

<center>
    <div class="container mt-3" style="width: 80%;">
        <div class="card">
            <div class="card-body">
                <h4 class="text-primary">C.R.U.D Registros</h4>
                <div class="table-responsive">
                    <table id="example" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Edad</th>
                                <th>Email</th>
                                <th>Borrar</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach($pedidos as $p){ ?>
                            <tr>
                                <td><?php echo $p['nombre'] ?></td>
                                <td><?php echo $p['apellido'] ?></td>
                                <td><?php echo $p['edad'] ?></td>
                                <td><?php echo $p['email'] ?></td>
                                <td><a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar<?php echo $p['id'] ?>"><i class="bi bi-trash-fill"></i></a></td>
                                <td><a href="RegistrosController.php?id=<?php echo $p['id']?>&accion=editar_registro" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a></td>
                            </tr>

                            <!-- Usando modal para eliminar registro con bootstrap -->
                            <div class="modal" id="eliminar<?php echo $p['id'] ?>">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Eliminar Registro</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <h6>Desea eliminar el registro?</h6>
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                        <a href="RegistrosController.php?id=<?php echo $p['id'] ?>&accion=eliminar_registro" class="btn btn-danger">Eliminar</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            <!-- finalizo codigo del modal-->
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="d-grid">
            <a href="RegistrosController.php?accion=agregar_registro" class="btn btn-primary">Agregar registro</a>
        </div>
    </div>
</center>
        
</body>
</html>