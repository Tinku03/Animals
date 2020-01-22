<html>
<body>

<?php echo $_POST["name"]; 
    if($_POST["name"]=="billy"||$_POST["name"]=="tiger")
    {
        echo " is cat";
    }
    elseif($_POST["name"]=="victor"||$_POST["name"]=="tommy")
    {
        echo " is dog";
    }
    elseif($_POST["name"]=="nandini")
    {
        echo " is cow";
    }
    else 
    {
        echo " oops!  animal doesn't exit.";
    }
?>
</body>
</html>