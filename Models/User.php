<?php

    require_once "Base.php";

    class User extends Base
    {
        public function register($first_name, $last_name, $email, $password)
        {
            $first_name = $this -> sql -> real_escape_string($first_name);
            $last_name = $this -> sql -> real_escape_string($last_name);
            $email = $this -> sql -> real_escape_string($email);
            $password = password_hash($password, PASSWORD_BCRYPT);
            $password = $this -> sql -> real_escape_string($password);
            $this -> sql -> query("INSERT INTO users (first_name, last_name, email, password, role) VALUES('$first_name','$last_name','$email', '$password', 'editor')");
        }

        public function login($email, $password)
        {
            $email = $this -> sql -> real_escape_string($email);
            $password = $this -> sql -> real_escape_string($password);
            $result = $this -> sql -> query("SELECT * FROM users WHERE email = '$email'");

            if ($result -> num_rows > 0)
            {
                $user = $result -> fetch_assoc();
                $verified_password = password_verify($password, $user["password"]);
            }
            else
            {
                die ("You have incorrectly entered email or password!");
            }

            if ($verified_password == true)
            {
                if (session_status() === PHP_SESSION_NONE)
                {
                    session_start();
                }

                $_SESSION["user_id"] = $user["id"];
                header("Location: ../index.php");
            }
            else
            {
                die ("You have incorrectly entered email or password!");
            }
        }

        public function admin_check($check_id)
        {
            if (session_status() === PHP_SESSION_NONE)
            {
                session_start();
            }

           
            $check_id = $this -> sql -> real_escape_string($check_id);
            $result = $this -> sql -> query("SELECT * FROM users WHERE id = $check_id");
            $user = $result -> fetch_assoc();

            if ($user["role"] === "admin")
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function all_users()
        {
            $result = $this -> sql -> query("SELECT * FROM users");
            $users = $result -> fetch_all(MYSQLI_ASSOC);
            return $users;
        }

        public function delete_user($id)
        {
            $id = $this -> sql -> real_escape_string($id);
            return $this -> sql -> query("DELETE FROM users WHERE id=$id");
        }

        public function update_to_admin($id)
        {
            $id = $this -> sql -> real_escape_string($id);
            return $this -> sql -> query("UPDATE users SET role='admin' WHERE id=$id");
        }

        public function update_to_editor($id)
        {
            $id = $this -> sql -> real_escape_string($id);
            return $this -> sql -> query("UPDATE users SET role='editor' WHERE id=$id");
        }




        
            
        
    }