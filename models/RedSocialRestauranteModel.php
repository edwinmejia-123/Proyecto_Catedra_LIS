<?php
    require_once("models/RestauranteModel.php");
    require_once("models/TipoRedSocial.php");
    class ResSocialRestaurante
    {
        private $id_redes_sociales;
        private $restaurante;
        private $enlace;
        private $tipo_red_social;
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
            $this->tipo_red_social = new TipoRedSocial();
        }

        /* Métodos */

        /* Setters y Getters */
        public function get_id_redes_sociales()
        {

        }

        public function set_id_redes_sociales()
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

        public function get_enlace()
        {

        }

        public function set_enlace(string $enlace)
        {
            $this->enlace = $enlace;
        }

        public function get_tipo_red_social()
        {
            return $this->tipo_red_social;
        }

        public function set_tipo_red_social(TipoRedSocial $tipo_red_social)
        {
            $this->tipo_red_social = $tipo_red_social;
        }
    }
    
?>