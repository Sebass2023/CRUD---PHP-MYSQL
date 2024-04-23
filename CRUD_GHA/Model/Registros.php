<?php
include_once("Conexion.php");
class registros extends conexiondb{


    //mostrar datos de registro
    public function ListarUsuarios(){
        $db = $this->conndb();
        $consulta = "SELECT * FROM registros";
        $registro = mysqli_query($db, $consulta);

        $i = 0;

		while ($fila = $registro->fetch_assoc()) {
			$retorno[$i] = $fila;
			$i++;
		}

		return $retorno;
	
	}

    //añadir usuarios a la db
    public function RegistrarUsuarios(){
        try {
            $db = $this->conndb();
            $consulta = "INSERT INTO registros (nombre, apellido, edad, email) VALUES ('$this->nombre','$this->apellido','$this->edad','$this->email')";
            $registro = mysqli_query($db, $consulta);

        } catch (Exception $tr) {
            echo ("error: ". $tr);
        }
        
    }

    //editar los registros
    public function ModificarUsuariosId(){
        $db = $this->conndb();
        $consulta = "SELECT * FROM registros WHERE id = '$this->id'";
        $registro = mysqli_query($db, $consulta);
        $i = 0;

		while ($fila = $registro->fetch_assoc()) {
			$retorno[$i] = $fila;
			$i++;
		}

		return $retorno;
	}

    public function EliminarUsuariosId(){
        try {
            $db = $this->conndb();
            $consulta = "DELETE FROM registros WHERE id = '$this->id'";
            $registro = mysqli_query($db, $consulta);

        } catch (Exception $tr) {
            echo ("error: ". $tr);
        }
        
	}

    public function ActualizarUsuarios(){
        try {
            $db = $this->conndb();
            $consulta = "UPDATE registros SET nombre = '$this->nombre', apellido = '$this->apellido', edad = '$this->edad', email = '$this->email' WHERE id = '$this->id'";
            $registro = mysqli_query($db, $consulta);

        } catch (Exception $tr) {
            echo ("error: ". $tr);
        }
    }

        
}

?>