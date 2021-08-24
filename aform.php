
<?php
$conn = mysqli_connect("localhost","root","","webdb");
 $csname= $_POST["csname"];
 $cscode= $_POST["cscode"]; 
 $csdescription=$_POST["csdescription"];
 $department=$_POST["department"];
 $semister=$_POST["semister"];
 $acyear=$_POST["acyear"];
 $csiname=$_POST["csiname"];
 $results=$_POST["results"];
       
    $sql="INSERT INTO coursedb (csname,cscode,csdescription,department,semister,acyear,csiname,results) VALUES('$csname','$cscode','$csdescription','$department','$semister','$acyear','$csiname','$results');";
    $res = mysqli_query($conn, $sql);
   if($res){
      header("Location: csdetails.php");
   }

       ?>
    
