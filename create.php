<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form method="POST" action="">
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">roll no.</label>
          <input type="number" name="roll_no" class="form-control" id="exampleInput1">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <input type="submit" name="register" value="register" class="btn btn-primary">
      </form>
</body>
</html>

<?php
include ('conn.php');
?>
<?php
if($_POST['register'])
{
  $roll_no  = $_POST['roll_no'];
  $email    = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO LOGIN (roll_no, email, password) VALUES ('$roll_no', '$email', '$password')";

  // Execute the query
  $data = mysqli_query($conn, $query);

  if ($data) {
      echo "Data inserted into database";
  } else {
      echo "No insert: "; // Show error for debugging
  }
}







?>