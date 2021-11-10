<?php

require_once ("model.php");

class ModelDemande extends Model{

    #attributes
    private $email;
    private $cin;
    private $tel;
    private $type;

    protected static $table = 'demande';
    protected static $primary = 'cin';

    public function __construct($email = null, $cin = null, $tel = null,
    $type = null){

        if(!is_null($email) && !is_null($cin) && !is_null($tel) &&
        !is_null($type)) {

            $this->email = $email;
            $this->cin = $cin;
            $this->tel = $tel;
            $this->type = $type;

        }
    }

    #getters

    public function getEmail() {
        return $this->email;
    }

    public function getCin() {
        return $this->cin;
    }

    public function getTel() {
        return $this->tel;
    }

    public function getType() {
        return $this->type;
    }


}

?>
