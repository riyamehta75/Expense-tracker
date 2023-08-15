<?php

  $name=$_POST['name']; 
  $email=$_POST['email'];
  $password=$_POST['password'] ;

  //database connection
  $conn=new mysqli('localhost','root','','expense');
  if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
 }else{
    $stmt=$conn->prepare("insert into expense(name,email,password)
        values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$password);
    $stmt->execute();
    echo "login succesfully";
    $stmt->close();
    $conn->close();
}
 
?>  