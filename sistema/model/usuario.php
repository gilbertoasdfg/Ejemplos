<?php

  require_once('conexion.php');


  class Usuario extends Conexion
  {

    public function login($user, $clave)
    {
       parent::conectar();

      $user  = parent::salvar($user);
      $clave = parent::salvar($clave);

      $consulta = 'SELECT id_login, nombre_usuario, cargo FROM login WHERE usuario="'.$user.'" and password= MD5("'.$clave.'")';
      
      $verificar_usuario = parent::verificarRegistros($consulta);

      if($verificar_usuario > 0){

        $user = parent::consultaArreglo($consulta);
        
        session_start();

        $_SESSION['id_login']     = $user['id_login'];
        $_SESSION['nombre_usuario'] = $user['nombre_usuario'];
        $_SESSION['cargo']  = $user['cargo'];

        if($_SESSION['cargo'] == 1){
          echo 'view/admin/index.php';
        }else if($_SESSION['cargo'] == 2){
          echo 'view/user/index.php';
        }

      }else{
        echo 'error_3';
      }

      parent::cerrar();
    }

    public function registroUsuario($name, $usuario, $clave)
    {
      parent::conectar();

      $name  = parent::filtrar($name);
      $usuario = parent::filtrar($usuario);
      $clave = parent::filtrar($clave);

      $verificarCorreo = parent::verificarRegistros('SELECT id_login FROM login WHERE usuario="'.$usuario.'" ');

      if($verificarCorreo > 0){
        echo 'error_3';
      }else{

        parent::query('INSERT INTO login(nombre_usuario, usuario, password, cargo) VALUES("'.$name.'", "'.$usuario.'", MD5("'.$clave.'"), 1)');

        session_start();

        $_SESSION['nombre_usuario'] = $name;
        $_SESSION['cargo']  = 2;

        echo 'view/admin/index.php';

      }

      parent::cerrar();
    }

  }


?>
