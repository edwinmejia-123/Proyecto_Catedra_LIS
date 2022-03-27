<?php
    class Rol_Usuario{
        private $id_rol;
        private $rol;
        private $conectar;
        private $db;
        public $error;
        public $sqlresp;

        public function __construct(){
            $this->conectar = new Conectar();
            $this->db=$this->conectar->conexion();
        }

        public function listar_Roles(){
            
            $consulta = $this->db->query("SELECT * FROM rol_usuario");
            $role= '';
            while($fila = $consulta->fetch_assoc()){
                $role = new Rol_Usuario();
                $role->set_id_rol($fila['id_rol']);
                $role->set_rol($fila['rol']);
            }
            var_dump($role);
        }

        public function buscar_Rol(string $roles){
            
            $consulta = $this->db->query("SELECT * FROM rol_usuario WHERE rol = '$roles'");
            $fila = $consulta->fetch_assoc();
            $this->id_rol = $fila['id_rol'];
            $this->rol=$fila['rol'];
        }

        public function get_id_rol()
        {
            return $this->id_rol;
        }

        public function set_id_rol(int $id)
        {
            
        }

        public function get_rol()
        {
            return $this->rol;
        }

        public function set_rol(string $rol)
        {
            
        }

    }
?>