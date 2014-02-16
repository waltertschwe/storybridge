<div class="container">
	<p></p>
	<p></p>
	<h1>Create Page</h1>
</div>

<div class="container">
<form action="/storybridge/cakephp/admin/pageadd/<?php echo $story['Story']['_id']; ?>" id="PostAddForm" method="POST" accept-charset="utf-8" class="form-horizontal" role="form">
	<div class="form-group">
		<div class="col-md-6">
			<input class="form-control input-xxlg" name="data[Page][desc]" maxlength="255" type="text" id="pageDesc" placeholder="Page Description (optional)" />
		</div>
	</div>
	<div class="form-group">
		<label for="event_name" class="col-sm-2 control-label"></label>
			<div class="col-md-12">
		<textarea id="PostBody" name="data[Page][body]" rows="10" cols="180">
	    	Page Body
		</textarea>
		<script type="text/javascript" charset="utf-8">
				var PostBody = CKEDITOR.replace( 'PostBody', {
					uiColor: '#1C6BA0'
		});
		</script>
		</div>
	</div>
<input type="hidden" name="_method" value="POST"/>
<div class="form-group">
   	<div class="col-md-6">
   		<button name="submit" type="submit" class="btn btn-lg btn-primary">Save Page</button>
    </div>
</div>
</form>
</div>