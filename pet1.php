<html> 
    <body>
        <?php 
            $animals =  array( array( "name"=>"billy", "type"=>"cat", "age"=>7 ),
                        array ( "name"=>"tiger", "type"=>"cat", "age"=>7 ),
                        array ( "name"=>"tommy", "type"=>"dog", "age"=>2 ), 
                        array ( "name"=>"victor", "type"=>"dog", "age"=>5 ),
                        array( "name"=>"nandini", "type"=>"cow", "age"=>7 ) );

            $hasMatch = false;
            if(isset($_GET['name'])) {
                if( sizeof($animals) > 0)
                {
                    
                    foreach ($animals as $animal) 
                    {
                        if($animal['name'] == $_GET['name']) {
                            echo "<b>Name: </b>" . $animal['name'] . '<br>';
                            echo "<b>Type: </b>" . $animal['type'] . '<br>';
                            echo "<b> Age: </b>" . $animal['age'] . '<br>';
                            $hasMatch = true;
                            break;
                        }
                    }        
                }
            }
            if(!$hasMatch) {
                echo 'There is no matching data for the input value','<br>';
            }
        ?>
    </body>
</html> 