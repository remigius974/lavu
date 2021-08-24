<?php 
$conn= mysqli_connect("localhost","root","","webdb");
$username = $_POST["usname"];
$password = $_POST["password"];
$username = stripcslashes($username);
$password = stripcslashes($password);

$sql = "SELECT * FROM regidb WHERE usname = '$username' AND password = '$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
if($row['usname']==$username && $row['password']==$password){
    echo "successful";
    header("location: http://localhost/love/rpt.html");
    exit();
}else{
    echo '<script>alert("failed")</script>';
    header("location: http://localhost/love/login.html");
}
?>