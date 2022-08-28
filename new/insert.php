<?php
$username=$_POST['username'];
$email=$_POST['email'];
$class=$_POST['class'];
$t1=$_POST['t1'];
$t2=$_POST['t2'];
$t3=$_POST['t3'];
$t4=$_POST['t4'];
$t5=$_POST['t5'];
$t6=$_POST['t6'];
$t7=$_POST['t7'];
$t8=$_POST['t8'];
$w1=$_POST['w1'];
$w2=$_POST['w2'];
$w3=$_POST['w3'];
$w4=$_POST['w4'];
$w5=$_POST['w5'];
$w6=$_POST['w6'];
$w7=$_POST['w7'];
$w8=$_POST['w8'];
$o1=$_POST['o1'];
$o1d=$_POST['o1d'];
$o2=$_POST['o2'];
$o2d=$_POST['o2d'];
$o3=$_POST['o3'];
$o3d=$_POST['o3d'];
$o4=$_POST['o4'];
$o4d=$_POST['o4d'];
$o5=$_POST['o5'];
$o5d=$_POST['o5d'];
$o6=$_POST['o6'];
$o6d=$_POST['o6d'];
$o7=$_POST['o7'];
$o7d=$_POST['o7d'];
$o8=$_POST['o8'];
$o8d=$_POST['o8d'];
$o9=$_POST['o9'];
$o9d=$_POST['o9d'];
$o10=$_POST['o10'];
$o11=$_POST['o11'];
$o12=$_POST['o12'];
$o13=$_POST['o13'];

$conn=new mysqli('localhost','root','','feedback');
if($conn->connect_error)
{
    die('Connection Failed :'.$conn->connect_error);
}
else 
{
    $stmt=$conn->prepare("INSERT INTO feedbackdb(username,email,class,t1,t2,t3,t4,t5,t6,t7,t8,w1,w2,w3,w4,w5,w6,w7,w8,o1,o1d,o2,o2d,o3,o3d,o4,o4d,o5,o5d,o6,o6d,o7,o7d,o8,o8d,o9,o9d,o10,o11,o12,o13) 
    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssssssssssssssssssssssssssssssssssss",$username,$email,$class,$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$o1,$o1d,$o2,$o2d,$o3,$o3d,$o4,$o4d,$o5,$o5d,$o6,$o6d,$o7,$o7d,$o8,$o8d,$o9,$o9d,$o10,$o11,$o12,$o13);
    $stmt->execute();
    echo "registration successful";
    $stmt->close();
    $conn->close();
}