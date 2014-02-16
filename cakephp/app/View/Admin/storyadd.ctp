<div class="container">
	<p></p>
	<p></p>
	<h1>Create Story</h1>
</div>

<div class="container">
<form action="/storybridge/cakephp/admin/storyadd" id="PostAddForm" method="POST" accept-charset="utf-8" class="form-horizontal" role="form">
	<div class="form-group">
		<div class="col-md-6">
			<input class="form-control input-xxlg" name="data[Story][storyName]" maxlength="255" type="text" id="StoryName" required="required" placeholder="Story Name" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-6">
			<input class="form-control input-xxlg" name="data[Story][author]" maxlength="255" type="text" id="StoryAuthor" required="required" placeholder="Author" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-6">
			<select class="form-control input-lg">
				<option value="0">Ages 0-2</option>
				<option value="3">Ages 3-5</option>
				<option value="6">Ages 6-7</option>
				<option value="8">Ages 8-10</option>
				<option value="11">Ages 11-13</option>
				<option value="teens">Teens</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-6">
			<!-- Categories pulled from http://iml.jou.ufl.edu/projects/s11/parkinson_l/types.html -->
			<select class="form-control input-lg">
				<option value="adventure">Adventure</option>
				<option value="picture">Picture Books</option>
				<option value="rhythmic">Rhythmic Books</option>
				<option value="folklore">Folklore</option>
				<option value="fairytales">Fairytales</option>
				<option value="fantasy">Fantasy</option>
				<option value="concept">Concept Books</option>
				<option value="issues">Issue Books</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="event_name" class="col-sm-2 control-label"></label>
			<div class="col-md-12">
		<textarea id="PostBody" name="data[Story][body]" rows="10" cols="180">
	    	Story Description
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
   		<button name="submit" type="submit" class="btn btn-lg btn-primary">Save Story</button>
    </div>
</div>
</form>
</div>