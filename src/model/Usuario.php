<?php
    class Usuario extends Model{
        protected $table = 'usuarios';

        public $id;
        public $nome;
        public $email;
        public $senha;
    }
?>