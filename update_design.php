<?php
include("conn.php");
?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM LOGIN WHERE id='$id' "; //query
$data = mysqli_query($conn, $query);//execute query
$total = mysqli_num_rows($data);//data row wise read
$result = mysqli_fetch_assoc($data);
if($result)
{
  // header('location:update.php');
  echo "data update successfull";
}
else{
  echo "not update";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Update Form page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form method="POST" action="">
    <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Roll no.</label>
          <input type="text" value="<?php echo $resullt['id']; ?>" name="roll_no" class="form-control" id="exampleInput1">
        </div>      
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" value="<?php echo $result['id']; ?>" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password"  value="<?php echo $result['id']; ?>" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <input type="submit" name="register" value="Update here"  class="btn btn-primary">
      </form>
</body>
</html>