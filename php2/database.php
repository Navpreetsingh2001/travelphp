<?php
  $c= mysqli_connect("localhost","root","");
    if(!$c)
    die("not connected");
    echo "connected ";

    $q="Create database travel";
    if(mysqli_query($c,$q))
    {
        echo "Database created";
    }
    else
    {
        echo "Database not created";
    }
    mysqli_close($c);
?>


