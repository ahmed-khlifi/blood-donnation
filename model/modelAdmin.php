<?php

require_once ("model.php");

class ModelAdmin extends Model{

    #attributes
    private $email;
    private $password;

    protected static $table = 'admin';
    protected static $primary = 'email';
    protected static $pass = 'password';

    public function __construct($first_name = null, $last_name = null, $email = null, $password = null){

        if(!is_null($first_name) && !is_null($last_name) && !is_null($email) && !is_null($password)) {
            $this->email = $email;
            $this->password = $password;
        }
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }
}

?>
