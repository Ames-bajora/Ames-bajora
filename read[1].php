<?php
include "index.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
</head>
<body>
    <div class="contain">
        <button><a href="create.php">add user</a></button>
        <div class="self">
            <table>
                
               <colgroup>

                    <col style="background-color: yellow" >
                    <col style="background-color: green" >
                    <col style="background-color: red">
                    <col style="background-color: orange">
                    <col style="background-color: indigo">
                    <col style="background-color: purple">
                    <col style="background-color: blue">
                    <col style="background-color: pink">
            
                </colgroup>

                <thead>
                    <tr>
                        <th scope="col">SI No_</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Marital</th>
                        <th scope="col">Password</th>
                        <th scope="col">Operation</th>    
                    </tr>
                </thead>
                <tbody>
<?php
    
     $sql="Select * from `sola`";
     $result=mysqli_query($conn,$sql);
     if($result){
        while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['Name'];
        $email=$row['Email'];
        $phone=$row['Phone'];
        $gender=$row['Gender'];
        $marital=$row['Marital'];
        $password=$row['Password'];

        echo '
        <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        <td>'.$gender.'</td>
        <td>'.$marital.'</td>
        <td>'.$password.'</td>
        <td><button><a href="update.php?dateid='.$id.'">Update</a></button>
        <button><a href="delete.php?messid='.$id.'">Delete</a></button></td>
        </tr>';
     }
     
}
?>



                </tbody>
            </table>
        </div>
    </div>
</body>
</html>