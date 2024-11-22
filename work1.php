<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background:radial-gradient(grey,white,grey);
        }
    </style>
</head>
<body>
    <?php
       if($_SERVER['REQUEST_METHOD']=='POST'){
        $namef=$_POST['username'];
        $namel=$_POST['lastname'];
        $gender=$_POST['radio'];
        $email=$_POST['email'];
        $tel=$_POST['tel'];
        $age=$_POST['age'];
        $character=$_POST['character'];
        $dob=$_POST['dob'];
        $p=$_POST['p'];


       } 
    ?>
    <p>Thank you for registering in RESTA community</p>
    <p>Here is your information.please check if they are true and if not return back to make them true </p>
  
  
    <table border="1" >
<tr>
    <td>first name</td>
    <td><?php echo $namef;?></td>
</tr>
<tr>
    <td>last name</td>
    <td><?php echo $namel;?></td>
</tr>
<tr>
    <td>Date of birth</td>
    <td><?php echo $dob;?></td>
</tr>
<tr>
    <td>gender</td>
    <td><?php echo $gender;?></td>
</tr>
<tr>
    <td>email</td>
    <td><?php echo $email;?></td>
</tr>
<tr>
    <td>tel </td>
    <td><?php echo $tel; ?></td>
</tr>
<tr>
    <td>age</td>
    <td><?php echo $age;?></td>
</tr>
<tr>
    <td>sport part of the day</td>
    <td><?php echo $p; ?></td>
    </tr>

<tr>
    <td>character</td>
    <td><?php echo $character;?></td>
    </tr>
    </table>
    <button><a href="work.html">refill the true info.</a></button>

</body>
</html>