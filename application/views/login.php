<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href = "<?php echo base_url('public/css/login.css') ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>


<body>
    
    <form action="<?php echo base_url('c_auth/index') ?>" method="post">
    <div class = "gambar">
        <img src="<?php echo base_url('assets/img/pantaiBali.jpg') ?>" alt="">
    </div>
    <div class = "frameLogin" >
        <div class = "Logo">  
            <h1>JENDELA<br>WISATA</h1>
            <h3>contribution</h3>
        </div>

        <div class = "form">
            <input id="name" type="text" name="Email or Username " placeholder ="Username or Email"> 
            <input id="password" type="password" name = "password" placeholder="Password"> 
            <div class="link">
                <a href="#">Forget Password</a>
                <a href="<?php echo base_url('c_auth/register') ?>">Register</a>
            </div>
            <div class ="button">
                <input id ="login" type="submit" name = "Login" value="Login"> 
            </div>
        </div>
        
    </div>
    </form>
   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html> 