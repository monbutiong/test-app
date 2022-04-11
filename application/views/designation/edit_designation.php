<form method="post" action="<?=base_url('update-designation-details/'.$designation->id)?>">
  
  <div class="form-group">
    <label>Title <span class="text-danger">*</span></label>
    <input type="text" name="title" value="<?=$designation->title?>" class="form-control" required="required"> 
  </div>
   
  <button type="submit" class="btn btn-primary mb-5">Update Designation Details</button>
  <a href="<?=base_url('designation');?>" class="btn btn-warning text-white mb-5">Cancel</a>

</form>