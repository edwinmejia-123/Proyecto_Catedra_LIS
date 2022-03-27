<?php
    class Usuario{
        private $id_usuario;
        private $nombre_usuario;
        private $contra;
        private $id_cliente;
        private $Cliente;
        private $conectar;
        private $db;
        private $usuarios;
        public $error;
        public $sqlresp;
        


        public function __construct(){
          $this->conectar = new Conectar();
          $this->db=$this->conectar->conexion();
          $this->usuarios=array();
          $this->error = array();
        }

        public function Buscar_Usuario($nombre, $password){
            
            $consulta = $this->db->query("SELECT * FROM usuario WHERE nombre_usuario='$nombre' && contra='$password'");$this->usuarios=$consulta->fetch_assoc();
            if(isset($this->usuarios)){
                return true;
            }
            return false;
        }
        
        public function Buscar_Usuario_id($id){
            
            $consulta = $this->db->query("SELECT * FROM usuario WHERE id_cliente='$id'");
            $this->usuarios=$consulta->fetch_assoc();
            if(isset($this->usuarios)){
                return true;
            }
            return false;
        }

        public function Insertar_Usuario(Usuario $user){
            $sql = "INSERT INTO usuario (nombre_usuario,contra) VALUES ('$user->nombre_usuario','$user->contra')";
            $consulta = $this->db->query($sql);
            if (!$consulta) {
                $this->error = "Error: No se ingresaron los datos.";
                return false;
            } else {
                
                $this->sqlresp = "Se insertaron los datos del usuario    correctamente";
                return true;
            } 
        }

        public function comparar_contra(Usuario $user, string $contra){
            
            if ($user->contra == hash("sha256",$contra)) {
                return true;
            }
            return false;
        }

        public function editar_contra($id)
        {
            $sql = "UPDATE usuario SET contra='$this->contra' WHERE id_cliente='$id'";
            if($consulta = $this->db->query($sql)){
                return true;
            }
            return false;
            
        }

        public function get_usuarios(){
            return $this->usuarios;
        }

        public function get_id_usuario(int $id)
        {
            return $this->id_usuario;
        }

        public function set_id_usuario(int $id)
        {
            $this->id_usuario = $id;
        }

        public function get_nombre_usuario()
        {
            return $this->nombre_usuario;
        }

        public function set_nombre_usuario(string $nombre)
        {
            $this->nombre_usuario = $nombre;
        }

        public function get_contra()
        {
            return $this->contra;
        }

        public function set_contra(string $contra)
        {
            $this->contra =hash("sha256",$contra) ;
        }

        public function get_id_cliente()
        {
            return $this->id_cliente;
        }

        public function set_id_cliente(int $id)
        {
            $this->id_cliente = $id;
        }


    }
?>