<?php
    require_once("models/RestauranteModel.php");
    class FotoRestaurante
    {
        private $id_foto;
        private $restaurante;
        private $foto;
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
        public function get_id_foto()
        {

        }

        public function set_id_foto()
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

        public function get_foto()
        {

        }

        public function set_foto(string $foto)
        {
            $this->foto = $foto;
        }
    }
    
?>