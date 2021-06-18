<?php
require_once "Conexion.php";
session_start();

class LoginModel
{

    private static $SELECT_USERS = "SELECT * FROM administrador WHERE user = ? and password = ?";

    public static function validarUsuarios($usu, $contra)
    {
        try {

            $conexion = new Conexion();
            $conn = $conexion->getConexion();

            $pst = $conn->prepare(self::$SELECT_USERS);

            $pst->execute([$usu, $contra]);

            $datosUsuario = $pst->fetch();

            // Verificar si no existe el usuario en la tabla administrador
            if (!$datosUsuario) {
                return "Usuario o contraseña incorrectos";
            }

            // Verificamos el tipo de usuario Administrador
            if ($tipoUsuario['user'] == "Administrador") {
                // Se inicia la sesión
                $_SESSION['user'] = $datosUsuario['user'];
                

              //Verificamos el tipo de usuario Empleado
            }else if ($tipoUsuario['user'] == "Empleado") {
                
                // Se inicia la sesión
                $_SESSION['user'] = $datosUsuario['user'];                
            } 
            return "OK";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
