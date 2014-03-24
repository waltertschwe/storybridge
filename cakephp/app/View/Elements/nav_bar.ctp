<!-- Fixed navbar -->
   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation"> 
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">StoryMyth</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          	<li class="active"><a href="/storybridge/cakephp/admin">Dashboard</a></li>
            <li class="dropdown">
            <?php echo $this->Html->link('Author Admin<b class="caret"></b>', array('controller' => 'adminusers', 'action' => 'index'), 
            										array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown',  'escape' => FALSE)); ?>							
            
              <ul class="dropdown-menu">
                <li>
                	<?php echo $this->Html->link('View Authors', array('controller' => 'adminusers', 'action' => 'index')); ?>
                </li>
                <li>
                	<?php echo $this->Html->link('Create Author', array('controller' => 'adminusers', 'action' => 'add')); ?>
                </li>
                <li><a href="#">TBD</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">TBD</a></li>
                <li><a href="#">TBD</a></li>
              </ul>
            </li>
            <li><a href="/storybridge/cakephp/admin">Reporting</a></li> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
   </nav>