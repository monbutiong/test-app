<a class="btn btn-sm btn-success float-right mb-2" href="<?=base_url('add-new-employee')?>">Add New Employee</a>

 
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Address</th>
      <th>Department</th>
      <th>Designation</th> 
      <th>Salary</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
  	<?php  

  	if(@$employees){
  		foreach($employees as $rs){
  	?>
    <tr>
      <th scope="row"><?=$rs->id?></th>
      <td><?=$rs->first_name?></td>
      <td><?=$rs->last_name?></td> 
      <td><?=$rs->address?></td>
      <td><?=$rs->department_title?></td>
      <td><?=$rs->designation_title?></td>
      <td>$<?=number_format($rs->salary,2)?></td>
      <td>
      	
      	<a class="btn btn-sm btn-info" href="<?=base_url('view-employee-details/'.$rs->id);?>">View</a>

      	<a class="btn btn-sm btn-warning text-white" href="<?=base_url('edit-employee-details/'.$rs->id);?>">Edit</a>
      	 
      	<a class="btn btn-sm btn-danger" href="Javascript:delete_employee(<?=$rs->id?>,'<?=base_url()?>delete-employee-details/')">Delete</a>

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