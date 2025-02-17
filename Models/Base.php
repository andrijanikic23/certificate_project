<?php

    class Base       
    {
        public $sql;

        public function  __construct()
        {
            $this -> sql = mysqli_connect("localhost", "root", "", "accommodation_rental");
        }
    }