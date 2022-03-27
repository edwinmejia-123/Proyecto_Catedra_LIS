<?php
    require_once("models/ClienteModel.php");
    require_once("models/RestauranteModel.php");
    class Comentarios
    {
        private $id_comentario;
        private $cliente;
        private $restaurante;
        private $comentarios;
        private $puntaje;
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
            $this->restaurante = new Restaurante();
        }

        /* Métodos */

        /* Setters y Getters */
        public function get_id_comentario()
        {

        }

        public function set_id_comentario()
        {
            
        }

        public function get_cliente()
        {
            return $this->cliente;
        }

        public function set_cliente(Cliente $cliente)
        {
            $this->cliente = $cliente;
        }

        public function get_restaurante()
        {
            return $this->restaurante;
        }

        public function set_restaurante(Restaurante $restaurante)
        {
            $this->restaurante = $restaurante;
        }

        public function get_comentarios()
        {

        }

        public function set_comentarios(string $comentarios)
        {
            $this->comentarios = $comentarios;
        }

        public function get_puntaje()
        {

        }

        public function set_puntaje(int $puntaje)
        {
            $this->puntaje = $puntaje;
        }
    }
    
?>