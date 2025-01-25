<?php
$User_Name=$_POST['User_Name'];
$MailID=$_POST['MailID'];
$Country=$_POST['Country'];
$Feedbacks=$_POST['Feedbacks'];

$conn=new mysqli('localhost','root','','userfeedback');
if($conn->connect_error){
    die('connection failed :'.$conn->connection_error);
}else{
    $stmt=$conn->prepare("insert into userfeedbacks(User_Name,MailID,Country,Feedbacks)
    values(?,?,?,?)");
    $stmt->bind_param("ssss",$User_Name,$MailID,$Country,$Feedbacks);
    $stmt->execute();
    echo "feedback submitted successfully.....";
    $stmt->close();
    $conn->close();
}
?>
