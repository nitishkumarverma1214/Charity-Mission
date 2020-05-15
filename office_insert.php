<?php

$con = mysqli_connect('localhost','root','','mission_db');
if(isset($_POST['office_cd'])){
         $code = $_POST['office_cd'];
         $name = $_POST['name'];
         $addr = $_POST['addr'];
         $city = $_POST['city'];
         $pin = $_POST['pin'];
         $dist = $_POST['district'];
         $state = $_POST['state'];
         
         
        $query = "select * from office_field_cd where office_cd='$code' ";
        $result = mysqli_query($con, $query);
        $no = mysqli_num_rows($result);
           if ($no == 0){
               
        $query = "insert into office_field_cd values('$code','$name','$addr','$city','$pin')";
        $result = mysqli_query($con, $query);
        header("Location: http://localhost/Missionproject/office_code.php");
           }
           else{
                $query = "update office_field_cd set name ='$name',addr='$addr',city='$city',pin_code='$pin',district_cd='$dist' where office_cd = '$code' ";
        $result = mysqli_query($con, $query);
        header("Location: http://localhost/Missionproject/office_code.php");
               
           }
}
?>