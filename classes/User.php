<?php 
/*
   in this file we are going to insert delete update the user records

*/


class User extends Database
{
    //user registration
    public function register($first_name, $last_name, $username, $mobile, $email, $user_type, $password) 
    {

        $sql = "INSERT INTO users VALUES ('0', '$first_name', '$last_name', '$username', '$mobile', '$email', '$user_type', '$password')";
        $result = $this->db->prepare($sql);

        if(!$result) die ("Not correct sql");
        else
        {
            $result->execute();
            return $result;
        }

    }

    //user login
    public function login($username, $password) 
    {

        $sql = "SELECT * FROM users WHERE (username = '$username' AND password = '$password')";
        $result = $this->db->prepare($sql);
        $result->execute();
        $outcome = $result->fetch(PDO::FETCH_ASSOC);
        if($result)
        {
           session_start();

            $_SESSION['user_id'] = $outcome ['user_id'];
            $_SESSION['username'] = $outcome ['username'];
            $_SESSION['user_type'] = $outcome ['user_type'];     
            
            return true;
           
        }else
        echo "send it into another page";
        die ("Not correct sql");

    }

    


}
