<?php

$connect = mysqli_connect('localhost', 'root','','mission_db');
$output = '';
$search= mysqli_real_escape_string($connect, $_POST['search_code']);
if ($_POST['tab_geo'] == 'country_master')
{
    
    $query = "SELECT * FROM country_master WHERE country_cd LIKE '%".$search."%' ";
    $result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{

 while($row = mysqli_fetch_array($result))
 {
     
     $output .= $row["country_cd"].'~'.$row["description"];

 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
    
}
 elseif ($_POST['tab_geo'] == 'state_master') {
    
     $query = "SELECT * FROM state_master WHERE state_cd LIKE '%".$search."%' ";
    $result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{

 while($row = mysqli_fetch_array($result))
 {
     
     $output .= $row["state_cd"].'~'.$row["description"];

 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
}
 else {
     
    $query = "SELECT d.district_cd,d.description as d_name,s.state_cd, s.description as s_name FROM district_master d join state_master s on s.state_cd = d.state_cd WHERE district_cd LIKE '%".$search."%' ";
    $result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{

 while($row = mysqli_fetch_array($result))
 {
     
     $output .= $row["district_cd"].'~'.$row["d_name"].'~'.$row["state_cd"].'~'.$row["s_name"];

 }
 echo $output;
}
else
{
 echo 'Data Not Found';
} 
}
 

?>