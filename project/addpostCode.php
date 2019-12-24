<?php
 $title= $_POST['title'];
 $desciption= $_POST['descibtion'];
 $date= $_POST['data'];
 $approve= $_POST['approve'];
$conn = mysqli_connect('localhost','root','','blog');
$sql="INSERT INTO post VALUES (Null,'$title','$desciption','$date',Null,'$approve')";
if(mysqli_query($conn,$sql))

{
    echo "insert successfully";
}
else
{
	echo "no insert";

}
?>