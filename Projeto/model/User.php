<?php

    class User{

        private $username;
        private $password;

        function __construct($username, $password = null){
            $this->username = $username;
            $this->password = $password;
        }

        public function getUsername(){
            return $this->username;
        }

        public function setUsername($username){
            $this->username = $username;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setPassword($password){
            $this->password = $password;
        }
    }