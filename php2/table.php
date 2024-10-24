<?php
$con= mysqli_connect("localhost","root","","travel");
$q1= "Create table contact(Name varchar(20), Email varchar(45), Phone integer(10), Subject varchar(20), Message varchar(30))";
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