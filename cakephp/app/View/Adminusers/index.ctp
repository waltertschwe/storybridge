<?php echo $this->Session->flash(); ?>
<div class="page-header">
    <h1>Authors</h1>
</div>
<div class="well">
<p>Author </p>
<p><b>To create a new Author click the button below.</b></p>
<p><?php echo $this->Html->link('Create Author', array('controller' => 'adminusers', 'action' => 'add'), array('class' => 'btn btn-lg btn-success create-post', 'role' => 'button'));  ?></p>
</div>


<table cellpadding="0" cellspacing="0" border="0" class="display" id="viewPosts">
	<thead>
		<tr>
			<th>Author</th>
			<th>Role</th>
            <th>Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($adminUsers as $adminUser) { ?>
		<tr class="gradeC">
            <td class="center"><?php echo $adminUser['Adminuser']['username']; ?></td>
            <td class="center"><?php echo $adminUser['Adminuser']['role']; ?></td>
            <td class="center"></td>
		</tr>

	<?php } ?>
	
	</tbody>
	<tfoot>
		<tr>
			<th>Author</th>
			<th>Role</th>
            <th>Actions</th>
		</tr>
	</tfoot>
</table>





