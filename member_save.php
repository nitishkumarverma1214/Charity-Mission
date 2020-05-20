<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    $connect = mysqli_connect('localhost', 'root','','mission_db');
    
   
    $mno=$_POST['mno'];$title=$_POST['title'];$name=$_POST['name'];$address=$_POST['address'];$postoffice=$_POST['postoffice'];$pincode=$_POST['pincode'];$district=$_POST['district'];
    $mobile=$_POST['mobile'];$email=$_POST['email'];$profession=$_POST['profession'];$qualification=$_POST['qualifictaion'];$dob=$_POST['dob'];$subs=$_POST['subs'];
    $sgn=$_POST['sgn'];$hundi=$_POST['hundi'];$ofcode=$_POST['ofcode'];$staff=$_POST['staff'];$magazine=$_POST['magazine'];$nom=$_POST['nom'];
    $d= date("Y/m/d").date("h:i:sa");
    $query="insert into member (`member_no`, `title`, `name`, `addr`, `city`, `pincode`, `spon_grp_no`, `hundi_no`, `district_cd`, `office_cd`,`admn_area` ,`dob`, `email1`, `mobile1`, `profession_cd`,`qual_cd`, `subscription`, `ent_date`, `user_id`)"
            . "values('$mno','$title','$name','$address','$postoffice','$pincode','$sgn','$hundi','$district','$ofcode','a001','$dob','$email','$mobile','$profession','$qualification','$subs','$d','u001');";
    
    $t= mysqli_query($connect, $query);
    
    if($t!=TRUE){
        echo mysqli_error($connect);
    }
    
    echo "done";
    
?>