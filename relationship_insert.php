<?php
$con = mysqli_connect('localhost','root','','mission_db');
if(isset($_POST['code'])){
         $code = $_POST['code'];
        $desc = $_POST['description'];
       
        $query = "select * from relationship_master where rel_cd='$code' ";
        $result = mysqli_query($con, $query);
        $no = mysqli_num_rows($result);
           if ($no == 0){
        $query = "insert into relationship_master values('$code','$desc')";
        $result = mysqli_query($con, $query);
        header("Location: http://localhost/Missionproject/relationship_master.php");
           }
           else{
                $query = "update qualification_master set description ='$desc' where rel_cd = '$code' ";
        $result = mysqli_query($con, $query);
        header("Location: http://localhost/Missionproject/relationship_master.php");
               
           }
}
?>