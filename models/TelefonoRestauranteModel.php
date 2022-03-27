<?php
    require_once("models/RestauranteModel.php");
    class TelefonoRestaurante
    {
        private $id_telefono;
        private $restaurante;
        private $telefono;
        private $extension;
        private $conectar;
        private $db;
        public $error;
        public $sqlresp;

        /* Constructor */
        public function __construct()
        {
            $this->conectar = new Conectar();
            $this->db=$this->conectar->conexion();
            $this->restaurante = new Restaurante();
        }

        /* Métodos */

        /* Setters y Getters */
        public function get_id_telefono()
        {

        }

        public function set_id_telefono()
        {
            
        }

        public function get_restaurante()
        {
            return $this->restaurante;
        }

        public function set_restaurante(Restaurante $restaurante)
        {
            $this->restaurante = $restaurante;
        }

        public function get_telefono()
        {

        }

        public function set_telefono(string $telefono)
        {
            $this->telefono = $telefono;
        }

        public function get_extension()
        {

        }

        public function set_extension(string $extension)
        {
            $this->extension = $extension;
        }
    }
    
?>