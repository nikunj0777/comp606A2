<?php 


/*
    This is Job class which extends from the Database class.
    So that it can alway get connected with the database.

    There are some function in it:

    1.create_job()
    2.public_view_job()
    3.customer_view_job()
    4.customer_edit_job()
    5.customer_delete_job()
    6.trademan_view_job()
    7.admin_view_job()
    8.admin_delete_job()
*/


class Job
{

    private $user_id = null;
    private $location = "";
    private $job_type = "";
    private $job_category = "";
    private $payrate = "";
    private $start_date = "";
    private $end_date = "";

    // constructor to create new student object
    public function __construct($user_id, $location, $job_type, $job_category, $payrate, $start_date,$end_date){
        $this->user_id = $user_id;
        $this->location = $location;
        $this->job_type = $job_type;
        $this->job_category = $job_category;
        $this->payrate = $payrate;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }
    // setter methods
    public function setUser_id($user_id){
        $this->$id = $id;
      }
    public function setLocation($location){
    $this->$location = $location;
    }
    public function setJob_type($job_type){
        $this->$job_type = $job_type;
    }
    public function setJob_category($job_category){
    $this->$job_category = $job_category;
    }
    public function setPayrate($payrate){
        $this->$payrate = $payrate;
    }
    public function setStart_date($start_date){
    $this->$start_date = $start_date;
    }
    public function setEnd_date($end_date){
        $this->$end_date = $end_date;
    }
    //getter methods

    public function getUser_id(){
        return $this->user_id;
    }
    public function getLocation(){
        return $this->location;
    }
    public function getJob_type(){
        return $this->job_type;
    }
    public function getJob_category(){
        return $this->job_category;
    }
    public function getPayrate(){
        return $this->payrate;
    }
    public function getStart_date(){
        return $this->start_date;
    }
    public function getEnd_date(){
        return $this->end_date;
    }
    //Customer can post job 
    public static function create_job($mysqli, $user_id, $location, $job_type, $job_category, $payrate, $start_date,$end_date) 
    {
      
        $user_id = $_SESSION['id'];
        $sql = "INSERT INTO jobs VALUES ('0', '$user_id', '$location', '$job_type', '$job_category','$payrate', '$start_date', '$end_date','No','0')";
        $result = $mysqli->query($sql) or die($mysqli->error);

        if($result){
			$job_id = $mysqli->insert_id;
			$job = new Job($job_id, $user_id, $location, $job_type, $job_category, $payrate, $start_date,$end_date);
		    $result = $job;
		}
			return $result;
    }

   
    //This function is for everyone can view all the job on home page no need to login
    public static function public_view_job($mysqli) 
    {
        $sql = "SELECT * FROM job";
        $result = $mysqli->query($sql) or die($mysqli->error);
        $public_jobview = $result->fetch_array(MYSQLI_ASSOC);
        /*$result = $this->db->prepare($sql);
        $result->execute();*/
      
        ?>
        <div>
        <table class = "table table-hover table-sm table-light table-striped">
        <thead class="table-success">
        <tr>
        <th>Job ID</th>
        <th>Creater Customer ID</th>
        <th>Location</th>
        <th>Description</th>
        <th>Estimated Total Cost</th>
        <th>Job Start Date</th>
        <th>Job Expire Date</th>
        <th>Any Trademan Interested?</th>
      

        </tr>
        </thead>
        <tbody>
        <?php
     
     foreach ($result as $key => $res){
            
            ?>
            
            <div class="container-fluid">
                
                <tr>
                <td><?= $res['job_id']; ?> </td>
                <td><?= $res['user_id']; ?> </td>
                <td><?= $res['job_location']; ?> </td>
                <td><?= $res['job_description']; ?> </td>
                <td><?= $res['job_price']; ?> </td>
                <td><?= $res['job_start_date']; ?> </td>
                <td><?= $res['job_expire_date']; ?> </td> 
                <td><?= $res['job_status']; ?> </td>
       

                </tr>
            </div>

        <?php
        }?>
        </tbody>
        </table>
        <?php
    }

