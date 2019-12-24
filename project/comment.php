<?php
 $comment=$_POST['comment_body'];
 
$conn = mysqli_connect('localhost','root','','blog');
$sql="INSERT INTO comment VALUES (Null,' $comment',null,Null)";
if(mysqli_query($conn,$sql))

{
    echo "comment successfully";
}
else
{
	echo "no successfully";

}
?>