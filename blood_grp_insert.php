<?php
$con = mysqli_connect('localhost','root','','mission_db');
if(isset($_POST['code'])){
         $code = $_POST['code'];
        $desc = $_POST['description'];
       
        $query = "select * from blood_grp_master where blood_grp_cd='$code' ";
        $result = mysqli_query($con, $query);
        $no = mysqli_num_rows($result);
           if ($no == 0){
        $query = "insert into blood_grp_master values('$code','$desc')";
        $result = mysqli_query($con, $query);
        header("Location: http://localhost/Missionproject/blood_grp_master.php");
           }
           else{
                $query = "update blood_grp_master set description ='$desc' where blood_grp_cd = '$code' ";
        $result = mysqli_query($con, $query);
        header("Location: http://localhost/Missionproject/blood_grp_master.php");
               
           }
}
?>