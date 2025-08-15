<?php
$servername="localhost"
$username="root";
$password="";
$database_name="database1234";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
};
if(isset($_POST['SAVE'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $message=$_POST['message'];

    $sql_query = "INSERT INTO contact_us (name,email,number,message)
    VALUES ('$name','$email','$number','$message')";

if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " .$sql_query . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>