<?php

    if(isset($_POST["submit"])){
        if($_POST["name"]=="Gandang" && $_POST["password"] == "admin"){
            header("Location:data.php");
        }else{
            $error = true;
        }}
    ?>

<html><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">

</head>

<body>

    <form action="" method="post">
        <div class="container">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <h3 class="Tittle">Login Akun</h3>
                    <?php  if (isset($error)) :?>
                    <p class= "color:red;">Username/password salah</p>
                    <?php endif; ?>
                    <div>
                        <label  class="form-label">Name</label>
                        <input type="text" name="name"
                        class="form-control">
                    </div>
                    <div>
                        <label
                        class="form-label">Password</label>
                        <input type="password"
                        name="password" class="form-control">
                    </div>
                    <br>
                        <button type="submit"
                    name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div> 
    </form>

</body>
</html>