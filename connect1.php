<?php
$Name=$_POST['Name'];
$MailID=$_POST['MailID'];
$Phone_Number=$_POST['Phone_Number'];
$Articles=$_POST['Articles'];

$conn=new mysqli('localhost','root','','userarticle');
if($conn !== FALSE){
    $stmt=$conn->prepare("insert into userarticles(Name,MailID,Phone_Number,Articles)
    values(?,?,?,?)");
    $stmt->bind_param("ssss",$Name,$MailID,$Phone_Number,$Articles);
    $stmt->execute();
    echo "Article submitted successfully.....";
    $stmt->close();
    $conn->close();
}else{
    die('connection failed :'.$conn->connection_error);
}
?>