<?php
$con= mysqli_connect("localhost","root","","travel");
$q1= "Create table book(Name varchar(20), Email varchar(45), Package varchar(25), Travel_date integer(10), People integer(10), Comments varchar(25))";
if(mysqli_query($con,$q1))
{
    echo "table created";
}
else
{
    echo "not created";
}
mysqli_close($con);
?>