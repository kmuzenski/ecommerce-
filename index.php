<?php require_once('session.php'); ?>


<!DOCTYPE html>
<html>
<?php require_once('header.php'); ?>
<body>


<?php require_once('nav.php'); ?>
<br><br><br><br><br><br>
<center>
<img src="assets/img/banner.png" width="500">

<br><br><br><br>

<h1>Welcome Home &nbsp;<i><?php echo $_SESSION['username']; ?></i>
</h1>
</center>
<br><br><br><br>

<div class="container">

    <div class="row">

    <div class="col-md-6">

<a href="newProducts.php"><img src="assets/img/whatsnew.png" width="500"></a>
	
     </div>


	<div class="col-md-6">

<a href="trending.php"><img src="assets/img/trending.png" width="500"></a>
	
	</div>


</div>

</div>






<br><br><br><br><br>

<?php require_once('footer.php'); ?>
  </body>
</html>
