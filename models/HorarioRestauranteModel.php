<?php
    require_once("models/RestauranteModel.php");
    class HorarioRestaurante
    {
        private $id_horario;
        private $restaurante;
        private $dias;
        private $hora;
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
        public function get_id_horario()
        {

        }

        public function set_id_horario()
        {
            
        }

        //Cambiar a valor de restaurante
        public function get_restaurante()
        {
            return $this->restaurante;;
        }

        //Cambiar a valir de restaurante
        public function set_id_restaurante(Restaurante $restaurante)
        {
            $this->restaurante = $restaurante;
        }
        public function get_dias()
        {

        }

        public function set_dias(string $dias)
        {
            $this->dias = $dias;
        }
        public function get_hora()
        {

        }

        public function set_hora(string $hora)
        {
            $this->hora = $hora;
        }
    }
    
?>