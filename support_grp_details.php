<?php include'navbar.php';
if( !(isset($_SESSION['user'])))
       {
           header("location:index.php");
       }
?>
<div class="container-fluid">
    <h1 style="text-align: center">Support Group Details </h1>
    <div class="row">
        <div class="col-md-4">
            <form method="post" action="">
                <div class="form-group">
                    <label>supporting group no.</label>
                    <input type="text" id="sup_grp_no" class="form-control ">
                </div>
                <div class="form-group ">
                    <label>Name</label>
                    <select  >
                        <option value="Mr">Mr.</option>
                        <option value="Dr">Dr.</option>
                        <option value="Pastor">Pastor</option>
                        <option value="Ms">Ms.</option>
                        <option value="Er">Er.</option>
                        <option value="Mrs">Mrs.</option>
                        <option value="Mr_Mrs">Mr&Mrs</option>
                        <option value="Miss">Miss.</option>
                        
                    </select>
                    <input type="text" id="name" name="name" class=" form-control ">
                </div>
                <div class="form-group">
                    <label>office code</label>
                    <input type="text" id="off_code" name="office_code" class="form-control" >
                  
                </div>
                <div class="form-group">
                    <label>district code</label>
                    <input type="text" id="dist_code" name="district_code" class="form-control">
                  
                </div>
                <div class="form-group">
                    <label>leader 1.</label>
                    <input type="text" id="leader1" name="leader_1" class="form-control">
                  
                </div>
                <div class="form-group">
                    <label>leader 2.</label>
                    <input type="text" id="leader2" name="leader_2" class="form-control">
                  
                </div>
                <div class="form-group">
                    <label>status</label>
                    <select>
                        <option value="active">ACTIVE</option>
                        <option value="inactive">INACTIVE</option>
                    </select>
                </div>
                <div class ="form-group">
            <input type="submit"  class="btn btn-success btn-md " value="save">
            
        <button type="button" class="btn  btn-warning btn-md " >Cancel</button>
        <button type="button" class="btn  btn-danger btn-md " >Exit</button>
        
        </div>
                
            </form>
            
            
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
</div>