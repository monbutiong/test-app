<a class="btn btn-sm btn-success float-right mb-2" href="<?=base_url('add-new-department')?>">Add New Department</a>

 
<table class="table table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th> 
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
  	<?php  

  	if(@$departments){
  		foreach($departments as $rs){
  	?>
    <tr>
      <th scope="row"><?=$rs->id?></th>
      <td><?=$rs->title?></td> 
      <td> 

      	<a class="btn btn-sm btn-warning text-white" href="<?=base_url('edit-department-details/'.$rs->id);?>">Edit</a>
      	 
      	<a class="btn btn-sm btn-danger" href="Javascript:delete_department(<?=$rs->id?>,'<?=base_url()?>delete-department-details/')">Delete</a>

      </td>
    </tr> 
	<?php }}else{?>
    <tr>
      <td colspan="8">
         <center> <i>no data</i> </center>
      </td>
    </tr> 
  <?php }?>
  </tbody>
</table>