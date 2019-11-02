<?php 

/*
    This is User class

*/


class User 
{ 
    private $id = null;
    private $first_name = "";
    private $last_name = "";
    private $username = "";
    private $contact = "";
    private $email = "";
    private $user_type = "";
    private $password = "";

    // constructor to create new student object
    public function __construct($id, $first_name, $last_name, $username, $contact, $email, $user_type, $password){
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->username = $username;
        $this->contact = $contact;
        $this->email = $email;
        $this->user_type = $user_type;
        $this->password = $password;
    }
    // setter methods
    public function setId($id){
        $this->$id = $id;
      }
    public function setFirst_name($first_name){
        $this->$first_name = $first_name;
    }
    public function setLast_name($last_name){
        $this->$last_name = $last_name;
    }
    public function setUsername($username){
    $this->$username = $username;
    }
    public function setContact($contact){
        $this->$contact = $contact;
    }
    public function setEmail($email){
        // string, email format
        $result = true;
        if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
          $result = false;
        }else {
          $this->email = $email;
        }
        return $result;
      }  
    public function setUser_type($user_type){
        $this->$user_type = $user_type;
    }
    public function setPassword($password){
        $this->$password = $password;
    }

    //getter methods

    public function getId(){
        return $this->id;
    }
    public function getFirst_name(){
        return $this->username;
    }
    public function getLast_name(){
        return $this->username;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getMobile(){
        return $this->mobile;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getUser_type(){
        return $this->type;
    }
    public function getPassword(){
        return $this->password;
    }
    //Function of registration
    public static function registration($mysqli, $first_name, $last_name, $username, $contact, $email, $user_type, $password) 
    {

    //checking if the email already exist
			$sql = "SELECT * FROM users WHERE email='$email'";

			$result = $mysqli->query($sql) or die($mysqli->error);

			$count_row = $result->num_rows;

			

			if($count_row == 0){
                
                $sql = "INSERT INTO users SET first_name= '$first_name', last_name = '$last_name', username = '$username', contact = '$contact', email = '$email', user_type = '$user_type', password = '$password'";

				$result = $mysqli->query($sql) or die($mysqli->error);
				if($result)
				{
					$id = $mysqli->insert_id;
					$user = new User($id, $first_name, $last_name, $username, $contact, $email, $user_type, $password);
		      $result = $user;
				}
				 return $result;


			}
			else{
				$error='0';
            return $error;
        }
}
  //login function
    public static function login($mysqli, $username, $password) 
    {
		$sql = "SELECT * from users WHERE username='$username' and password='$password'";

		$result = $mysqli->query($sql) or die($mysqli->error);
        $user_record = $result->fetch_array(MYSQLI_ASSOC);
		$count_row = $result->num_rows;
        print_r($user_record);

       
		if ($count_row == 1) {
			$user = new user($user_record['id'],$user_record['first_name'],$user_record['last_name'],$user_record['username'],$user_record['contact'],$user_record['email'],$user_record['user_type'],$user_record['password']);
			$result = $user;
            session_start();
            $_SESSION['id'] = $user_record['id'];
            $_SESSION['username'] = $user_record['username'];
            $_SESSION['user_type'] = $user_record['user_type'];
	            return $result;
	        }
    }

    //This function trademan details who bid on job
    public static function view_trademan_contact($mysqli,$trademan_id) 
    {

        $sql = "SELECT * FROM user WHERE (uid = '$trademan_id')";
        $result = $mysqli->query($sql) or die($mysqli->error);
        $trademan_result = $result->fetch_array(MYSQLI_ASSOC);
        $count_row = $result->num_rows;
        
        ?>
        <table class = "table">
        <thead class = "success">
        <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>

        </tr>
        </thead>
        <tbody>
        <?php
     if ($count_row > 0) {
        
    ?>
            
            <div class="container-fluid">
                <tr>
                <td><?= $trademan_result['name']; ?> </td>
                <td><?= $trademan_result['contact']; ?> </td>
                <td><?= $trademan_result['email']; ?> </td>
                
                </tr>
            </div>

        <?php } ?>
        </tbody>
        </table>
        <?php
        return $trademan_result;

    }
}
