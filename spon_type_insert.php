<?php
$con = mysqli_connect('localhost','root','','mission_db');
if(isset($_POST['code'])){
         $code = $_POST['code'];
        $desc = $_POST['description'];
       
        $query = "select * from spon_type_master where spon_type='$code' ";
        $result = mysqli_query($con, $query);
        $no = mysqli_num_rows($result);
           if ($no == 0){
        $query = "insert into spon_type_master values('$code','$desc')";
        $result = mysqli_query($con, $query);
        header("Location: http://localhost/Missionproject/spon_type_master.php");
           }
           else{
                $query = "update spon_type_master set description ='$desc' where spon_type = '$code' ";
        $result = mysqli_query($con, $query);
        header("Location: http://localhost/Missionproject/spon_type_master.php");
               
           }
}
?>