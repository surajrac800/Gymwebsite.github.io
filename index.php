<?php
$insert= false;
if(isset($_POST['name'])){

$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to this database faild due to".
    mysqli_connect_error());
}
// echo "Success connecting to the db";
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `kashitrip`.`kashitrip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
// echo $sql;

if($con->query($sql) == true){
    // echo "Successfully inserted";
    $insert = true;
}
else{
    echo"ERROR: $sql <br> $con->error";
}
$con->close();
}
?>