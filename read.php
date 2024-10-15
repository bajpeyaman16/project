<?php
session_start();
?>
<?php
include("conn.php");?>
<?php

$query = " SELECT * FROM LOGIN ";//query
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
    <table border = "3" cellspacing="5" witdh = "100%">
        <tr>
            <th width ="15%">ID</th>
            <th width ="15%">Roll no.</th>
            <th width ="30%">Email</th>
            <th width ="10%">Password</th>
            <th width ="30%">Operation</th>
        </tr>
    <?php
 // echo "record has ";
 while($result = mysqli_fetch_assoc($data)){//main function data ko fetch krne ke liye table mai jb new ayega use while loop use kiya
   echo "<tr> 
          <td>".$result['id']."</td>
          <td>".$result['roll_no']."</td> 
          <td>".$result['email']."</td>
          <td>".$result['password']."</td>
          <td><a href='update.php?id = $result[id]'><button>update</button></a>
          <a href='delete.php?id = $result[id]'><button>Delete</button></a>
          </td>
       </tr>";
  }
 }
 else{
    echo "no record found";
}
?>
  </table>
  <a href='login.php'><button style="margin-top:8; background-color:grey; color :yellow; margin-left:50%;";>log out</button></a>

