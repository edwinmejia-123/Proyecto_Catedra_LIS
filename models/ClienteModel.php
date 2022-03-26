<?php
    require_once("models/RolModel.php");
    require_once("models/UsuarioModel.php");
    class Cliente{
        private $id_cliente;
        private $nombre;
        private $apellido;
        private $correo;
        private $telefono;
        private $foto;
        private $id_role;
        private $rol;
        private $confirmacion;
        private $token;
        private $suspencion;
        private $conectar;
        private $db;
        public $error;
        public $sqlresp;

        public function __construct(){
            $this->conectar = new Conectar();
            $this->db=$this->conectar->conexion();
            $this->rol = new Rol_Usuario();
        }

        public function insertar_cliente(Cliente $cliente, $usuario){
            //$this->rol->buscar_Rol("Cliente");
            $id_rol = $cliente->rol->get_id_rol();
            $sql = "INSERT INTO cliente ( nombre, apellido, correo, telefono, foto, id_rol, confirmacion, token, suspencion) VALUES ('$cliente->nombre','$cliente->apellido','$cliente->correo','$cliente->telefono','$cliente->foto','$id_rol','$cliente->confirmacion','$cliente->token','$cliente->suspencion')";
            $consulta = $this->db->query($sql);
            
            
            if (!$consulta) {
                $this->error = "Error: No se ingresaron los datos.";
                return false;
            } else {
                $cliente->buscar_cliente($cliente->correo);
                $sql = "UPDATE usuario SET id_cliente='$cliente->id_cliente' WHERE nombre_usuario='$usuario'";
                $consulta = $this->db->query($sql);
                $this->sqlresp = "Se insertaron los datos del usuario    correctamente";
                return true;
            } 
        }

        public function buscar_cliente(string $correo){
            $consulta = $this->db->query("SELECT * FROM cliente WHERE correo = '$correo'");
            $fila = $consulta->fetch_assoc();
            $this->id_cliente = $fila['id_cliente'];
        }

        public function buscar_token(int $id_cliente, string $token){
            $consulta = $this->db->query("SELECT * FROM cliente WHERE id_cliente = '$id_cliente' && token='$token'");
            $fila = $consulta->fetch_assoc();
            if(isset($fila)){
                $sql = "UPDATE Cliente SET confirmacion=true";
                $consulta = $this->db->query($sql);
                return true;

            }else{
                return false;
            }
        }

        public function buscar_cliente_id( $id)
        {
            $consulta = $this->db->query("SELECT * FROM cliente WHERE id_cliente = '$id'");
            $fila = $consulta->fetch_assoc();
            $this->confirmacion = $fila['confirmacion'];
        }



        public function get_id_cliente()
        {
            return $this->id_cliente;
        }

        public function set_id_cliente(int $id)
        {
            
        }

        public function get_nombre()
        {
            
        }

        public function set_nombre(string $nombre)
        {
            $this->nombre = $nombre;
        }

        public function get_apellido()
        {
            
        }

        public function set_apellido(string $apellido)
        {
            $this->apellido = $apellido;
        }

        public function get_correo()
        {
            return $this->correo;
        }

        public function set_correo(string $correo)
        {
            $this->correo = $correo;
        }

        public function get_telefono()
        {
            
        }

        public function set_telefono(string $telefono)
        {
            $this->telefono = $telefono;
        }


        public function get_foto()
        {
            
        }

        public function set_foto(string $foto)
        {
            $this->foto = $foto;
        }

        public function get_confirmacion()
        {
            return $this->confirmacion;
        }

        public function set_confirmacion(bool $confirmacion)
        {
            $this->confirmacion=$confirmacion;
        }

        public function get_token()
        {
            return $this->token;
        }

        public function set_token(string $token)
        {
            $this->token=$token;
        }

        public function get_suspencion()
        {
            
        }

        public function set_suspencion(bool $suspencion)
        {
            $this->suspencion=$suspencion;
        }

        public function get_rol()
        {
            return $this->rol;
        }

        public function set_rol(Rol_Usuario $rol)
        {
            $this->rol = $rol;
        }

    }

?>