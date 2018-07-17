<?php
$hostname='localhost';
$username='root';
$password='';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=college",$username,$password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
    echo 'Connected to Database<br/>';

 
$sql = "INSERT INTO students (student_name, student_email, student_city)
VALUES ('".$_POST["stu_name"]."','".$_POST["stu_email"]."','".$_POST["stu_city"]."')";


if ($dbh->query($sql)) {
    echo "New record created successfully";
} 
else{
    echo "Data not sucessfully inserted";
}

    $dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?> 