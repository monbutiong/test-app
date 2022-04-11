<form method="post" action="<?=base_url('save-department-details')?>">
  
  <div class="form-group">
    <label>Title <span class="text-danger">*</span></label>
    <input type="text" name="title" class="form-control" required="required"> 
  </div>
 
  <button type="submit" class="btn btn-primary mb-5">Save Department Details</button>
  <a href="<?=base_url('department');?>" class="btn btn-warning text-white mb-5">Cancel</a>

</form>