    //Function to view customer jobs
    public static function customer_view_job($mysqli, $user_id) 
    {
        // $user_id = $_SESSION['uid'];

        $sql = "SELECT * FROM jobs WHERE (user_id = '$user_id')";
        /*$result = $this->db->prepare($sql);
        $result->execute();*/
        $result = $mysqli->query($sql) or die($mysqli->error);
        $customer_jobresult = $result->fetch_array(MYSQLI_ASSOC);
        
        ?>
        
        <table class = "table ">
        <thead class = "table-success">
        <tr>
        <th>Job ID</th>
        <th>Location</th>
        <th>Job Type</th>
        <th>job category</th>
        <th>job payrate</th>
        <th>Job Start Date</th>
        <th>Job Expire Date</th>
        <th>Any Bid</th>
        <!-- <th>Trademan's ID(if someone bid)</th> -->
        <th></th>
        </tr>
        </thead>
        <tbody>
        <?php

       
        //print_r($customer_jobresult);
        //die("m here");
        foreach ($result as $key => $res) 
        {
            ?>
            <div class="container-fluid">
                
                <tr>
                <td><?= $res['id']; ?> </td>
                <td><?= $res['location']; ?> </td>
                <td><?= $res['job_type']; ?> </td>
                <td><?= $res['job_category']; ?> </td>
                <td><?= $res['payrate']; ?> </td>
                <td><?= $res['start_date']; ?> </td> 
                <td><?= $res['end_date']; ?> </td> 
                <td><a href="view_bid.php?job_id=<?php echo $res['id']?>&job_category=<?php echo $res['job_category']?>&job_status=<?php echo $res['job_status']?>"><?= $res['job_status']; ?> </td>
                <td><a href="customer_edit_job.php?job_id=<?php echo $res['id']?>&user_id=<?php echo $res['user_id']?>&location=<?php echo $res['location']?>&job_category=<?php echo $res['job_category']?>&job_type=<?php echo $res['job_type']?>&payrate=<?php echo $res['payrate']?>&start_date=<?php echo $res['start_date']?>&end_date=<?php echo $res['end_date']?>">Edit</a> 
                |<a href="form_action_files/customer_delete.php?job_id=<?php echo $res['id']?>" onClick="return confirm('Are you sure?')">Delete</a></td>	

                </tr>
            </div>

        <?php

                   
        }?>
        </tbody>
        </table>
        
        <?php
            if(isset($res))
            {
                // $_SESSION['job_id'] = $res['job_id'];
                $_SESSION['trademan_id'] = $res['trademan_id'];
            
            }
    }

    //This function is for login customer to edit his/her posted jobs
    public static function customer_edit_job($mysqli, $job_id, $location, $job_type, $job_category, $payrate, $start_date, $end_date) 
    {


        $sql = "UPDATE jobs SET location = '$location', job_type = '$job_type', job_category = '$job_category', payrate = '$payrate', start_date = '$start_date', end_date = '$end_date' WHERE id = '$job_id'";
        $result = $mysqli->query($sql) or die($mysqli->error);
        if($result){
            return $result;
        }
        
    }

    //This function is for delete  posted jobs
    public static function customer_delete_job($mysqli, $job_id) 
    {
        // session_start();
        $sql = "DELETE FROM jobs WHERE id = $job_id";
        $result = $mysqli->query($sql) or die($mysqli->error);
       
        

    }

    //This function is for login trademan to view all posted jobs 
    //Plus he/she can bid the job!
    public static function trademan_view_job($mysqli, $user_id) 
    {
       

        $sql = "SELECT * FROM jobs";
        $result = $mysqli->query($sql) or die($mysqli->error);
        $trademan_jobview = $result->fetch_array(MYSQLI_ASSOC);
        
        ?>
        <table class = "table table-hover table-sm table-light table-striped">
        <thead class = "table-success">
        <tr>
        <th>Job ID</th>
        <th>Customer ID</th>
        <th>Location</th>
        <th>Job Type</th>
        <th>Job category</th>
        <th>Job Payrate</th>
        <th>Job Start Date</th>
        <th>Job Expire Date</th>
        <th>Any Trademan Interested?</th>
        <th>Give a Bid</th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach ($result as $key => $res) 
        {    
            ?> 
            <div class="container-fluid">
                <tr>
                <td><?= $res['id']; ?> </td>
                <td><?= $res['user_id']; ?> </td>
                <td><?= $res['location']; ?> </td>
                <td><?= $res['job_type']; ?> </td>
                <td><?= $res['job_category']; ?> </td>
                <td><?= $res['payrate']; ?> </td>
                <td><?= $res['start_date']; ?> </td>
                <td><?= $res['end_date']; ?> </td> 
                <td><?= $res['job_status']; ?> </td>



            <?php
            //first check if the trademan bid or not
            $sql1 = "SELECT * FROM estimate WHERE trademan_id= $user_id";
            $result1 = $mysqli->query($sql) or die($mysqli->error);
            $res1 = $result1->fetch_array(MYSQLI_ASSOC);
            
            // button disabled
            if($res1['trademan_id'] == $user_id && $res['job_status'] == 'Got bid' && $res1['job_id']== $res['job_id'] )
            {?>
                <td><a href="bid.php?job_id=<?php echo $res['id']?>&job_status=<?php echo $res['job_status']?>"><button disabled class="btn btn-outline-primary">Already Bid</button></td></a>
            <?php
            }else{ // button OK
            ?>
                <td><a href="bid.php?job_id=<?php echo $res['id']?>&job_status=<?php echo $res['job_status']?>"><button class="btn btn-outline-primary">Bid</button></td></a>
              
                </tr>
            </div>

            <?php
            }
        }?>
        </tbody>
        </table>
        <?php
                if(isset($res))
                {
                    // $_SESSION['job_id'] = $res['job_id'];
                    $_SESSION['user_id'] = $res['user_id'];
                
                }
 
    }



}
