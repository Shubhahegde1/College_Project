<?php
    $conn=mysqli_connect("localhost","root","","oas");
    if(isset($_GET['delete'])){
        $s_id=$_GET['delete'];
        echo $s_id;
        // $query = "delete from t_user_data where s_id = {$s_id}";
        // $query = "DELETE FROM `t_user_data` WHERE `t_user_data`.`s_id` = '$s_id'";
        $query = "DELETE FROM `t_user_data` WHERE `t_user_data`.`s_id` = '$s_id'";
        $delete_query=mysqli_query($conn,$query);
        
        header("Location:admin.php");
    }
?>