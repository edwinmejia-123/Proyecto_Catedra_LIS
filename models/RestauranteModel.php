<?php
    require_once("models/ClienteModel.php");
    require_once("models/TipoRestauranteModel.php");
    class Restaurante{
        private $id_restaurante;
        private $nombre_restaurante;
        private $email;
        private $direccion;
        private $descripcion;
        private $cliente;
        private $tipo_restaurante;
        private $confirmar_restaurante;
        private $conectar;
        private $db;
        public $error;
        public $sqlresp;

        /* Constructor */
        public function __construct()
        {
            $this->conectar = new Conectar();
            $this->db=$this->conectar->conexion();
            $this->cliente = new Cliente();
            $this->tipo_restaurante = new TipoRestaurante();
        }

        /* Metodos */

        /* Setters y Getters */
        public function get_id_restaurante()
        {
            return $this->id_restaurante;
        }

        public function set_id_restaurante()
        {
            
        }

        public function get_nombre_restaurante()
        {

        }

        public function set_nombre_restaurante(string $nombre_restaurante)
        {
            $this->nombre_restaurante = $nombre_restaurante;
        }

        public function get_email()
        {
            
        }

        public function set_email(string $email)
        {
            $this->email = $email;
        }

        public function get_direccion()
        {
            
        }

        public function set_direccion(string $direccion)
        {
            $this->direccion = $direccion;
        }

        public function get_descripcion()
        {

        }

        public function set_descripcion(string $descripcion)
        {
            $this->descripcion = $descripcion;
        }

        public function get_cliente()
        {
            return $this->cliente;
        }

        public function set_cliente(Cliente $cliente)
        {
            $this->cliente = $cliente;
        }

        public function get_tipo_restaurante()
        {
            return $this->tipo_restaurante;
        }

        public function set_tipo_restaurante(TipoRestaurante $tipo_restaurante)
        {
            $this->tipo_restaurante = $tipo_restaurante;
        }

        public function get_confirmar_restaurante()
        {

        }

        public function set_confirmar_restaurante(bool $confirmar)
        {
            $this->confirmar_restaurante = $confirmar;
        }
    }
    
?>