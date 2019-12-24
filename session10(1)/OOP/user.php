<?php 

	/**
	 * 
	 */
	class Users
	{
		
        public $username;
        public $email;
        public $password;
        public $phone;
        public $address;
		
		private function add(){
            echo "Add";
        }
        public function edit(){
            echo "Edit ";
        }
        public function register(){
            echo "Register ";
        }
        public function login(){
            echo " login";
        }
        public function view(){
            echo "View ";
        }
        private function list(){
            echo "List";
        }
	}

 ?>