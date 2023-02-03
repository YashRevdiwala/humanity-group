<?php
$fname = $_POST['fullname'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$add = $_POST['add'];
$occupation = $_POST['occ'];
$username = 'id19885452_root';
$password = 'Z*{A)[xoKW2]BNmo';
$servername = 'localhost';
$dbname = 'id19885452_volunteer_details';

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "INSERT INTO volunteer_details(Name,Email,Phone_no,Address,Occupation) VALUES ('$fname','$email','$phno','$add','$occupation')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

echo "Details Submitted Succesfully";
?>