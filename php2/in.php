<?php
$n=$_POST["Name"];
$r=$_POST["Email"];
$o=$_POST["Phone"];
$p=$_POST["Subject"];
$q=$_POST["Message"];

$c=mysqli_connect("localhost","root","","travel");
if(!$c)
die("can't connect"."<br>");
echo "connected";
echo "<br>";
$s="insert into contact(Name, Email, Phone, Subject, Message)value('$n','$r','$o','$p','$q')";
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