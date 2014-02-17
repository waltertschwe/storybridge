<div class="page-header">
    <h1>StoryBridge - Admin Home</h1>
</div>
<div class="well">
<p>Stories </p>
<p><b>To create a new Story click the button below.</b></p>
<p><?php echo $this->Html->link('Create Story', array('controller' => 'admin', 'action' => 'storyadd'), array('class' => 'btn btn-lg btn-success create-post', 'role' => 'button'));  ?></p>
</div>


<table cellpadding="0" cellspacing="0" border="0" class="display" id="viewPosts">
	<thead>
		<tr>
			<th>Title</th>
			<th>Author</th>
            <th>Created Date</th>
			<th>Modified Date</th>
            <th>Status</th>
            <th>Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($stories as $story) { ?>
		<tr class="gradeC">
            <td class="center"><?php echo $story['Story']['storyName']; ?></td>
            <td class="center"><?php echo $story['Story']['author']; ?></td>
            <td class="center"></td>
            <td class="center"></td>
            <td class="center">Published</td>
            <td class="center">  
            	<?php echo $this->Html->link('<span class="glyphicon glyphicon-link">', array('controller' => 'admin', 'action' => 'pages', $story['Story']['_id']), 
            										array('class' => 'link', 'data-toggle' => 'tooltip', 'title' => 'pages', 'escape' => FALSE)); ?>							
                <?php echo $this->Html->link('<span class="glyphicon glyphicon-trash">', array('controller' => 'admin', 'action' => 'deletestory', $story['Story']['_id']), 
            										array('class' => 'link', 'data-toggle' => 'tooltip', 'title' => 'pages', 'escape' => FALSE)); ?>
            	<?php echo $this->Html->link('<span class="glyphicon glyphicon-home">', array('controller' => 'story', 'action' => 'index', $story['Story']['_id']), 
            										array('class' => 'link', 'data-toggle' => 'tooltip', 'title' => 'pages', 'escape' => FALSE)); ?>	
            </td>
		</tr>

	<?php } ?>
	
	</tbody>
	<tfoot>
		<tr>
			<th>Title</th>
			<th>Author</th>
            <th>Created Date</th>
			<th>Modified Date</th>
            <th>Status</th>
            <th>Actions</th>
		</tr>
	</tfoot>
</table>





