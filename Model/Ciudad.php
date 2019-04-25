<?php
    class Ciudad extends EntidadBase {

        public function __construct() {
            $table = "cities";
            parent::__construct($table);
        }

    }
?>