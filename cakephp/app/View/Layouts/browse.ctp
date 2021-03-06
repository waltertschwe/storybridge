<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>StoryMyth - Browse</title>

    <!-- Bootstrap core CSS -->
   <?php echo $this->Html->css('bootstrap.min'); ?>
   
   <!-- Bootstrap theme CSS -->
    <?php echo $this->Html->css('bootstrap-theme.min'); ?>
    <?php echo $this->Html->css('http://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/css/bootstrap-glyphicons.css'); ?>
    
    <!-- Microfiche CSS -->
     <?php echo $this->Html->css('prettify'); ?>
     <?php echo $this->Html->css('microfiche'); ?>
     <?php echo $this->Html->css('microfiche.demo'); ?>
    
    <!-- Administration CSS -->
    <?php echo $this->Html->css('admin'); ?>

	<!-- Global CSS -->
	<?php echo $this->Html->css('global'); ?>

    <!-- Custom styles for this template -->
    <?php echo $this->Html->css('signin'); ?>
    
    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
   
  </head>
<body>
  
<!-- Navigation bar /View/Elements/nav_bar.ctp -->
	<?php echo $this->element('story_nav'); ?>
<!-- Login /View/Elements/modal_login.ctp -->	
	<?php echo $this->element('modal_signup'); ?>
	
	<div class="container">
		<?php echo $this->fetch('content'); ?>
	</div>
	
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
	<?php echo $this->Html->script('bootstrap.min.js'); ?>
	<?php echo $this->Html->script('jquery.dataTables.min.js'); ?>
	<?php echo $this->Html->script('custom.js'); ?>
	
	<!-- Microfiche JS -->
	<?php echo $this->Html->script('microfiche.js'); ?>
	 <script>
		$('#browse-1').microfiche({ cyclic  : true });
		$('#browse-2').microfiche({ cyclic  : true });
		$('#browse-3').microfiche({ cyclic  : true });
		$('#browse-4').microfiche({ cyclic  : true });
		$('#browse-5').microfiche({ cyclic  : true });
		$('#browse-6').microfiche({ cyclic  : true });
	</script>
	
</body>
</html>



