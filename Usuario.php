<?php 
    class Usuario{

        private $nombre;
        private $password;
        private $rol;

        public function __construct($nombre, $password, $rol) {
            $this->nombre = $nombre;
            $this->password = $password;
            $this->rol = $rol;
        }

        public function __getRol(){
            return $this->rol;
        }

        public function __getNombre(){
            return $this->nombre;
        }

        public function __getPassword(){
            return $this->password;
        }

    }
?>