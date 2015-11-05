<?php 
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
include 'header.php' ?>

<?php if(


	isset($_GET['query'])

	 && isset($_GET['limit']) )  {
 
	$uquery=$_GET['query'];
	$ulimit=$_GET['limit'];
	$count=0;
	

define('CONSUMER_KEY', 'Zy5Ji3EUig67v8uzyrJmxY4iu');
define('CONSUMER_SECRET', 'JhE7YQ0qJhvIOllElsfR6l9fTkUUCPwFMjNW5xceGvZclEotak');
define('ACCESS_TOKEN', '240785139-IeckFIIdokhq71KprJTTPtx2lQX0OrKEUR3Vt8hC');
define('ACCESS_TOKEN_SECRET', 'jRzgnsJvkA7Z2QPF1u1NvGUqCy7ONTAmM45VjROLloKcI');
 
function search(array $query)
{
  $toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
  return $toa->get('search/tweets', $query);
}
    
$query = array(
  "q" => $uquery,
);
  
$results = search($query);
  
foreach ($results->statuses as $result) {

	$count++;

	if($count<=$ulimit) {

		  echo "<div class='box'>".$result->user->screen_name . ": " . $result->text ." Posted on".$result->created_at. "</div>";

	}
}



	} 
// if ends here... 

	else {




	}
	?>



<?php include 'footer.php' ?> 