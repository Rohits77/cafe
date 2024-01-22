<?php
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Complaint=$_POST['Complaint'];


$conn=new mysqli('localhost','root','','canteen');

if($conn->connect_error)
{
   die('Connection failed :'.$conn->connect_error);
}
else
{
$st=$conn->prepare("insert into complaints (name,email,complaint) values(?,?,?)");
$st->bind_param("sss",$Name,$Email,$Complaint);
$st->execute();
echo"INSERTED:";
$st->close();
$conn->close();

}



?>