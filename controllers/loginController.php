<?php
    require_once("models/UsuarioModel.php");
    require_once("models/ClienteModel.php");
    class Login_Controller{
        
        public function __construct(){
            
        }

        public function index(){
            header('location: index.php');
        }

        public function login(){
            $users = new Usuario();
            $cliente = new Cliente();
            session_start();
            if(!isset($_SESSION['usuario'], $_SESSION['inicio'])){
                if(isset($_POST['user'], $_POST['contra'])){
                    $usuario=$_POST['user'];
                    $contra = $_POST['contra'];
                    $contraseña=hash("sha256", "".$contra."");
                    if($users->Buscar_Usuario($usuario,$contraseña)){
                        $_SESSION['usuario']= $usuario;
                        $_SESSION['inicio']= true;
                        $_SESSION['id_cliente'];
                        //foreach( $users->get_usuarios() as $dato ){
                        $_SESSION['id_cliente']=$users->get_usuarios()['id_cliente'];
                        $cliente->buscar_cliente_id($_SESSION['id_cliente']);
                        $_SESSION['confirmacion'] = $cliente->get_confirmacion();
                        //}
                        if(!isset($_SESSION['id_cliente'])){
                            header('location: registro.php?c=Registro_General');
                        }elseif(!$_SESSION['confirmacion']){
                            header('location: registro.php?c=Validar_Token');
                        }
                        else{
                            header('location: index.php');
                        }
                        
                    }
                
                }
                require_once("views/login/LoginView.php");
            }else{
                if(!isset($_SESSION['id_cliente'])){
                    header('location: registro.php?c=Registro_General');
                }elseif(!isset($_SESSION['confirmacion'])||!$_SESSION['confirmacion']){
                    header('location: registro.php?c=Validar_Token');
                }
                else{
                    header('location: index.php');
                }
            }
            
        }

        public function destroy_session(){
            session_start();
            if(isset($_SESSION['usuario'], $_SESSION['inicio'])){
                unset($_SESSION['usuario'],$_SESSION['inicio'],$_SESSION['id_cliente'],$_SESSION['confirmacion']);
            } 
            header("Location: login.php?c=login");
        }

        public function Registro_General(){
            $cliente = new Cliente();
            $users = new Usuario();
            $controlador = new Login_Controller();
            session_start();
            if(isset($_SESSION['usuario'], $_SESSION['inicio'])){
                if (!isset($_SESSION['id_cliente'])) {
                    if(isset($_POST['nombresUsuario'],$_POST['apellidosUsuario'],$_POST['emailUsuario'],$_POST['telefonoUsuario'])){
                        unset($users->error);
                        unset($cliente->error);
                        //echo$_POST['nombresUsuario'];
                        $cliente->set_nombre($_POST['nombresUsuario']);
                        $cliente->set_apellido($_POST['apellidosUsuario']);
                        $cliente->set_correo($_POST['emailUsuario']);
                        $cliente->set_telefono($_POST['telefonoUsuario']);
                        $nombre=$controlador->Guardar_imagen();
                        $cliente->set_foto($nombre);
                        $cliente->get_rol()->buscar_Rol("Cliente");
                        $cliente->set_confirmacion(false);
                        $cliente->set_token(hash("sha256",rand(0,1000)));//generamos token aleatorio
                        $cliente->set_suspencion(false);
                        if(!isset($users->error,$cliente->error)){
                            if($cliente->insertar_cliente($cliente,$_SESSION['usuario'])){
                                $_SESSION['id_cliente']=$cliente->get_id_cliente();
                                $controlador->Enviar_Correo($cliente->get_correo(),$cliente->get_token());
                                header("Location: registro.php?c=Validar_Token");
                            }
                            
                        }
                        
                        //echo $cliente->get_rol()->get_id_rol();
                        
                        
                        //header('Location:index.php');
                        //pagina de confirmacion
                    }
                    include_once("views/login/RegistroGeneralView.php");
                }else{
                    //verificar si esta confirmada la cuenta o no
                    if($_SESSION['confirmacion']==false){
                        header("Location: registro.php?c=Validar_Token");
                    }
                    header('location: index.php');
                }
            }else{
                header('location: index.php');
            }

            
        }

        public function Guardar_imagen()
        {
            
            $nombre_img = $_SESSION['usuario'];
            $tipo = $_FILES['foto']['type'];
            
            if(isset($nombre_img)){
                if ($tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/jpg") {
                    //directorio en el que se guardara
                    $directorio = $_SERVER['DOCUMENT_ROOT'].'/Proyecto_Catedra_LIS/imagenes/';
                    //le quitamos la palabra image
                    $tipo = str_replace("image/","",$tipo);
                    //echo $directorio.$nombre_img.".".$tipo;
                    move_uploaded_file($_FILES['foto']['tmp_name'],$directorio.$nombre_img.".".$tipo);
                    return $nombre_img.".".$tipo;
                }else{
                    echo "No se puede subir una imagen con ese formato";
                }

            }else{
                echo "Imagen no existe";
            }
        }

        public function Enviar_Correo($email,$token){
            //echo $email;
            $to = $email;
            $subject = 'Verificacion de inicio de sesion';
            $message='
            Gracias por unirte a nuestra familia Restaurant Travel!

            Ingrese el siguiente token para confirmar su cuenta '.$token.'
            ';
            $headers='From: restaurant.travel2022@gmail.com';
            mail($to,$subject,$message,$headers);
            
            
        }

        public function Validar_Token(){
            $cliente = new Cliente();
            session_start();
            if(isset($_SESSION['usuario'], $_SESSION['inicio']) && !$_SESSION['confirmacion']){
                if(isset($_POST['token'])){
                    if($cliente->buscar_token($_SESSION['id_cliente'],$_POST['token'])){
                        $_SESSION['confirmacion']=true;
                        header("Location: index.php");
                    }
                }
                include_once("views/login/Ingreso_token.php");
            }else{
                header('location: index.php');
            }
            
        }

        public function Registrar()
        {
            $usuario= new Usuario();
            session_start();
            if(!isset($_SESSION['usuario'], $_SESSION['inicio'])){echo "hola";
                if(isset($_POST['user'],$_POST['contra'],$_POST['re-contra'])){
                    unset($usuario->error);
                    $usuario->set_nombre_usuario($_POST['user']);
                    $usuario->set_contra($_POST['contra']);
                    $re_contra=$_POST['re-contra'];
                   if($usuario->comparar_contra($usuario,$re_contra)){
                    
                        if(!isset($usuario->error)){
                            if($usuario->Insertar_Usuario($usuario)){
                                header("location: login.php?c=login");
                            }
                        }
                    } 
                }else{
                    require_once("views/login/RegistroUsuarioView.php");
                }
                
            }else{
                header("Location: index.php");
            }
            
        }
    }
?>