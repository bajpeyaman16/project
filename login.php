<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <form method="POST" action="">
        <div class="mb-3">
          <h3>Login form</h3>
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <button type="submit" name="register" value="register" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
<?php 
include("conn.php");
?>
<?php
if(isset($_POST['register']))
{
  $email    = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM LOGIN WHERE email='$email'";
  $data = mysqli_query($conn, $query);
  $total=mysqli_num_rows($data);

 if($total == 1){
    $_SESSION['email']= $email; // email ka pura data session mai dala
   header('location:read.php');
 
 }
 else{
    echo "login failed";
 }
}
?>