
<?php 
$conn = mysqli_connect("localhost","root","","webdb");
$fname = $_POST["fname"];
$mname = $_POST["mname"]; 
$sname = $_POST["sname"]; 
$usname= $_POST["usname"];
$password=$_POST["password"];
$cv=$_POST["cv"];
$email=$_POST["email"];
$mbnumber=$_POST["mbnumber"];
$fb=$_POST["fb"];
$twitter=$_POST["twitter"];
 $ig= $_POST["ig"];
echo $fname;
 $sql="INSERT INTO regidb (fname,mname,sname,usname,password,cv,email,mbnumber,fb,twitter,ig) VALUES ('$fname','$mname','$sname','$usname','$password','$cv','$email','$mbnumber','$fb','$twitter','$ig');";
 $res = mysqli_query($conn,$sql);
if($res) {
    header("location: courses.html ");
}
 

?>