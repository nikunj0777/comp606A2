<?php 
class Estimate
{
    private $id = null;
    private $job_id = "";
    private $material_cost = "";
    private $labor_cost = "";
    private $total_cost = "";
    private $starting_date = "";
    private $expiring_date = "";

    // constructor to create new estimate object
    public function __construct($id, $job_id, $material_cost, $labor_cost, $total_cost, $starting_date, $expiring_date){
        $this->id = $id;
        $this->job_id = $job_id;
        $this->material_cost = $material_cost;
        $this->labor_cost = $labor_cost;
        $this->total_cost = $total_cost;
        $this->starting_date = $starting_date;
        $this->expiring_date = $expiring_date;
    }
    // setter methods
    public function setId($id){
        $this->$id = $id;
      }
    public function setJob_id($job_id){
        $this->$job_id = $job_id;
      }
    public function setMaterial_cost($material_cost){
    $this->$material_cost = $material_cost;
    }
    public function setLabor_cost($labor_cost){
        $this->$labor_cost = $labor_cost;
    }
    public function setTotal_cost($total_cost){
    $this->$total_cost = $total_cost;
    }
    public function setStarting_date($starting_date){
        $this->$starting_date = $starting_date;
    }
    public function setExpiring_date($expiring_date){
    $this->$expiring_date = $expiring_date;
    }

    //getter methods
    public function getId(){
        return $this->id;
    }
    public function getJob_id(){
        return $this->job_id;
    }
    public function getMaterial_cost(){
        return $this->material_cost;
    }
    public function getLabor_cost(){
        return $this->labor_cost;
    }
    public function getTotal_cost(){
        return $this->total_cost;
    }
    public function getStarting_date(){
        return $this->starting_date;
    }
    public function getExpiring_date(){
        return $this->expiring_date;
    }

    public static function create_estimate($mysqli, $job_id, $trademan_id, $material_cost, $labor_cost, $total_cost, $starting_date, $expiring_date) 
    {
        $sql2 = "SELECT count(*) FROM `estimate` WHERE `job_id` =$job_id";
        $result2 = $mysqli->query($sql2) or die($mysqli->error);
        $estimate_count = $result2->fetch_array(MYSQLI_ASSOC);
       
        if($result2)
        {
            $sql1 = "UPDATE jobs SET `job_status`= 'Yes', `trademan_id`= $trademan_id WHERE `id`= $job_id";
            $result1 = $mysqli->query($sql1) or die($mysqli->error);
           
        }

        $sql = "INSERT INTO estimate VALUES ('0', '$job_id', '$trademan_id', '$material_cost', '$labor_cost', '$total_cost', '$starting_date', '$expiring_date', 'Pending')";
        $result1 = $mysqli->query($sql) or die($mysqli->error);
        
    }

    public static function trademan_view_estimate($mysqli, $uid)
    {
        $id = $_SESSION['id'];
        $username = $_SESSION['username'];

        $sql = "SELECT * FROM estimate WHERE `trademan_id`= $uid";
        $result =  $mysqli->query($sql) or die($mysqli->error);
      
        ?>
        <table class = "table table-hover table-sm table-light table-striped">
        <thead class="table-success">
        <tr>
        <th>Job ID</th>
        <th>trademan ID(Your ID)</th>
        <th>Material Cost</th>
        <th>Labor Cost</th>
        <th>Total Cost</th>
        <th>Job Start Date</th>
        <th>Job Expire Date</th>
        <th>Confirmation</th>
        <th></th>

        <!-- <th>Contact</th> -->

        </tr>
        </thead>
        <tbody>
        <?php
     
        foreach ($result as $key => $res) 
        {
            
            ?>
            
            <div class="container-fluid">
                
                <tr>
                <td><?= $res['job_id']; ?> </td>
                <td><?= $res['trademan_id']; ?> </td>
                <td><?= $res['material_cost']; ?> </td>
                <td><?= $res['labor_cost']; ?> </td>
                <td><?= $res['total_cost']; ?> </td>
                <td><?= $res['starting_date']; ?> </td>
                <td><?= $res['expiring_date']; ?> </td> 
                <td><?= $res['confirm'];?> </td>
                <td><a href="form_action_files/estimate_delete.php?id=<?php echo $res["id"];?>&job_id=<?php echo $res["job_id"];?>" onClick="return confirm('Are you sure?')">Delete</a></td>
                </tr>
            </div>

        <?php
        
        }?>
        </tbody>
        </table>
        <?php
        return $result;
    }

    public static function trademan_delete_bid($mysqli, $estimate_id, $job_id)
    {
        //delete the bid 
        $sql = "DELETE FROM `estimate` WHERE `estimate`.`id` = $estimate_id";
        $result = $mysqli->query($sql) or die($mysqli->error);

        $sql2 = "SELECT count(*) FROM `estimate` WHERE `job_id` =$job_id";
        $result2 = $mysqli->query($sql2) or die($mysqli->error);
        
        $rows = $result2->fetch_array(MYSQLI_ASSOC);
        //print_r($rows);
        $row = $rows[0];

        if($row == 0)
        {
            $sql1 = "UPDATE jobs SET `job_status`= 'No', `trademan_id`= 0 WHERE `id`= $job_id";
            $result1 = $mysqli->query($sql1) or die($mysqli->error);
           
        
        }

 

    }

    public static function customer_view_estimate($mysqli, $job_id)
    {
        $id = $_SESSION['id'];
        $username = $_SESSION['username'];
    
        $sql = "SELECT * FROM estimate WHERE `job_id`= $job_id";
        $result = $mysqli->query($sql) or die($mysqli->error);
        
        ?>
        <table class = "table table-hover table-sm table-light table-striped">
        <thead class="table-success">
        <tr>
        <th>Job ID</th>
        <th>trademan ID</th>
        <th>Material Cost</th>
        <th>Labor Cost</th>
        <th>Total Cost</th>
        <th>Job Start Date</th>
        <th>Job End Date</th>
        <th>Confirmation</th>

        </tr>
        </thead>
        <tbody>
        <?php

        $sql2 = "SELECT count(*) FROM `estimate` WHERE `job_id` =$job_id";
        $result2 = $mysqli->query($sql2) or die($mysqli->error);
        $rows = $result2->fetch_array(MYSQLI_ASSOC);
        //$row = $rows[0];
        
        foreach ($result as $key => $res){     ?>
            
            <div class="container-fluid">     
                <tr>
                <td><?= $res['job_id']; ?> </td>
                <td><a href="trademan_contact.php?trademan_id=<?php echo $res['trademan_id']?>"><?= $res['trademan_id']; ?></a></td>
                <td><?= $res['material_cost']; ?> </td>
                <td><?= $res['labor_cost']; ?> </td>
                <td><?= $res['total_cost']; ?> </td>
                <td><?= $res['starting_date']; ?> </td>
                <td><?= $res['expiring_date']; ?> </td> 
                <td><?= $res['confirm'];?></td>
                </tr>
            </div>
                

            <?php } ?>
        </tbody>
        </table>
        <?php

            

    }





    public static function customer_confrim($mysqli, $job_id, $trademan_id)
    {
        $sql = "UPDATE estimate SET `confirm`= 'Confirmed' WHERE `job_id`= $job_id AND `trademan_id` = $trademan_id";
        $result = $mysqli->query($sql) or die($mysqli->error);
        return $result;

        $sql1 = "UPDATE estimate SET `confirm`= 'Refused' WHERE `confirm`= 'Pending'";
        $result1 = $mysqli->query($sql1) or die($mysqli->error);
        return $result1;
    }

}
