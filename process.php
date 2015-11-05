<?php include 'header.php' ?>

<?php if(


	isset($_GET['query'])

	 && isset($_GET['limit']) )  {

	$query=$_GET['query'];
	$limit=$_GET['limit'];
	echo $query.$limit;



	} ?>



<?php include 'footer.php' ?> 