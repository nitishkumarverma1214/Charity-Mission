<?php include'navbar.php';
if( !(isset($_SESSION['user'])))
       {
           header("location:index.php");
       }
?>
<div class="container-fluid">
    <form action="" method="post">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Member no.</label>
        <div class="col-md-3">
               <input type="text" class="form-control "id="member_no" name="mem_no">
                 </div>
        <div class="col-md-4">
        <input type="text" readonly class="form-control " id="mem_name" name="mem_name">
    </div>
    </div>
               
        <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Responsibility</label>
    <div class="col-sm-3">
        <input type="text" class="form-control search_resp" id="resp_cd" name="resp_cd" >
       
    </div>
    <div class="col-md-4">
        <input type="text" readonly class="form-control " id="resp_name" name="resp_name">
       
    </div>
    <div class="col-md-3">
       
        <div id="resp"></div>
    </div>
     
          </div>
        
    <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Active</label>
    <div class="col-sm-3">
        <select id="status" name="active">
                        <option value="y">YES</option>
                        <option value="n">NO</option>
                    </select>
    </div>
  </div>
         <div class ="form-group">
            <input type="submit"  class="btn btn-success btn-md " value="save">
            
        <button type="button" class="btn  btn-warning btn-md " >Cancel</button>
        <button type="button" class="btn  btn-danger btn-md " >Exit</button>
        
        </div>
            </form>
            
       
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
             
        </div>
    </div>
   
</div>
<script>
$(document).ready(function(){

// load_data();

 function load_resp(query)
 {
  $.ajax({
   url:"responsibility_fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#resp').html(data);
    $('#resp_table tbody').on('click', 'tr', function() {
         $('#resp').hide();
					//get row contents into an array
                    var tableData = $(this).children("td").map(function() {
                        return $(this).text();
                 }).get();
                    document.getElementById("resp_cd").value = tableData[0];
                    document.getElementById('resp_name').value = tableData[1];
//                    $('#status').val('n');
                    
                      
				});
                                
   }
  });
 }
 $('.search_resp').keyup(function(){
     $('#resp').show();
  var search = $(this).val();
  if(search !== '')
  {
   load_resp(search);
  
  }
  else
  {
   load_resp();
  
  }
 });
 
 
});
</script>