<?php
include_once("../Model/Registros.php");
//hereda metodos y propiedades del modelo registros
class registrosController extends registros{

    //manda a la vista del crud
    public function MostrarTable(){
        $pedidos = $this->ListarUsuarios();
        include_once "../View/header.php";
        include_once "../View/crud-table.php";
    }

    //manda a la vista de añadir registros
    public function VistaAgregar(){
        include_once "../View/header.php";
        include_once "../View/Formregistro.php";
    }

    //manda a la vista editar registros
    public function VistaEditar($id){
        $this->id = $id;

        $editar = $this->ModificarUsuariosId();
        include_once "../View/header.php";
        include_once "../View/Editarregistro.php";
    }

    //redirige a la vista del crud luego de realizar una accion
    public function RedirectRegistros(){
        header("location: RegistrosController.php?accion=crudtable");
    } 


    public function AgregarRegistro($nombre, $apellido, $edad, $email){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->email = $email;
        $this->RegistrarUsuarios();
        $this->RedirectRegistros();
    }

    public function EditarRegistro($id, $nombre, $apellido, $edad, $email){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->email = $email;
        $this->ActualizarUsuarios();
        $this->RedirectRegistros();
    }

    public function EliminarRegistro($id){
        $this->id = $id;
        $this->EliminarUsuariosId();
        $this->RedirectRegistros();
    }

    

}

//toma la accion obtenida de get y los datos enviados por post

if(isset($_GET['accion']) && $_GET['accion'] == 'registro'){
    $ic = new registrosController();
    $ic->AgregarRegistro($_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['email']);
}

if(isset($_GET['accion']) && $_GET['accion'] == 'crudtable'){
    $ic = new registrosController();
    $ic->MostrarTable();
}

if(isset($_GET['accion']) && $_GET['accion'] == 'agregar_registro'){
    $ic = new registrosController();
    $ic->VistaAgregar();
}

if (isset($_GET['accion']) && $_GET['accion'] == 'editar_registro') {
    $ic = new registrosController();
    $id = $_GET['id'];
    $ic->VistaEditar($id);
}

if(isset($_GET['accion']) && $_GET['accion'] == 'editar'){
    $ic = new registrosController();
    $ic->EditarRegistro($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['email']);
}

if (isset($_GET['accion']) && $_GET['accion'] == 'eliminar_registro') {
    $ic = new registrosController();
    $id = $_GET['id'];
    $ic->EliminarRegistro($id);
}



?>