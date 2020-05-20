


<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Profession Member</title>

    </head>
    <body>
     <?php include 'navbar.php';
     if( !(isset($_SESSION['user'])))
       {
           header("location:index.php");
       }
     ?>;
       <div class="container">
	
<div class="row">
	
	
<h1 style="text-align:center;">
	Add a New Profession
</h1>
    <div class="col-md-3"></div>
	<div class="col-md-6">
	
        <form method="post" action="profession_insert.php">
            <div class ="form-group">
                <input type="text" class="form-control search_text" placeholder="profession code" name ="code" id="prof_cd">
        </div>
        <div class ="form-group">
           <input type="text" placeholder=" description" class="form-control search_text" name="description" id="prof_desc">
        </div>
        <div class ="form-group">
            <input type="submit"  class="btn btn-success btn-md " value="save">
            
        <button type="button" class="btn  btn-warning btn-md " >Cancel</button>
        <button type="button" class="btn  btn-danger btn-md " >Exit</button>
        
        </div>
           
           
        </form>

       <div id="result"></div>
</div>

</div>
       </div>

        
    </body>
</html>

 
<script>
$(document).ready(function(){

// load_data();

 function load_data(query)
 {
  $.ajax({
   url:"profession_fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
    $('#tableMain tbody').on('click', 'tr', function() {
					//get row contents into an array
                    var tableData = $(this).children("td").map(function() {
                        return $(this).text();
                 }).get();
                    document.getElementById("prof_cd").value = tableData[0];
                    document.getElementById('prof_desc').value = tableData[1];
                    
                    
				});
   }
  });
 }
 $('.search_text').keyup(function(){
  var search = $(this).val();
  if(search !== '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
 
 
});
</script>