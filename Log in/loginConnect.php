<?php

$email=$_POST['email'];
$password=$_POST['password'];


$conn= new mysqli( 'localhost','root','','dekalfi');

if($conn->connect_error){
    die('connection Failed: '.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("select * from dekalfi where email=?");
    
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $stmt_results=$stmt->get_result();
    if($stmt_results->num_rows>0){
        $data=$stmt_results->fetch_assoc();
        if($data['password']===$password){
            echo" <h2>You have successfully login</h2>";
        }else{
            echo" <h2>Invalid Email or Password</h2>";
        }
    }else{
        echo" <h2>Invalid Email or Password</h2>";
    }
    $stmt->close();
    $conn->close();

}


?>