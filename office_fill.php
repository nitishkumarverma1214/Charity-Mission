<?php 
                                                
$connect = mysqli_connect('localhost', 'root','','mission_db');
$output = '';
if (isset($_POST['find']))
{
    $search= mysqli_real_escape_string($connect, $_POST['find']);
    $query = "SELECT office_cd,name,addr,city,pin_code,d.description as dist_name,s.description as state_name FROM office_field_cd o JOIN district_master d on o.district_cd= d.district_cd join state_master s on d.state_cd = s.state_cd WHERE office_cd LIKE '%".$search."%' LIMIT 5";
}
 
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{

 while($row = mysqli_fetch_array($result))
 {
     
     $output .= $row["office_cd"].'~'.$row["name"].'~'.$row["addr"]."~".$row["city"].'~'.$row["pin_code"].'~'.$row["dist_name"].'~'.$row["state_name"];

 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
?>