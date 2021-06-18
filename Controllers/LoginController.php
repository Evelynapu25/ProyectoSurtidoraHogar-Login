<?php

    require_once "../Models/LoginModel.php";

    if( isset($_POST['ingresar'])){

        if(
            preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ_., ]+$/', $_POST['usu']) &&
            preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ_., ]+$/', $_POST['contra'])
        ){
            $respuesta = LoginModel::validarUsuarios($_POST['usu'], $_POST['contra']);
            
            echo json_encode(['respuesta'=>$respuesta]);
        }else{
            echo json_encode(['respuesta'=>'Caracteres no admitidos']);
        }
        
    }