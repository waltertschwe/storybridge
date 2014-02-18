<div class="page-header">
    <h1><?php echo $story['Story']['storyName']; ?></h1>
</div>
<div class="well">
<p>Pages</p>
<p><b>To create a new Page click the button below.</b></p>
<p><?php echo $this->Html->link('Create Page', array('controller' => 'admin', 'action' => 'pageadd', $story['Story']['_id']), array('class' => 'btn btn-lg btn-success create-post', 'role' => 'button'));  ?></p>
</div>

<table cellpadding="0" cellspacing="0" border="0" class="display" id="viewPosts">
	<thead>
		<tr>
			<th>Page Number</th>
			<th>Description</th>
            <th>Body</th>
            <th>Choice</th>
            <th>Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php 
	
		if(!empty($pages)) { 
			foreach ($pages as $pageNumber => $value) { 
		      $body = $value['body'];	
			  $choice = $value['choice'];
			  $desc = $value['desc'];
	?>
		<tr class="gradeC">
            <td class="center"><?php echo $pageNumber; ?></td>
            <td class="center"><?php echo $desc; ?></td>
            <td class="center"><?php echo $body; ?></td>
            <td class="center"><?php echo $choice; ?></td>
            <td class="center">  
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-link">', array('controller' => 'admin', 'action' => 'pageedit', $story['Story']['_id'], $pageNumber), 
            									array('class' => 'link', 'data-toggle' => 'tooltip', 'title' => 'pages', 'escape' => FALSE)); ?>				
               	<a href="" class="link" data-toggle="tooltip" title="Publish" target="_blank"><span class="glyphicon glyphicon-home"></a>
            	<a href="" class="link" data-toggle="tooltip" title="Publish"><span class="glyphicon glyphicon-trash"></a>
            </td>
		</tr>

	<?php 
			}	
		} 
	?>
	
	</tbody>
	<tfoot>
		<tr>
		    <th>Page Number</th>
			<th>Description</th>
            <th>Body</th>
            <th>Choice</th>
            <th>Actions</th> 
		</tr>
	</tfoot>
</table>

