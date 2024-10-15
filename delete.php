<?php include('conn.php');
?>
<?php
 $id = $_GET['id'];

 $query = "SELECT * FROM LOGIN WHERE id='$id' "; //query
 $data = mysqli_query($conn, $query);
 if($data)
  {
    //  echo 'deleted';
     echo '<script>alert("delete successfully");<script>';
  }
 else{
  echo 'no deleted';
  }
?>
