<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="bootstrap.min.css" >
  </head>
  <body>
    <table class="table table-striped table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>Email</th>
      <th>Password</th>
      <th>Birthday</th>
    </tr>
  </thead>
  <tbody>
    <?php
    require_once('listinguser.php');
    ?>


  </tbody>
</table>
  </body>
</html>
