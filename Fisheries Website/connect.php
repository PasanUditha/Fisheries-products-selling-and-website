<?php
 $name = &_POST['name'];
 $email = &_POST['email'];
 $ProductID = &_POST['ProductID'];
 $SellerID = &_POST['SellerID'];
 $Product = &_POST['Product'];
 $day = &_POST['day'];

 $conn = new mysqli('localhost','root','','comm');
 if($conn->connect_error){
     echo "$conn->connect_error";
     die("Connection Failed : ". $conn->connect_error);
 } else {
     $stmt = $conn->prepare("insert into com1(name, sid, pid, mail, catagory, time) values(?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("ssssss", $name, $SellerID, $ProductID, $email, $Product, $day);
     $execval = $stmt->execute();
     echo $execval;
     echo "Inqury request successfully...";
     $stmt->close();
     $conn->close();
 }

?>