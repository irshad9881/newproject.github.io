<?php 
$servername="localhost";
$username="root";
$password="";
$databse_name="databaseschool";
$conn=mysqli_connect($servername,$username,$password,$databse_name);
if(!conn)
{
    die("connection failed:"mysqli_connect_error() );
}
if(isset ($_POST['save']))
{
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $enrrolment_no=$_POST['enrrolment_no'];
 
$sql_query="INSERT INTO detail2 (first_name ,last_name ,email,password,enrrolment_no) VALUES('$first_name','$last_name','$email','$password','$enrrolment_no')";
if($mysqli_query ($conn,$sql_query))
{
    echo "New detail enter sucessufuly!";
}
else{
    echo "Error:".$sql ."".mysqli_error($conn);
}
mysqli_colse($conn);
}
?>