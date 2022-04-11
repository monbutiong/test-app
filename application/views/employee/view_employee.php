
  
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" name="first_name" value="<?=$employee->first_name?>" class="form-control" readonly> 
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">last Name</label>
    <input type="text" name="last_name" value="<?=$employee->last_name?>" class="form-control" readonly> 
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Address </label>
    <input type="text" name="address" value="<?=$employee->address?>" class="form-control" readonly> 
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Department</label>
    
      <?php if(@$departments){
        foreach ($departments as $rs) {
        if($rs->id==$employee->department_id){
      ?>
      <input type="text" name="departments" value="<?=$rs->title?>" class="form-control" readonly>  
      <?php }}}?>
  
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Designation</label>
    
      <?php if(@$designations){
        foreach ($designations as $rs) {
        if($rs->id==$employee->designation_id){
      ?>
      <input type="text" name="designationss" value="<?=$rs->title?>" class="form-control" readonly>  
      <?php }}}?>
     
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Salary</label>
    <input type="number" name="salary" value="<?=$employee->salary?>" class="form-control" readonly> 
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Bank Account Number </label>
    <input type="text" name="bank_account_number" value="<?=$employee->bank_account_number?>" class="form-control" readonly> 
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" value="<?=$employee->email?>" class="form-control" readonly> 
  </div>
 
   
  <a href="<?=base_url('employee');?>" class="btn btn-warning text-white mb-5">Go Back</a>

