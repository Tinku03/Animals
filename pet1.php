<html> 
    <body>
        <?php 
            // $animals =  array( array( "name"=>"billy", "type"=>"cat", "age"=>7 ),
            //             array ( "name"=>"tiger", "type"=>"cat", "age"=>7 ),
            //             array ( "name"=>"tommy", "type"=>"dog", "age"=>2 ), 
            //             array ( "name"=>"victor", "type"=>"dog", "age"=>5 ),
            //             array( "name"=>"nandini", "type"=>"cow", "age"=>7 ) );

            // $hasMatch = false;
            // if(isset($_GET['name'])) {
            //     if( sizeof($animals) > 0)
            //     {
                    
            //         foreach ($animals as $animal) 
            //         {
            //             if($animal['name'] == $_GET['name']) {
            //                 echo "<b>Name: </b>" . $animal['name'] . '<br>';
            //                 echo "<b>Type: </b>" . $animal['type'] . '<br>';
            //                 echo "<b> Age: </b>" . $animal['age'] . '<br>';
            //                 $hasMatch = true;
            //                 break;
            //             }
            //         }        
            //     }
            // }
            // if(!$hasMatch) {
            //     echo 'There is no matching data for the input value','<br>';
            // }
            include('connect.php');
            $sql = "SELECT * FROM animals_details";
            $result = mysqli_query($conn, $sql);
            //echo $_GET['name'];
            if(isset($_GET['name'])) {
                if (!$result || mysqli_num_rows($result) != 0 ){
                // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                    //if($row['name'] == $_GET['name']) {
                        if($row["Name"] == "Tiger") {
                            echo "Name is there <br>";
                        }
                        //echo $row["Name"];
                        //echo "Name: " . $row["Name"]. " - Type: " . $row["Type"]. " -Age:" . $row["Age"]. "<br>";
                    //}
                    
                }
            } else {
                echo "0 results";
            }
        }


        ?>
    </body>
</html> 