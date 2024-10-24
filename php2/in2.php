<?php
$n=$_POST["Name"];
$r=$_POST["Email"];
$o=$_POST["Package"];
$p=$_POST["Travel_date"];
$q=$_POST["People"];
$x=$_POST["Comments"];

$c=mysqli_connect("localhost","root","","travel");
if(!$c)
die("can't connect"."<br>");
echo "connected";
echo "<br>";
$s="insert into book(Name, Email, Package, Travel_date, People, Comments)value('$n','$r','$o','$p','$q','$x')";
if(mysqli_query($c,$s))
{
    echo "Record inserted";
}
else
{
    echo "Problem in command";
}
mysqli_close($c);
?>