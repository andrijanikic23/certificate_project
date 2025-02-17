<?php

    require_once "Base.php";

    class Advertsement extends Base
    {
        public function new_ad($name, $category, $price_per_night, $location, $image, $size)
        {
            $name = $this -> sql -> real_escape_string($name);
            $category = $this -> sql -> real_escape_string($category);
            $price_per_night = $this -> sql -> real_escape_string($price_per_night);
            $location = $this -> sql -> real_escape_string($location);
            $image = $this -> sql -> real_escape_string($image);
            $size = $this -> sql -> real_escape_string($size);
            
            $result_category = $this -> sql -> query("SELECT * FROM categories WHERE name = '$category'");
            $selected_category = $result_category -> fetch_assoc();
            $category_id = $selected_category["id"];
            $this -> sql -> query("INSERT INTO accommodations(name, category_id, price_per_night, location, image, accommodation_size) VALUES('$name', $category_id, $price_per_night, '$location', '$image', $size)");



        }

        public function current_id($name)
        {
            
            $result_by_name = $this -> sql -> query("SELECT * FROM accommodations WHERE name = '$name'");
            $extracted_by_name = $result_by_name -> fetch_all(MYSQLI_ASSOC);
            $max_id = max(array_column($extracted_by_name, "id"));
            //Proveriti ovu funkciju, napisati u svesku
            return $max_id;
        }

        public function wi_fi($wi_fi, $needed_id)
        {
            
                $wi_fi = $this -> sql -> real_escape_string($wi_fi);
                $wi_fi_id = 1;
                return $this -> sql -> query("INSERT INTO accommodation_tags(accommodation_id, tag_id) VALUES($needed_id, $wi_fi_id)");

        }

        public function parking($parking, $needed_id)
        {
    
            
                $parking = $this -> sql -> real_escape_string($parking);
                $parking_id = 2;
                return $this -> sql -> query("INSERT INTO accommodation_tags(accommodation_id, tag_id) VALUES($needed_id, $parking_id)");
        }

        public function pet_friendly($pet_friendly, $needed_id)
        {
                $pet_friendly = $this -> sql -> real_escape_string($pet_friendly);
                $pet_friendly_id = 3;
                return $this -> sql -> query("INSERT INTO accommodation_tags(accommodation_id, tag_id) VALUES($needed_id, $pet_friendly_id)");
            
        }

        public function delete_ad($id)
        {
            $id = $this -> sql -> real_escape_string($id);
            return $this -> sql -> query("DELETE FROM accommodations WHERE id=$id");
        }

    }
    