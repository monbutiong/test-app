<form method="post" action="<?=base_url('update-employee-details/'.$employee->id)?>">
  
  <div class="form-group">
    <label>First Name <span class="text-danger">*</span></label>
    <input type="text" name="first_name" value="<?=$employee->first_name?>" class="form-control" required="required"> 
  </div>

  <div class="form-group">
    <label>last Name <span class="text-danger">*</span></label>
    <input type="text" name="last_name" value="<?=$employee->last_name?>" class="form-control" required="required"> 
  </div>

  <div class="form-group">
    <label>Address </label>
    <input type="text" name="address" value="<?=$employee->address?>" class="form-control" > 
  </div>

  <div class="form-group">
    <label>Department <span class="text-danger">*</span></label>
    <select name="department_id" class="form-control" required="required"> 
      <option value="">please select department</option>
      <?php if(@$departments){
        foreach ($departments as $rs) {
      ?>
      <option value="<?=$rs->id?>" <?php if($rs->id==$employee->department_id){echo 'selected';}?>><?=$rs->title?></option>
      <?php }}?>
    </select>
  </div>

  <div class="form-group">
    <label>Designation <span class="text-danger">*</span></label>
    <select name="designation_id" class="form-control" required="required"> 
      <option value="">please select designation</option>
      <?php if(@$designations){
        foreach ($designations as $rs) {
      ?>
      <option value="<?=$rs->id?>" <?php if($rs->id==$employee->designation_id){echo 'selected';}?>><?=$rs->title?></option>
      <?php }}?>
    </select>
  </div>

  <div class="form-group">
    <label>Salary <span class="text-danger">*</span></label>
    <input type="number" name="salary" value="<?=$employee->salary?>" class="form-control" required="required"> 
  </div>

  <div class="form-group">
    <label>Bank Account Number </label>
    <input type="text" name="bank_account_number" value="<?=$employee->bank_account_number?>" class="form-control"> 
  </div>

  <div class="form-group">
    <label>Email <span class="text-danger">*</span></label>
    <input type="email" name="email" value="<?=$employee->email?>" class="form-control" required="required"> 
  </div>
 
  
  <button type="submit" class="btn btn-primary mb-5">Update Employee Details</button>
  <a href="<?=base_url('employee');?>" class="btn btn-warning text-white mb-5">Cancel</a>

</form>