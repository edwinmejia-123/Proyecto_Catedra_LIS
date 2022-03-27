<?php
    class TipoRedSocial
    {
        private $id_tipo;
        private $nombre_tipo;
        private $nombre_dominio;
        private $conectar;
        private $db;
        public $error;
        public $sqlresp;

        /* Constructor */
        public function __construct()
        {
            $this->conectar = new Conectar();
            $this->db=$this->conectar->conexion();
        }

        /* Métodos */

        /* Setters y Getters */
        public function get_id_tipo()
        {
            return $this->id_tipo;
        }

        public function set_id_tipo()
        {
            
        }

        public function get_nombre_tipo()
        {
            
        }

        public function set_nombre_tipo(string $nombre_tipo)
        {
            $this->nombre_tipo = $nombre_tipo;
        }

        public function get_nombre_dominio()
        {

        }

        public function set_nombre_dominio(string $nombre_dominio)
        {
            $this->nombre_dominio = $nombre_dominio;
        }
    }
    
?>