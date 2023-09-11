<?php

    include "index.php";

    if (isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $marital = $_POST['marital'];
        $ward = $_POST['ward'];
        $district = $_POST['district'];
        $region = $_POST['region'];
        $password = $_POST['password'];

    $sql = " insert into  `sophia` (name,email,phone,gender,marital,ward,district,region,password) values ('$name','$email','$phone','$gender','$marital','$ward','$district','$region','$password')";

    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "data inserted succesfully";
        header('location:read.php');
    }else{
        // die(mysqli_error($conn)); 
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
   <body>
       <h2>Sign up:</h2>

       <form action="" method = "POST">
            <fieldset>
                <div style="text-align:center;">
                    
                <legend>Personal Information:</legend>
                         Full name: <br>
                         <input type="name" name="name" required>
                         <br>
                         Email: <br>
                         <input type="email" name="email" required>
                         <br>
                         Phone: <br>
                         <input type="phone" name="phone" required>
                         <br>
                         Gender: <br>
                         <input type="radio" name="gender" value="Male">Male
                         <input type="radio" name="gender" value="Female">Female
                         <br>
                         Marital status: <br>
                         <input type="marital" name="marital" required><br>
                    
                        Ward:<br>
                        <input type="ward" name="ward" value="" required><br><br>

                        District:<br>
                        <input type="District" name="district" value="" required><br><br>

                        Region:<br>
                        <input type="Region" name="region"  value="" required><br><br>

                         Password:<br>
                         <input type="password" name="password" required>
                         <br><br>

                         <button type="submit" name="submit">submit</button>
                </div>
    
            </fieldset>
       </form>
</body>
</html>
