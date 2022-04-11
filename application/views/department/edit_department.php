<form method="post" action="<?=base_url('update-department-details/'.$department->id)?>">
  
  <div class="form-group">
    <label>Title <span class="text-danger">*</span></label>
    <input type="text" name="title" value="<?=$department->title?>" class="form-control" required="required"> 
  </div>
   
  <button type="submit" class="btn btn-primary mb-5">Update Department Details</button>
  <a href="<?=base_url('department');?>" class="btn btn-warning text-white mb-5">Cancel</a>

</form>