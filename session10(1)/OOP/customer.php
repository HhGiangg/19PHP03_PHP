<?php 

	include 'user.php';
	class Customer extends Users {
        public $ship_add;
        public $id_user;
        public function buy(){
            echo "test 1";
        }
        public function history(){
            echo "test 2";
        }
    }
    $user = new Customer();
    $user->register();
    echo "<br>";
    $user->buy();

 ?>