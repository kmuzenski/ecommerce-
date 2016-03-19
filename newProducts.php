<?php require_once('database.php');
	require_once('session.php');
	require_once('crud.php');
?>


<!DOCTYPE html>
<html>

<?php require_once('header.php'); ?>

<body>
<?php require_once('nav.php'); ?>
<br><br><br><br><br><br>

<h1>Newest Products!</h1>



<div class="container">
<div class ="row">
<table class="table table striped table-bordered">
<thead>
<tr>
<th>Name</th>
<th>Description</th>
<th> Price </th>
<th> Action </th>
</tr>
</thead>

<tbody>

<?php 

if($loggedin) {
                $pdo = Database::connect();
                $id = $_GET['id'];
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = 'SELECT * FROM product ORDER BY id DESC';
                $q = $pdo->prepare($sql);
                $q->execute(array($id));
                $query = $q->fetchAll(PDO::FETCH_ASSOC);
              foreach ($query as $row) {
                  echo '<tr>';
                  echo '<form method="POST" action="addToCart.php">';
                  echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                  echo '<td>'.$row['name'].'</td>'; 
                  echo '<td>'.$row['description'].'</td>'; 
                  echo '<td>'.$row['price'].'</td>';
                  echo '<td><input type="submit" value="Add to Cart"></td>';
                  echo '</form>';
                  echo '</tr>';
                }
            }
            Database::disconnect();
            ?>

</body>
</table>
</div>

<br>
</div>

<?php require_once('footer.php'); ?>
</body>
</html>

