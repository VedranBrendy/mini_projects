<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap.css">
 
  <title>Pretraživanje gradova RH</title>
</head>
<body>
<div class="container">
  
  <h1 class="mt-2">Naselja i  gradovi u RH</h1>  
  <form action="index.php" method="POST">
    <div class="form-group">
      <input type="text" class="form-control" name="naselje" placeholder="Enter">
    </div>
    <input type="submit" name="submit" class="btn btn-primary mb-3" value="Submit">
    </div>

  </form>


</div>


<?php


if (isset($_POST['submit'])) {

  $naselje = $_POST['naselje'];

  require("db.php");

  $query = "SELECT * FROM naselja WHERE postanski_broj LIKE '%".$naselje."%' OR mjesto LIKE '%".$naselje."%' ORDER BY mjesto ASC";

/*   $query = "SELECT * FROM naselja WHERE postanski_broj = '$naselje', mjesto = 'mjesto' ORDER BY mjesto ASC"; */

  // Get Result
  $result = mysqli_query($conn, $query);
 

  // Fetch Data
  $naselja = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($conn);
}

?>

<div class="container">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Poštanski broj</th>
      <th scope="col">Mjesto</th>
      <th scope="col">Županija</th>
      <th scope="col">Općina</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  if (isset($naselja)) {
    foreach ($naselja as $n ) {
    $post_br = $n['postanski_broj'];  
    $mj = $n['mjesto'];
    $zupanija = $n['zupanija'];
    $opcina = $n['opcina'];
    echo '<tr>';   
    echo  '<td>'.$post_br.'</td>';   
    echo  '<td>'.$mj.'</td>';   
    echo  '<td>'.$zupanija.'</td>';   
    echo  '<td>'.$opcina.'</td>';      
    echo '</tr>';   
  } 
  }
  
  ?>
  </tbody>
</table>
</div>
</body>
</html>