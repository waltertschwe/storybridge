
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <?php echo $this->Html->image('story-1-900x500.jpg', array('alt' => 'story 2', 'width' => '900', 'height' => '500')); ?>
          <div class="container">
            <div class="carousel-caption">
              <h1>Help your kids read above their grade level.</h1>
              <p><code>Parents take the tour today!</code></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
        	<?php echo $this->Html->image('story-2-900x500.jpg', array('alt' => 'story 2', 'width' => '900', 'height' => '500')); ?>
         <!-- <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide"> -->
          <div class="container">
            <div class="carousel-caption">
              <h1>Try the demo!</h1>
              <p>Not sure what to do?  Our tutorial will get you started and you'll be adventuring in no time!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
           <?php echo $this->Html->image('story-3-900x500.jpg', array('alt' => 'CakePHP')); ?>
          <div class="container">
            <div class="carousel-caption">
              <h1>Always be Storytelling!</h1>
              <p>You're just one step away from enjoying some of the most exciting reading material out there.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <?php echo $this->Html->image('tunnel-1.jpg', array('alt' => 'story 2', 'width' => '320', 'height' => '240')); ?>
          <!-- <img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image"> -->
          <h2>Tim and the Time Tunnel</h2>
          <p>This first book in a series of five introduces us to Tim. </p>
          <p><a class="btn btn-default" href="#" role="button">Read Book! &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <?php echo $this->Html->image('sandcastle.jpg', array('alt' => 'story 2', 'width' => '320', 'height' => '240')); ?>
          <h2>The Sandcastle Storybook</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">Read Book! &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <?php echo $this->Html->image('magic-box.jpg', array('alt' => 'story 2', 'width' => '320', 'height' => '240')); ?>
          <h2>
          	<?php echo $this->Html->link('X Dare and The Keys to Nin', array('controller' => 'story', 'action' => 'index', '5327339eca50a95246dc478d')); ?>
          	</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. 
          	Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. by PK Herzo</p>
          <p><a class="btn btn-default" href="#" role="button">Read Book! &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Traditional Storytelling vs. StoryPath <span class="text-muted"></span></h2>
          <p class="lead">Explore tradional stories that read just like a book... or try our path based material where you control the outcome.
          	Your choices will decide the next page you read and the eventual outcome of the story.
          </p>
        </div>
        <div class="col-md-5">
        	 <?php echo $this->Html->image('fork-road.jpg', array('alt' => 'story 2', 'width' => '500', 'height' => '500')); ?>
          <!-- <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image"> -->
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
           <?php echo $this->Html->image('treasure-chest.gif', array('alt' => 'story 2', 'width' => '500', 'height' => '500')); ?>
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">The more you read the more you earn. <span class="text-muted"></span></h2>
          <p class="lead">Earn badges and discover treasure along the way.  Treasure points can be used as real money to unlock paid content.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"></h2>
          <p class="lead"></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Schweitzer Technology LLC &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->
