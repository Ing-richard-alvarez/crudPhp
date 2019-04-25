<?php
class ClientModel extends ModelBase{

    public function __construct($table){
        $this->table="client";
        parent::__construct($this->table);
    }

}