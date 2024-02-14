<?php
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmPassword=$_POST['confirmPassword'];


$conn= new mysqli( 'localhost','root','','dekalfi');

if($conn->connect_error){
    die('connection Failed: '.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into dekalfi(name,gender,age,email,password,confirmPassword)
    values(?,?,?,?,?,?)");
    $stmt->bind_param('ssisss',$name,$gender,$age,$email,$password,$confirmPassword);
    $stmt->execute();
    echo"you've successfully signed up";
    $stmt->close();
    $conn->close();

}


?>