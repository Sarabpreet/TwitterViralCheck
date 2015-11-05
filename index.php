<?php include 'header.php' ?>


    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="#">About</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Twitter Viral Check Tool</h3>
      </div>

      <div class="jumbotron row">
        <h1>Jumbotron heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <form action="process.php" method="get" class="col-lg-4">
  
<legend>Enter things you'd like to search </legend><input type="text" name='query'>
<legend>Limit the posts to : </legend><input type="text" name='limit'><br>

<input type="submit" class="btn btn-lg btn-success" role="button" value="Search">


</form>

      </div>


      <footer class="footer">
        <p>&copy; Built at Vit University by Sarabpreet | Annu | Premjeet </p>
      </footer>

    </div> <!-- /container -->





<?php include 'footer.php' ?>