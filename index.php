<!DOCTYPE html>
<head>
<title>Form</title>
</head>
<body>
<form action="index.php" method="post">
<h1> HTML BASICS </h1><hr>
<p> Information </p>
    <p>NAME:</p><input type="text" name="name" id="name" placeholder="Enter your name">
    <p>AGE:</p><input type="text" name="age" id="age" placeholder="Enter your Age">
    <p>EMAIL:</p><input type="email" name="email" id="email" placeholder="Enter your email">
    <p>PHONE:</p><input type="phone" name="phone" id="phone" placeholder="Enter your phone">
    <p>ADDRESS:</p><textarea name="address" id="address" cols="30" rows="10" placeholder="Enter your address"></textarea>
            <button class="btn">Submit</button> 
</form>
</body>            
</html>
<?php
if(isset($_POST['name']))
{
    
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con)
    {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $sql = "INSERT INTO `info`.`info` (`name`, `age`, `email`, `phone`, `address`) VALUES ('$name', '$age', '$email', '$phone', '$address');";

    if($con->query($sql) == true)
    {
        $insert = true;
    }
    else
    {
        echo "ERROR";
    }
}    
?>
