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
      
        <h1>Twitter Viral Check</h1>
        <p class="lead"> simple php based script to check twitter feed, to check if a #hashtag or a string works!</p>



        <form action="process.php" method="get" class="col-lg-4">
  
<legend>Enter things you'd like to search </legend><input type="text" name='query'>
<legend>Limit the posts to : </legend><input type="text" name='limit'><br>
<br>
<input type="submit" class="btn btn-lg btn-success" role="button" value="Search">


</form>

      </div>


      <footer class="footer">
        <p>&copy; Built at Vit University by Sarabpreet | Annu | Premjeet </p>
      </footer>

    </div> <!-- /container -->





<?php include 'footer.php' ?>