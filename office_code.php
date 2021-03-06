                                                                                                                                   <body><!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
            <?php include 'navbar.php';
            if( !(isset($_SESSION['user'])))
       {
           header("location:index.php");
       }
            ?>
    <div class="container">
        <div class="row">
            <h1 style="text-align: center;">
                office code
            </h1>

<div class="col-md-6">
    <form action="office_insert.php" method="POST">
                <div class="form-group">
                    <label>Code</label><input type="text" name="office_cd" id="office_code" class="form-control office_search">
                <input type="text" placeholder=" name" name="name" id="office_name" class="form-control office_search" required>
                </div>
                <div class="form-group">
                    <label>Address</label><textarea rows="4" cols="40" name="addr" id="office_addr"></textarea>
                     
                </div>
                <div class="form-group">
                    <label>City</label><input type="text" name="city" id="office_city" class="form-control location">
                    <label>Pin</label><input type="text" name="pin" id="office_pin" class="form-control location">
                </div>
                <div class="form-group">
                    <label>District</label><input type="text" name="district" id="office_dist" class="form-control location">
                </div>
                <div class="form-group">
                    <label>State</label> <input type="text" name="state" id="office_state" class="form-control location">
                </div>
                <div class ="form-group">
                     <input type="submit"  class="btn btn-success btn-md " value="save">
            <input type="reset"  class="btn  btn-warning btn-md " value="Cancel">
       
             <button type="button" class="btn  btn-danger btn-md text-secondary" ><a href="landing.php" style="color: antiquewhite">Exit</a></button>
        
        
        </div>
            </form>
        </div>
<div class="col-md-6">
    <div id="result"></div>
    <p id="hide" hidden></p>
    <div id="res"></div>
</div>
    </div>
    </div>
            
            
</body>
<script>
$(document).ready(function(){

function fill_office_data(query){
    $.ajax({
   url:"office_fill.php",
   method:"POST",
   data:{find:query},
   success:function(data)
   {
      
      $('#hide').text(data);
      tabdata =  $('#hide').text().split("~");
      
      document.getElementById("office_code").value = tabdata[0];
      document.getElementById('office_name').value = tabdata[1];
      document.getElementById('office_addr').value = tabdata[2];
      document.getElementById('office_city').value = tabdata[3];
      document.getElementById('office_pin').value = tabdata[4];
      document.getElementById('office_dist').value = tabdata[5];
      document.getElementById('office_state').value = tabdata[6];
   }
  });
    
}
 
 function load_office_code(query)
 {
  $.ajax({
   url:"office_fetch.php",
   method:"POST",
   data:{office:query},
   success:function(data)
   {
    $('#result').html(data);
    
    $('#officetable tbody').on('click', 'tr', function() {
					//get row contents into an array
                    var tableData = $(this).children("td").map(function() {
                        return $(this).text();
                 }).get();
                 
               fill_office_data(tableData[0]);
                   
                    
				});
   }
  });
 }
 $('.office_search').keyup(function(){
  var search_office = $(this).val();
  if(search_office !== '')
  {
   load_office_code(search_office);
  
  }
  else
  {
   load_office_code();
  }
 });
});

function load_location(query){
    $.ajax({
        url:"location_fetch.php",
        method:"POST",
        data:{location:query},
        success:function(data){
            $('#res').html(data);
             $('#location_table tbody').on('click', 'tr', function() {
					//get row contents into an array
                    var tableData = $(this).children("td").map(function() {
                        return $(this).text();
                 }).get();
//                 console.log(tableData);
               $("#office_city").val(tableData[0]);
               $("#office_pin").val(tableData[1]);
               $("#office_dist").val(tableData[2]);
               $("#office_state").val(tableData[3]);
                   
                    
				});
        }
    });
}
$('.location').keyup(function(){
    var location = $(this).val();
    
    if(location !=='')
    {
        load_location(location);
    }
    else{
        load_location();
    }
});
</script>