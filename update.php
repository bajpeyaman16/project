
<?php
include("conn.php");?>
<?php
session_start();?>
<?php

$query = "SELECT * FROM LOGIN";//query
$data = mysqli_query($conn, $query);//execute query
$total = mysqli_num_rows($data);//data row wise read

if($total!=0){// yadi data ho to
    $email = $_SESSION['email'];
    if($email == true)
    {

    }
    else{
        header('location:login.php');
    }
    ?>

    <table border = "3">
        <tr>
            <th>ID</th>
            <th>ROll no.</th>
            <th>Email</th>
            <th>Password</th>
            <th>Operation</th>
        </tr>
    <?php
 // echo "record has ";
 while($result = mysqli_fetch_assoc($data)){//main function data ko fetch krne ke liye table mai jb new ayega use while loop use kiya
   echo "<tr>
          <td>".$result['id']."</td>
          <td>".$result['roll_no']."</td>
          <td>".$result['email']."</td>
          <td>".$result['password']."</td>
          <td><a href='update_design.php? id = $result[id].'>update</a></td>
        </tr>
        ";
 }
}
else{//yadi data nahi ho to
    echo "no record found";
}

?>
  </table>

