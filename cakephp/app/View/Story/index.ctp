<div class="row clearfix">
	<div class="col-md-12 column">
		<div class="page-header">
			<h1>
				<?php echo $pageInfo['storyName']; ?> <small>Page: <?php echo $pageInfo['currentPageNumber']; ?></small>
				<a class="btn btn-default btn-success" href="" role="button">Bookmark &nbsp;<span class="glyphicon glyphicon-ok"></span></a>
			</h1>
		</div>
		<div class="row clearfix">
			<div class="col-md-8 column">
				<?php echo $page; ?>
				<?php if (!empty($previousPage)) { ?> 
				<a href="/story/index/<?php echo $storyId;?>/<?php echo $previousPage; ?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp; Back</button></a>
				<?php } ?>
				<a href="/story/index/<?php echo $storyId;?>/<?php echo $nextPage; ?>"><button class="btn btn-primary">Next &nbsp;<span class="glyphicon glyphicon-arrow-right"></span></button></a>
			</div>
			<div class="col-md-4 column">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- storybridge -->
				<ins class="adsbygoogle"
				     style="display:inline-block;width:300px;height:250px"
				     data-ad-client="ca-pub-3618325500731081"
				     data-ad-slot="5657370977"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div>
	</div>