
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="style.css">
     <style>
        body{
            background-color: black;
        }
        .container{
            background-color: cornflowerblue;
            margin-top:5rem ;
            border-radius: 1rem;
            border: 3px solid black;
            text-align: center;
        }
        label{
            font-weight: 700;
        }
        input{
            font-weight: 500;
        }
        .hh1{
            width: 70vw;
            display: flex;
            align-self: center;
            justify-self: center;
            align-items: center;
            justify-content: center;
        }
     </style>
</head>
<body class="">
       
    <center class="container w-50  rounded-3 pt-3">
        <h1 class="hh1   rounded text-center  text-black fw-bold">Welcome to Login page</h1>

    <form class=" mt-5" method="post">
        <label for="">Enter Name :</label>
        <input  class = "rounded border" type="text" name="name" id="" required><br><br>

        <label class = "rounded" for="">Enter Email :</label>
        <input  class = "rounded border" type="email" name="email" required><br><br>

        <label class = "rounded"for="">Enter Password :</label>
        <input  class = "rounded border" type="password" name="pass" required><br><br>

        <button class="border mt-3 rounded px-3 mb-3 py-1 fs-5 fw-bold" name="btn">Submit</button><br><br>
    </form>
     <?php
         session_start();
    if(isset($_POST['btn'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $pass= $_POST['pass'];

        $_SESSION ['name'] = $name;
        $_SESSION ['email'] = $email;
        $_SESSION ['pass'] = $pass;

        header('location:MARKSHEET.PHP');
       // echo "Welcome $name to our Website";
    }
    ?>
        </center>

</body>
</html>