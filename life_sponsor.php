<?php include'navbar.php'?>

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
    <label  class="col-sm-2 col-form-label">Special Occasion</label>
    <div class="col-sm-3">
        <select id="status" name="active">
                        <option value="birthday">Birthday</option>
                        <option value="wedding day">Wedding day</option>
                        <option value="memorial day">Memorial day</option>
                        <option value="other celebration">Other celebration</option>
                        <option value="none">NOne</option>
                    </select>
    </div>
  </div>
        
        <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Relationship</label>
    <div class="col-sm-3">
        <input type="text" class="form-control search_rel" id="rel_name" name="rel_name" >
       
    </div>
     
          </div>
        <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-3">
        <input type="text" class="form-control search_rel" id="name" name="name" >
       
    </div>
     
          </div>
        <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-3">
        <input type="date" class="form-control search_rel" id="date" name="date" >
       
    </div>
     <label  class="col-sm-2 col-form-label">Day and Month</label>
    <div class="col-sm-1">
        <input type="number" class="form-control search_rel" id="day" name="day" min="1" max="31">
       
    </div>
     <div class="col-sm-2">
         <input type="month" class="form-control search_rel" id="month" name="month" >
       
    </div>
          </div>
        <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Amount</label>
    <div class="col-sm-3">
        <input type="text" class="form-control search_rel" id="amt" name="amt" >
       
    </div>
     
          </div>
        <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Remark</label>
    <div class="col-sm-3">
        <input type="text" class="form-control search_rel" id="remark" name="remark" >
       
    </div>
     
          </div>
        
         <div class ="form-group">
            <input type="submit"  class="btn btn-success btn-md " value="save">
            
            <button type="reset" class="btn  btn-warning btn-md " >Cancel</button>
        <button type="button" class="btn  btn-danger btn-md " >Exit</button>
        
        </div>
            </form>
            
       
</div>