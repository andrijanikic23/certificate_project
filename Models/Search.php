<?php

    require_once "Base.php";

    class Search extends Base
    {

        public function output($text)
        {
            $text = $this -> sql -> real_escape_string($text);
            $result = $this -> sql -> query("SELECT * FROM accommodations WHERE name LIKE '%$text%'");
            if ($result -> num_rows > 0)
            {
                echo ("We found these results");
                $matches = $result -> fetch_all(MYSQLI_ASSOC);
                return $matches;
            }
            else
            {
                die ("No matches");
            }
        }

    }