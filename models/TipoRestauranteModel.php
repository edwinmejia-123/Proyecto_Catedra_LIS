<?php
    class TipoRestaurante{
        private $id_tipo;
        private $tipo;
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

        /* Metodos */

        /* Setter y Getters */
        public function get_id_tipo()
        {
            return $this->id_tipo;
        }

        public function set_id_tipo(int $id_tipo)
        {
            $this->id_tipo = $id_tipo;
        }

        public function get_tipo()
        {
            
        }

        public function set_tipo(string $tipo)
        {
            $this->tipo = $tipo;
        }
    }
    

?>