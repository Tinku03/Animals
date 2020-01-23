<?php
include('connect.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
</head>
<body>
    <?php
    $sql = "SELECT * from animals_details";
    $result = mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($result);
    $hasMatch = false;
              if($resultcheck > 0) 
              {
              while($row = mysqli_fetch_assoc($result))
              { 
              if ($row["Name"] == $_GET['name'])
                 {
                        echo "Name: " . $row["Name"]. " - Type: " . $row["Type"]. " - Age: " . $row["Age"]. "<br>";
                        $hasMatch = true;
                             break;
                 }
               }
               }
        if(!$hasMatch) 
        {
                echo 'There is no matching data for the input value','<br>';
    }
    ?>
</body>
</html>



